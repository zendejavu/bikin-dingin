<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'devices_id', 'problems_id', 'address', 'work_date', 'notes'];

    public function devices(): BelongsTo
    {
        return $this->belongsTo(Devices::class, 'id');
    }

    public function problems(): BelongsTo
    {
        return $this->belongsTo(Problems::class, 'id');
    }
}
