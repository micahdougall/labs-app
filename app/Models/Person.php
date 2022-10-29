<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Person extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }

    public function nationalities(): BelongsToMany
    {
        return $this->belongsToMany(Nationality::class);
    }
}
