<?php

namespace App\Http\Controllers;

use App\Models\Artikel;

class ArtikelController extends Controller
{
    function dashboard()
    {
        return view('admin.dashboard');
    }
    function index()
    {
        $data['list_artikel'] = artikel::all();
        return view('admin.artikel.index', $data);
    }
    function create()
    {
        return view('admin.artikel.create');
    }
    function store()
    {
        $artikel = new artikel;
        $artikel->judul = request('judul');
        $artikel->content = request('content');
        $artikel->tag = request('tag');
        $artikel->kategori = request('kategori');
        $artikel->save();
        return redirect('admin/artikel')->with('success', 'Data Berhasil Ditambahkan');
    }
    function show(artikel $artikel)
    {
        // show yg lama
        $data['artikel'] = $artikel;
        return view('admin.artikel.show', $data);
    }
    function edit(artikel $artikel)
    {
        $data['artikel'] = $artikel;
        return view('admin.artikel.edit', $data);
    }
    function update(artikel $artikel)
    {

        $artikel->judul = request('judul');
        $artikel->content = request('content');
        $artikel->tag = request('tag');
        $artikel->kategori = request('kategori');

        $artikel->save();

        return redirect('admin/artikel')->with('warning', 'Data Berhasil Diubah');
    }
    function destroy(artikel $artikel)
    {
        $artikel->delete();
        return redirect('admin/artikel')->with('danger', 'Data Berhasil Dihapus');
    }
}
