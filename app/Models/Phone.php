<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    protected $table='wa_number';
    public static function whatsapp() {
        return self::firstOrFail();
    }
}
