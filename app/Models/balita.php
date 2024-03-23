<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class balita extends Model
{
    use HasFactory;
    protected $table = "balita";
    protected $primaryKey = "id_balita";
    protected $guard = "id_balita";//melindungi agar kolom tidak diisi

}
