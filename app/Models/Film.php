<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Film extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = ['title', 'year', 'description'];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
    
}

