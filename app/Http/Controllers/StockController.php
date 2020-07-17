<?php

namespace App\Http\Controllers;
use App\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
    	return Stock::all();
    }
    public function show(Stock $stock)
    {
    	return $stock;
    }
    public function store(Request $request)
    {
    	$request->validate([
    		'id'=>'required',
    		'quantity'=>'required'
    	]);

    	$stock = Stock::create($request->all());
    	return $stock;
    }
    public function update(Request $request , Stock $stock)
    {
    	$stock->update($request->all());
    	return $stock;
    }
    public function destroy(Stock $stock)
    {
    	$stock->delete();
    	return response()->json(["Data has been deleted."]);
    }
}
