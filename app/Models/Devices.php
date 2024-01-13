<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Devices extends Model
{
    use HasFactory;

    protected $fillable = ['devices'];

    public function problems(): HasMany
    {
        return $this->hasMany(Problems::class);
    }
}
