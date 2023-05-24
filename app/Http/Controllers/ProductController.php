<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supply;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request, Supply $supply)
    {
        $attributes = $request->validate([
            'name' => ['required'],
            'yuan' => ['required', 'numeric'],
            'price' => ['required', 'integer'],
            'quantity' => ['required', 'integer'],
        ]);

        $attributes['supply_id'] = $supply->id;

        $supply->addProduct($attributes);

        return back();
    }

    public function destroy(Supply $supply, Product $product)
    {
        $product->delete();

        return back();
    }
}
