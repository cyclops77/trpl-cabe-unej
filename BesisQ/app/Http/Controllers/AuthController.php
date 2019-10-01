<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
    	return view('public.auth.login');
    }
    public function postlogin(Request $request)
    {
    	if (Auth::attempt($request->only('email','password'))) {
    		return redirect('/index');
    	}
    	return 'Password Salah';
    }
    public function logout()
    {
        Auth::logout();
        return view('public.auth.login');
    }
    public function role()
    {
        $role = Auth()->user()->role;
        if (Auth()->user()->role == 'admin') {
            return view('dashboard.admin');
        }else if (Auth()->user()->role == 'mahasiswa') {
            return redirect('/beasiswa');
        }else if (Auth()->user()->role == 'perusahaan') {
            return view('dashboard.perusahaan');
        }
    }
}
