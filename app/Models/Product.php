<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'deskripsi',
        'gambar',
    ];

    public static function boot()
    {
        parent::boot();

        static::updating(function ($product) {
            if ($product->isDirty('image')) {
                // Get old image path
                $oldImagePath = $product->getOriginal('image');

                // Delete old image if it exists
                if ($oldImagePath && Storage::exists($oldImagePath)) {
                    Storage::delete($oldImagePath);
                }
            }
        });

        static::deleted(function ($product) {
            // Get image path
            $imagePath = $product->image;

            // Delete image if it exists
            if ($imagePath && Storage::exists($imagePath)) {
                Storage::delete($imagePath);
            }
        });
    }
}
