<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vocabulary extends Model
{
    use HasFactory;

    protected $fillable = [
        'original',
        'meaning_vi',
        'meaning_en',
        'status',
        'lesson_id',
    ];
}
