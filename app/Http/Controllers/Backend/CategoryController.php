<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\CategoryDataTable;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CategoryDataTable $datatable)
    {
        return $datatable->render('roles.admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roles.admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'icon' => ['required', 'not_in:empty'],
            'name' => ['required', 'max:150', 'unique:categories,name'],
            'status' => ['required'],
        ]);

        $category = new Category();
        $category->icon = $request->icon;
        $category->name = $request->name;
        # Generación del SLUG
        $category->slug = Str::slug($request->name);
        $category->status = $request->status;
        $category->save();

        $msg = __('Category created successfully!');
        toastr()->success($msg);

        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);

        return view('roles.admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'icon' => ['required', 'not_in:empty'],
            'name' => ['required', 'max:150', 'unique:categories,name,' . $id],
            'status' => ['required'],
        ]);

        $category = Category::findOrFail($id);

        $category->icon = $request->icon;
        $category->name = $request->name;
        # Generación del SLUG
        $category->slug = Str::slug($request->name);
        $category->status = $request->status;
        $category->save();

        $msg = __('Category updated successfully!');
        toastr()->success($msg);

        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        // Revisar si tiene subcategorias, si NO TIENE se puede eliminar
        $subCategory = SubCategory::where('category_id', $category->id)->count();
        if ($subCategory) {
            return response(['status' => 'error', 'message' => __('This item have sub-items for delete, if you want to delete them you need to delete those items!')]);
        }
        $category->delete();

        return response(['status' => 'success', 'message' => __('Category deleted successfully')]);
    }

    /**
     * Funcion para cambiar el status desde la tabla.
     */
    public function change_status(request $request)
    {
        $category = Category::findOrFail($request->id);

        $category->status = $request->status == 'true' ? 1 : 0;
        $category->save();

        return response(['status' => 'success', 'message' => __('Status updated successfully')]);
    }
}
