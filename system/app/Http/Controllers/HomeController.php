<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Komen;

class HomeController extends Controller
{
    // 
    // 
    // User

    function user()
    {
        return view('user.home');
    }
    function artikel()
    {
        $data['list_artikel_lifestyle'] = artikel::where('kategori',  'life style')->get();
        $data['list_artikel_fashion'] = artikel::where('kategori',  'fashion')->get();
        $data['list_artikel_beauty'] = artikel::where('kategori',  'beauty')->get();
        $data['list_artikel_food'] = artikel::where('kategori',  'food and wellness')->get();
        return view('user.artikel.index', $data);
    }
    function artikel_show(artikel $artikel)
    {

        $data['artikel'] = $artikel;
        return view('user.artikel.show', $data);
    }


    function kontak()
    {
        return view('user.kontak');
    }
}
