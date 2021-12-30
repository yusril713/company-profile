<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestFile extends Model
{
    use HasFactory;
    protected $table = 'tb_request_file';

    public static function notif() {
        return self::get();
    }

    public function kegiatan() {
        return $this->belongsTo(Kegiatan::class, 'kegiatan_id', 'id');
    }
}
