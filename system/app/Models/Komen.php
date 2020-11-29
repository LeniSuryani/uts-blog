<?php

namespace App\Models;

class Komen extends Model
{
    protected $table = 'komen';


    // // untuk menampilkan data di show produk
    function komen()
    {
        return $this->belongsTo(Artikel::class, 'id_artikel'); //id_user adalah foreign key nya, 
    }
}
