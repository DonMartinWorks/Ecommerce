<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\SliderDataTable;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    use ImageUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index(SliderDataTable $dataTable)
    {
        return $dataTable->render('roles.admin.slider.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roles.admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'banner' => ['required', 'image', 'max:2048'],
            'type' => ['nullable', 'string', 'max:200'],
            'title' => ['required', 'max:200'],
            'starting_price' => ['nullable', 'max:200'],
            'btn_url' => ['nullable', 'url'],
            'serial' => ['required'],
            'status' => ['required', 'integer', 'between:0,1'],
        ]);

        $slider = new Slider();

        # Image
        $imagePath = $this->uploadImage($request, 'banner', 'uploads/banners');
        $slider->banner = $imagePath;


        $slider->type = $request->type;
        $slider->title = $request->title;
        $slider->starting_price = $request->starting_price;
        $slider->btn_url = $request->btn_url;
        $slider->serial = $request->serial;
        $slider->status = $request->status;
        $slider->type = $request->type;

        $slider->save();

        $msg = __('Slider created successfully!');
        toastr()->success($msg);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slider = Slider::findOrFail($id);

        return view('roles.admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'banner' => ['nullable', 'image', 'max:2048'],
            'type' => ['nullable', 'string', 'max:200'],
            'title' => ['required', 'max:200'],
            'starting_price' => ['nullable', 'max:200'],
            'btn_url' => ['nullable', 'url'],
            'serial' => ['required'],
            'status' => ['required', 'integer', 'between:0,1'],
        ]);

        $slider = Slider::findOrFail($id);

        # Image
        $imagePath = $this->updateImage($request, 'banner', 'uploads/banners', $slider->banner);
        // Si $imagePath no se actualiza, mantiene la imagen anterior.
        $slider->banner = empty(!$imagePath) ? $imagePath : $slider->banner;


        $slider->type = $request->type;
        $slider->title = $request->title;
        $slider->starting_price = $request->starting_price;
        $slider->btn_url = $request->btn_url;
        $slider->serial = $request->serial;
        $slider->status = $request->status;
        $slider->type = $request->type;

        $slider->save();

        $msg = __('Slider updated successfully!');
        toastr()->success($msg);

        return redirect()->route('admin.slider.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider =  Slider::findOrFail($id);
        $this->deleteImage($slider->banner);
        $slider->delete();

        return response(['status' => 'success', 'message' => __('Slider deleted successfully')]);
    }
}
