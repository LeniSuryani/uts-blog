<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\UserDetail;

class AuthController extends Controller
{

    function showLogin()
    {
        return view('login');
    }

    function loginProcess()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            return redirect('template.admin')->with('success', 'Login Berhasil');
        } else {
            // return redirect('template.admin')->with('success', 'Login Berhasil');
            return back()->with('danger', 'Login gagal. Silahkan cek email dan password anda!');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('template');
    }

    function showRegister()
    {
        return view('register');
    }
    function storeRegister()
    {
        // produk ini sama dengan model
        $user = new user;
        // // kiri= nama (database), kanan= nama(codingan view)
        $user->nama = request('nama');
        $user->username = request('username');
        $user->password = bcrypt(request('password'));
        $user->email = request('email');
        $user->save();

        // relasi one to one
        $UserDetail = new UserDetail;
        $UserDetail->id_user = $user->id;
        $UserDetail->no_hp = request('no_hp');
        $UserDetail->save();
        // ->with('success',) ini merupakan alert
        return redirect('login')->with('success', 'Silahkan Login');
    }
    function forgotPassword()
    {
    }
}
