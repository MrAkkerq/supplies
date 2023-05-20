<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Supply;
use Illuminate\Http\Request;

class ReportController extends Controller
{
//    public function index()
//    {
//        return Report::all();
//    }

    public function store(Supply $supply)
    {
        dd($supply);
        $request->validate([
            'price' => ['required', 'numeric'],
            'supply_id' => ['required', 'integer'],
            'product_id' => ['required'],
        ]);

        return Report::create($request->validated());
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
