<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Collection;

class Supply extends Model
{
    public $fillable = ['dollar', 'cargo', 'market', 'delivery', 'date', 'completed'];

    public function products(): BelongsToMany
    {
        return $this->BelongsToMany(Product::class)
            ->withPivot('yuan', 'price', 'quantity');
    }

    public function addProduct($attributes)
    {
        return $this->products()->create($attributes);
    }

    public function getPrice(): float
    {
    	return $this->dollar * $this->cargo + $this->market + $this->delivery;
    }

    public function isCompleted(): bool
    {
        return (bool) $this->completed;
    }

    public function isNotCompleted(): bool
    {
        return ! $this->isCompleted();
    }

//    public function newCollection(array $models = []): Collection
//    {
//        return new class($models) extends Collection {
//            public function allCompleted()
//            {
//                return $this->filter->isCompleted();
//            }
//
//            public function allNotCompleted()
//            {
//                return $this->filter->isNotCompleted();
//            }
//        };
//    }
}
