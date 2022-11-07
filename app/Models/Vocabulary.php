<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vocabulary extends Model
{
    use HasFactory;

    protected $fillable = [
        'vocabulary',
        'kanji',
        'cn_vn_word',
        'meaning_vi',
        'meaning_en',
        'status',
        'lesson_id',
    ];
}
