<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kanji extends Model
{
    use HasFactory;

    protected $fillable = [
        'kanji',
        'cn_vn_word',
        'meaning_vi',
        'meaning_en',
        'status',
        'level_id',
    ];
}
