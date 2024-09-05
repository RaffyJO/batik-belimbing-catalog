<?php

namespace App\Models;

use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'nama',
        'deskripsi',
    ];

    public array $translatable = [
        'nama',
        'deskripsi'
    ];
}
