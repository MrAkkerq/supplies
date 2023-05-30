<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supply;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Supply $supply)
    {
        $products = $supply->products;

        return view('products.index', compact('products', 'supply'));
    }

    public function store(Request $request, Supply $supply)
    {
        $attributes = $request->validate([
            'yuan' => ['required', 'numeric'],
            'price' => ['required', 'integer'],
            'quantity' => ['required', 'integer'],
        ]);



        $supply->addProduct($attributes);

        return back();
    }

    public function edit(Supply $supply, Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Supply $supply, Product $product, )
    {
        $attributes = $request->validate([
            'name' => ['required'],
            'yuan' => ['required', 'numeric'],
            'price' => ['required', 'integer'],
            'quantity' => ['required', 'integer'],
        ]);

        $product->update($attributes);

        return redirect("/supplies/{$supply->id}");
    }

    public function destroy(Supply $supply, Product $product)
    {
        $product->delete();

        return redirect("/supplies/{$supply->id}");
    }
}
