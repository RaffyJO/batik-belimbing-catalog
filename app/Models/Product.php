<?php

namespace App\Models;

use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'nama',
        'deskripsi',
        'gambar'
    ];

    public array $translatable = [
        'nama',
        'deskripsi'
    ];
}
