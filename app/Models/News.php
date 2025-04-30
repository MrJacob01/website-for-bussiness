<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class News extends Model
{
    /** @use HasFactory<\Database\Factories\NewsFactory> */
    use HasFactory, HasTranslations;


    // public function images(): MorphMany
    // {
    //     return $this->morphMany(Image::class, 'imagable');
    // }

}
