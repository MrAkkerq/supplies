<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = ['name', 'yuan', 'price', 'quantity'];

    public function supply(): BelongsTo
    {
        return $this->belongsTo(Supply::class);
    }
}
