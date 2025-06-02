<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'content',
        'date',
        'author',
        'image_path',
        'is_draft',
    ];

    protected $casts = [
        'date' => 'date',
    ];
}
