<?php

namespace App\Models;

use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'nama',
        'deskripsi',
        'tanggal',
        'gambar',
    ];

    public array $translatable = [
        'nama',
        'deskripsi'
    ];
}
