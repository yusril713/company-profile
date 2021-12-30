<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'tb_produk';
    public function detail() {
        return $this->hasMany('App\Models\ProdukDetail');
    }

    public function detail_cover() {
        return $this->hasOne('App\Models\ProdukDetail');
    }

    public function image() {
        return $this->hasMany('App\Models\ProdukDetail', 'produk_id', 'id');
    }
}
