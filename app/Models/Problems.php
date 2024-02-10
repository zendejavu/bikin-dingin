<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Problems extends Model
{
    use HasFactory;

    protected $fillable = ['problem'];

    public function devices(): HasOne
    {
        return $this->hasOne(Devices::class);
    }

    // public function orders(): HasMany
    // {
    //     return $this->hasMany(Order::class);
    // }
}
