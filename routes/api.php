<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::prefix('backend1/v1')->group(function(){
	Route::apiResource('accounts','Api\v1\AccountController');
	Route::apiResource('wheels','Api\v1\WheelController');
	Route::apiResource('clients_suppliers','Api\v1\Client_SupplierController');
});
