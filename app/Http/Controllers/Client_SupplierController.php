<?php

namespace App\Http\Controllers;
use App\Client_Supplier;
use Illuminate\Http\Request;

class Client_SupplierController extends Controller
{
    public function index()
    {
    	return Client_Supplier::all();
    }
    public function show($client_supplier)
    {
    	return Client_Supplier::find($client_supplier);
    }
    public function store(Request $request)
    {
    	$request->validate([
    		'name'=>'required',
    	]);
    	$client_supplier = Client_Supplier::create($request->all());
    	return $client_supplier;
    }
    public function update(Request $request,  $client_supplier)
    {
    	$clientsupplier = Client_Supplier::find($client_supplier);
    	$clientsupplier->update($request->all());
    	return $clientsupplier;
    }
    public function destroy($client_supplier)
    {
    	Client_Supplier::find($client_supplier)->delete();
    	return response()->json(["Data has been deleted."]);
    }
}
