<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\UserDetail;
use App\Models\Komen;

class Artikel extends Model
{
    protected $table = 'artikel';
    use HasFactory, Notifiable;

    // one to many, merelasikan user dengan produk
    function komen()
    {
        return $this->hasMany(komen::class, 'id_artikel'); //id_user adalah foreign key nya
    }
}
