<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'device_id', 'problem_id', 'address', 'work_date', 'note', 'price'];

    public function devices(): HasOne
    {
        return $this->hasOne(Devices::class, 'id', 'device_id',);
    }

    public function problems(): HasOne
    {
        return $this->hasOne(Problems::class, 'id', 'problem_id');
    }

    public function users(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
