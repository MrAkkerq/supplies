<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supply extends Model
{
    public $fillable = ['dollar', 'cargo', 'market', 'delivery', 'date', 'completed'];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function addProduct($attributes)
    {
        return $this->products()->create($attributes);
    }

    public function getPrice(): float
    {
    	return $this->dollar * $this->cargo + $this->market + $this->delivery;
    }
}
