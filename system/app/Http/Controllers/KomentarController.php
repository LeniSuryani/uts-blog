<?php

namespace App\Http\Controllers;

use App\Models\Komen;

class KomentarController extends Controller
{
    function index()
    {
        $data['list_komen'] = komen::all();
        return view('admin.komentar.index', $data);
    }
}
