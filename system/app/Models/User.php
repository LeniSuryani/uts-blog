<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\UserDetail;
use App\Models\Produk;

class User extends Authenticatable
{
    protected $table = 'user';
    use HasFactory, Notifiable;

    // one to many, merelasikan user dengan produk
    function artikel()
    {
        return $this->hasMany(Artikel::class, 'id_user'); //id_user adalah foreign key nya
    }
}
