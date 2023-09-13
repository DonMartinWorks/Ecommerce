<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * return admin dashboard.
     */
    public function dashboard()
    {
        return view('roles.admin.dashboard');
    }

    /**
     * return admin login
     */
    public function login()
    {
        return view('roles.admin.auth.login');
    }
}
