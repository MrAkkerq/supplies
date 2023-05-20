<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Report extends Model
{
//    public function supply(): BelongsTo
//    {
//        return $this->belongsTo(Supply::class);
//    }
    public $fillable = ['name', 'price', 'supply_id', 'product_id'];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function supply(): BelongsTo
    {
//        return $this->hasOneThrough(Supply::class, Product::class, 'id', 'id');
        return $this->belongsTo(Supply::class);

    }
}
