<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait ImageUploadTrait
{
    /**
     * Trait creado con la finalidad de agregar las imagenes en el disco y asociarlo en la DB
     */

    //Funcion para guardar las imagenes.
    public function uploadImage(Request $request, $inputName, $path)
    {
        if ($request->hasFile($inputName)) {

            $image = $request->$inputName;
            $ext = $image->getClientOriginalExtension();
            $imageName = 'image_' . uniqid() . '.' . $ext;

            $image->move(public_path($path), $imageName);

            return $path . '/' . $imageName;
        }
    }
}
