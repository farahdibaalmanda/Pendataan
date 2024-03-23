<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    use HasFactory;
    protected $table = "petugas";
    protected $primaryKey = "id_petugas";
    protected $guard = "id_petugas";//melindungi agar kolom tidak diisi
    protected $hidden = "password";//untuk menyembunyikan sebuah kolom
}
