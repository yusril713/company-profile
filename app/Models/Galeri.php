<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;
    protected $table = 'tb_galeri';

    public function detail() {
        return $this->hasMany(GaleriDetail::class, 'galeri_id', 'id');
    }
}
