<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posyandu extends Model
{
    use HasFactory;
    //menentukan nama tabel
    protected $table = "posyandu";
    //menentukan primarykey
    protected $primaryKey = "id_posyandu";
    protected $guard = "id_posyandu";//melindungi agar kolom tidak diisi
}
