<?php

namespace App\Http\Controllers;
use App\Client;
use App\Piutang;
use App\Stock;
use App\Client_Supplier;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
    	return Client::all();
    }
    public function show(Client $client)
    {
    	return $client;
    }
    public function store(Request $request)
    {
    	$request->validate([
    		'clientName' => 'required',
            'order'=>'required',
	    	'shippingDate'=> 'required',
	    	'staffName'=> 'required',
    	]);

    	// $stock = Stock::find($request->wheelId);
    	// if($request->quantityBought > $stock->quantity){
    	// 	return "Insufficient Stock";
    	// }
    	// else{
    	// 	$stock->update([
    	// 		"quantity" => $stock->quantity - $request->quantityBought
    	// 	]);
    	// }

    	$client = Client::create($request->all());
     //    $clientData = Client_Supplier::where('name',$request->clientName)->first();
     //    $clientId = $clientData->id;
    	// if(Piutang::find($clientId)){
    	// 	$piutang = Piutang::find($clientId);
    	// 	$piutangDebt = $piutang->debt;
    	// 	$piutang->update([
    	// 		$piutang->debt = $piutangDebt + $request->price
    	// 	]);
    	// }
    	// else{
    	// 	Piutang::create([
    	// 		'id' => $clientId,
    	// 		'debt' => $request->price
    	// 	]);
    	// }
    	return $client;
    }
    public function update(Request $request, Client $client)
    {
   //  	$stock = Stock::find($client->wheelId);
   //  	if($request->quantityBought){
   //  		if($request->quantityBought > $stock->quantity+$client->quantityBought){
   //  			return "Insufficient Stock";
   //  		}
   //  		else{
   //  			$stock->update([
   //  				"quantity" => ($stock->quantity+$client->quantityBought) - $request->quantityBought
   //  			]);
   //  		}
   //  	}
   //      $clientId = Client_Supplier::where('name',$client->clientName)->first()->id;
   //  	if($request->paid == true){
   //  		$piutang = Piutang::find($clientId);
   //  		$piutang->update([
			// 'debt' => ($piutang->debt - $client->price) 
	  //   ]);

   //      if ($piutang->debt == 0) {
   //          $piutang->delete();
   //      }

	    // $client->update($request->all());
        
   //  	}
   //  	else{
   //  		$previousDebt = $client->price;
			// $piutang = Piutang::find($clientId);
	  //   	$client->update($request->all());
	  //   	$piutang->update([
			// 	'debt' => ($piutang->debt - $previousDebt) + $request->price
			// ]);
   //          if ($piutang->debt == 0) {
   //              $piutang->delete();
   //          }
   //  	}
    	$client->update($request->all());
    	return $client;
    }
    public function destroy(Client $client)
    {
  //       $clientId = Client_Supplier::where('name',$client->clientName)->first()->id;
  //   	$stock = Stock::find($client->wheelId);
  //   	$stock->update([
  //   		"quantity" => $stock->quantity + $client->quantityBought
  //   	]);

  //   	$previousDebt = $client->price;
		// $piutang = Piutang::find($clientId);
		// $piutang->update([
		// 	'debt' => ($piutang->debt - $previousDebt)
		// ]);
  //       if ($piutang->debt == 0) {
  //           $piutang->delete();
  //       }
    	$client->delete();
    	return response()->json(["Data has been deleted."]);
    }
}
