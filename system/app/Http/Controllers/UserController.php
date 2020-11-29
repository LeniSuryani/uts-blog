<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{

    function index()
    {
        $data['list_user'] = user::all();
        return view('admin.user.index', $data);
    }
    function create()
    {
        return view('admin.user.create');
    }
    function store()
    {
        $user = new user;
        $user->nama_user = request('nama_user');
        $user->username = request('username');
        $user->password = bcrypt(request('password'));

        $user->save();
        return redirect('admin/user')->with('success', 'Data Berhasil Ditambahkan');
    }
    function show(user $user)
    {
        // show yg lama
        $data['user'] = $user;
        return view('admin.user.show', $data);
    }
    function edit(user $user)
    {
        $data['user'] = $user;
        return view('admin.user.edit', $data);
    }
    function update(user $user)
    {

        $user->nama_user = request('nama_user');
        $user->username = request('username');
        $user->password = bcrypt(request('password'));
        $user->save();

        return redirect('admin/user')->with('warning', 'Data Berhasil Diubah');
    }
    function destroy(user $user)
    {
        $user->delete();
        return redirect('admin/user')->with('danger', 'Data Berhasil Dihapus');
    }
}
