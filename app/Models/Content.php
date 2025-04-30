<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Psy\CodeCleaner\FunctionContextPass;
use Spatie\Translatable\HasTranslations;

class Content extends Model
{
    /** @use HasFactory<\Database\Factories\ContentFactory> */
    use HasFactory, HasTranslations;

    protected $fillable = ['title', 'text', 'subcategory_id', 'image_id'];

    public array $translatable = ['title', 'text'];

    public function subcategory(): BelongsTo
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imagable');
    }


}
