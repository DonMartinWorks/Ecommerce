<?php

namespace App\Http\Controllers\Backend;

use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;
use App\DataTables\BrandDataTable;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    use ImageUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index(BrandDataTable $dataTable)
    {
        return $dataTable->render('roles.admin.brand.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roles.admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'logo' => ['required', 'image', 'max:1024'],
            'name' => ['required', 'max:200', 'unique:brands,name'],
            'status' => ['required', 'integer', 'between:0,1'],
            'is_featured' => ['required', 'integer', 'between:0,1'],
        ]);

        $logoPath = $this->uploadImage($request, 'logo', 'uploads/brands', 'brand');
        $brand = new Brand();

        $brand->logo = $logoPath;
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name);
        $brand->is_featured = $request->is_featured;
        $brand->status = $request->status;
        $brand->save();

        $msg = __('Brand created successfully!');
        toastr()->success($msg);

        return redirect()->route('admin.brand.index');
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
        $brand = Brand::findOrFail($id);
        return view('roles.admin.brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'logo' => ['image', 'max:1024'],
            'name' => ['required', 'max:200', 'unique:brands,name,' . $id],
            'status' => ['required', 'integer', 'between:0,1'],
            'is_featured' => ['required', 'integer', 'between:0,1'],
        ]);

        $brand = Brand::findOrFail($id);
        $logoPath = $this->updateImage($request, 'logo', 'uploads/brands', $brand->logo, 'brand');

        $brand->logo = empty(!$logoPath) ? $logoPath : $brand->logo;
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name);
        $brand->is_featured = $request->is_featured;
        $brand->status = $request->status;
        $brand->save();

        $msg = __('Brand updated successfully!');
        toastr()->success($msg);

        return redirect()->route('admin.brand.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
