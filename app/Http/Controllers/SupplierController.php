<?php

namespace App\Http\Controllers;
use App\Hutang;
use App\Supplier;
use App\Stock;
use App\Client_Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
    	return Supplier::all();
    }
    public function show(Supplier $supplier)
    {
    	return $supplier;
    }
    public function store(Request $request)
    {
    	$request->validate([
    		'supplierName' => 'required',
            'order'=>'required',
            'shippingDate'=> 'required',
            'staffName'=> 'required',
    	]);
  //   	$stock = Stock::find($request->wheelId);
		// $stock->update([
		// 	"quantity" => $stock->quantity + $request->quantityBought
		// ]);
    	

    	$supplier = Supplier::create($request->all());
     //    $supplierId = Client_Supplier::where('name',$request->supplierName)->first()->id;
    	// if(Hutang::find($supplierId)){
    	// 	$hutang = Hutang::find($supplierId);
    	// 	$hutangDebt = $hutang->debt;
    	// 	$hutang->update([
    	// 		$hutang->debt = $hutangDebt + $request->price
    	// 	]);
    	// }
    	// else{
    	// 	Hutang::create([
    	// 		'id' => $supplierId,
    	// 		'debt' => $request->price
    	// 	]);
    	// }
    	return $supplier;
    }
    public function update(Request $request, Supplier $supplier)
    {
  //   	if($request->quantityBought){
  //   		$stock = Stock::find($supplier->wheelId);
  //   		$stock->update([
  //   			"quantity" => ($stock->quantity-$supplier->quantityBought)+$request->quantityBought
  //   		]);

  //   	}
  //       $supplierId = Client_Supplier::where('name',$supplier->supplierName)->first()->id;
  //   	if($request->paid == true){
  //   		$hutang = Hutang::find($supplierId);
  //   		$hutang->update([
		// 	'debt' => $hutang->debt - $supplier->price
		// ]);

  //       if ($hutang->debt == 0) {
  //           $hutang->delete();
  //       }

   //  	$supplier->update($request->all());

   //  	}
   //  	else{
	  //   	$previousDebt = $supplier->price;
			// $hutang = Hutang::find($supplierId);
	  //   	$supplier->update($request->all());
	  //   	$hutang->update([
			// 	'debt' => ($hutang->debt - $previousDebt) + $request->price
			// ]);
   //  	}
        $supplier->update($request->all());
    	return $supplier;
    }
    public function destroy(Supplier $supplier)
    {
  //       $supplierId = Client_Supplier::where('name',$supplier->supplierName)->first()->id;
  //   	$stock = Stock::find($supplier->wheelId);
  //   	$stock->update([
  //   		"quantity" => $stock->quantity - $supplier->quantityBought
  //   	]);
  //   	$previousDebt = $supplier->price;
		// $hutang = Hutang::find($supplierId);
		// $hutang->update([
		// 	'debt' => ($hutang->debt - $previousDebt)
		// ]);
  //       if ($hutang->debt == 0) {
  //           $hutang->delete();
  //       }
    	$supplier->delete();
    	return response()->json(["Data has been deleted."]);
    }
}
