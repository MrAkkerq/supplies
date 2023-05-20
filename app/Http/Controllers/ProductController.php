<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'yuan' => ['required', 'numeric'],
            'price' => ['required', 'integer'],
            'quantity' => ['required', 'integer'],
            'supply_id' => ['required', 'integer'],
        ]);

        return Product::create($request->validated());
    }

    public function show(Product $product)
    {
        return $product;
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => ['required'],
            'yuan' => ['required', 'numeric'],
            'price' => ['required', 'integer'],
            'quantity' => ['required', 'integer'],
            'supply_id' => ['required', 'integer'],
        ]);

        $product->update($request->validated());

        return $product;
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json();
    }
}
