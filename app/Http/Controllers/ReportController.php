<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Report;
use App\Models\Supply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
//    public function index()
//    {
//        return Report::all();
//    }

    public function addReportToSupply(Supply $supply, Report $report, Product $product)
    {
//        dd($supply);
//        $supply->completed = 1;
        $supply->update(['completed' => true]);

        // $productsQuantityInSupply = DB::table('products')
        //     ->where('supply_id', $supply->id)
        //     ->selectRaw('sum(products.quantity) as sum')
        //     ->first();

        $priceForDeliveryByOneProductInSupply = round($supply->getPrice() / $product->getProductQuantityInSupply($supply->id), 2);

        $products = Product::where('supply_id', $supply->id)->get();

        foreach ($products as $product)
        {
            $productPrice = $product->price * $product->yuan / $product->quantity;
            $attribute = [
                'name' => $product->name,
                'price' => $productPrice + $priceForDeliveryByOneProductInSupply,
                'supply_id' => $supply->id,
                'product_id' => $product->id,
                'product_price' => $productPrice,
                'delivery_price' => $priceForDeliveryByOneProductInSupply
            ];
            $report->create($attribute);
        }

        return back();

    }

    public function index()
    {
        $reports = Report::all();

        return view('reports.index', compact('reports'));
    }

//    public function show(Report $report)
//    {
//        return $report;
//    }
//
//    public function update(Request $request, Report $report)
//    {
//        $request->validate([
//            'price' => ['required', 'numeric'],
//            'supply_id' => ['required', 'integer'],
//            'product_id' => ['required'],
//        ]);
//
//        $report->update($request->validated());
//
//        return $report;
//    }
//
//    public function destroy(Report $report)
//    {
//        $report->delete();
//
//        return response()->json();
//    }
}
