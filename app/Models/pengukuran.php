<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengukuran extends Model
{
    use HasFactory;
    protected $table = "pengukuran";
    protected $primaryKey = "id_pengukuran";
    protected $guard = "id_pengukuran";//melindungi agar kolom tidak diisi
}
