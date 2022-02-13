<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminAuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function checkLogin(Request $request)
    {
        $berita = Admin::where('username', $request->username)->first();

        if (!$berita) {
            return redirect('admin/login')->with('success', 'Logi Gagal');   
        }

        session(['username' => $berita['username']]);
        return redirect('admin')->with('success', 'Login Success');  
    }

    public function logout(Request $request)
    {
        $request->session()->flush(); 
        return redirect('admin')->with('success', 'Login Success');  
    }
}
