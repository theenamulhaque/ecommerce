<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard() {
        return view('admin.dashboard');
    }

    // admin login method ===============
    function login() {
        return view('admin.auth.login');
    }
}
