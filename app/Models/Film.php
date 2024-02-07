<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Film extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['title', 'year', 'description', 'category_id'];

    public function category(): BelongsTo
    { 
        return $this->belongsTo(Category::class); 
    }
}
