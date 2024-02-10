<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Devices extends Model
{
    use HasFactory;

    protected $fillable = ['device'];

    public function problems(): HasMany
    {
        return $this->hasMany(Problems::class, 'device_id');
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'device_id');
    }
}
