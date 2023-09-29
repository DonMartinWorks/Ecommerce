<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use File;

class UserProfileController extends Controller
{
    public function index()
    {
        return view('frontend.dashboard.profile');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:100'],
            'email' => ['required', 'email', 'unique:users,email,' . Auth::user()->id],
            'username' => ['required', 'max:100', 'unique:users,username,' . Auth::user()->id],
            'phone' => ['required', 'max:18', 'unique:users,phone,' . Auth::user()->id],
            'image' => ['image', 'max:1024']
        ]);

        //Para obtener al usuario conectado
        $user = Auth::user();

        # Existe una imagen antigua, para eliminar si se actualiza
        if ($request->hasFile('image')) {
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
        $user->phone = $request->phone;
        $user->username = $request->username;

        $user->save();

        $msg = __('Profile updated successfully!');
        toastr()->success($msg);

        return redirect()->back();
    }

    public function password(Request $request)
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
