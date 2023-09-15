<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;

class ProfileController extends Controller
{
    /**
     * return admin dashboard.
     */
    public function index()
    {
        return view('roles.admin.profile.index');
    }

    /**
     * update admin profile
     */
    public function admin_profile(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:100'],
            'email' => ['required', 'email', 'unique:users,email,' . Auth::user()->id],
            'image' => ['image', 'max:1024']
        ]);

        //Para obtener al usuario conectado
        $user = Auth::user();

        // Para agregar una imagen avatar o actualizarla
        if ($request->hasFile('image')) {
            # Eliminacion de la imagen actual para reemplazarla.
            if (File::exists(public_path($user->image))) {
                File::delete(public_path($user->image));
            }

            $image = $request->image;
            $imageName = rand() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/avatars'), $imageName);

            $path = "uploads/avatars/" . $imageName;
            $user->image = $path;
        }


        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        $msg = __('Profile updated successfully!');
        toastr()->success($msg);

        return redirect()->back();
    }

    /**
     * update password for user
     */
    public function update_password(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        $request->user()->update([
            'password' => bcrypt($request->password)
        ]);

        $msg = __('Password updated successfully!');
        toastr()->success($msg);

        return redirect()->back();
    }
}
