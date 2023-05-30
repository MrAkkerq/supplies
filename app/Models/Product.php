<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    protected $fillable = ['name', 'code'];

    public function supply(): BelongsToMany
    {
        return $this->BelongsToMany(Supply::class);
    }

    public function getProductQuantityInSupply(Supply $supply)
    {
        $productQuantityInSupply = $supply->products()->selectRaw('sum(products.quantity) as result')->first();
//    	$productQuantityInSupply = DB::table('products')
//            ->where('supply_id', $id)
//            ->selectRaw('sum(products.quantity) as sum')
//            ->first();
//
        return $productQuantityInSupply->result;

    }
}
