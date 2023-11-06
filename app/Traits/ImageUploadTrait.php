<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
// use File;

trait ImageUploadTrait
{
    /**
     * Trait creado con la finalidad de agregar las imagenes en el disco y asociarlo en la DB.
     * Si habia una imagen que se actualizó, esta se elimina y reemplaza.
     */

    public function uploadImage(Request $request, $inputName, $path, $name = 'image')
    {
        if ($request->hasFile($inputName)) {

            $image = $request->$inputName;
            $ext = $image->getClientOriginalExtension();
            $imageName = $name . '_' . uniqid() . '.' . $ext;

            $image->move(public_path($path), $imageName);

            return $path . '/' . $imageName;
        }
    }

    //Funcion para actualizar las imagenes.
    public function updateImage(Request $request, $inputName, $path, $oldPath = null)
    {
        if ($request->hasFile($inputName)) {
            # Eliminacion de la imagen actual para reemplazarla.
            if (File::exists(public_path($oldPath))) {
                File::delete(public_path($oldPath));
            }

            $image = $request->$inputName;
            $ext = $image->getClientOriginalExtension();
            $imageName = 'image_' . uniqid() . '.' . $ext;

            $image->move(public_path($path), $imageName);

            return $path . '/' . $imageName;
        }
    }

    //Función para eliminar la imagen
    public function deleteImage(string $path)
    {
        # Eliminacion de la imagen actual para reemplazarla.
        if (File::exists(public_path($path))) {
            File::delete(public_path($path));
        }
    }
}
