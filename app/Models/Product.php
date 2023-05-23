<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    protected $fillable = ['name', 'yuan', 'price', 'quantity'];

    public function supply(): BelongsTo
    {
        return $this->belongsTo(Supply::class);
    }

    public function getProductQuantityInSupply(int $id)
    {
    	$productQuantityInSupply = DB::table('products')
            ->where('supply_id', $id)
            ->selectRaw('sum(products.quantity) as sum')
            ->first();

        return $productQuantityInSupply->sum;
    }
}
