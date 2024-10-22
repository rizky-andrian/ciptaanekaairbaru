<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBidang extends Model
{
    use HasFactory;
    protected $table = 'kategori_bidang';


    public function bidang()
    {
        return $this->hasMany(Bidang::class, 'id_bidang', 'id');
    }
}
