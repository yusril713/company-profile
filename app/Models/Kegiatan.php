<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;
    protected $table = 'tb_kegiatan';

    public function strategi() {
        return $this->belongsTo(Strategi::class, 'strategi_id', 'id');
    }
}
