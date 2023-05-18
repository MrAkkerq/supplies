<?php

namespace App\Http\Controllers;

use App\Models\Supply;
use Illuminate\Http\Request;

class SuppliesController extends Controller
{
    public function index()
    {
        $supplies = Supply::all();

        return view('supplies.index', compact('supplies'));
    }

    public function create()
    {
        return view('supplies.create');
    }

    public function store(Request $request)
    {
        $attribute = $request->validate([
            'dollar' => ['required', 'numeric'],
            'cargo' => ['required', 'integer'],
            'market' => ['required', 'integer'],
            'delivery' => ['required', 'integer'],
            'date' => ['required', 'date'],
        ]);

        Supply::create($attribute);

        return redirect('/supplies');
    }

    public function show(Supply $supply)
    {
        return view('supplies.show', compact('supply'));
    }

    public function update(Request $request, Supply $supply)
    {
        $request->validate([
            'dollar' => ['required', 'numeric'],
            'cargo' => ['required', 'integer'],
            'market' => ['required', 'integer'],
            'delivery' => ['required', 'integer'],
            'date' => ['required', 'date'],
        ]);

        $supply->update($request->validated());

        return $supply;
    }

    public function destroy(Supply $supply)
    {
        $supply->delete();

        return response()->json();
    }
}
