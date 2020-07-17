<?php

namespace App\Http\Controllers;
use App\Wheel;
use Illuminate\Http\Request;
use App\Http\Resources\WheelResource;
use App\Http\Resources\WheelResourceCollection;

class WheelController extends Controller
{
    public function show(Wheel $wheel):WheelResource
    {
    	return new WheelResource($wheel);
    }

    public function index():WheelResourceCollection
    {
    	return new WheelResourceCollection(Wheel::all());
    }
    public function store(Request $request):WheelResource
    {
        $uniqueCode = "";
    	$request->validate([
    		'brandType'=>'required',
    		'ringSizeType'=>'required',
    		'patternType'=>'required',
    		'wheelSizeType'=>'required',
    	]);
        if($request->brandType == "Goodyear"){
            $uniqueCode = $uniqueCode."GY";
        }
        $uniqueCode = $uniqueCode."-".$request->wheelSizeType."-".$request->ringSizeType."-".$request->patternType;
        
    	$wheel = Wheel::create([
            'uniqueCode' => $uniqueCode,
            'brandType' => $request->brandType,
            'ringSizeType' => $request->ringSizeType,
            'patternType' => $request->patternType,
            'wheelSizeType' => $request->wheelSizeType,
        ]);
    	return new WheelResource($wheel);
    }
    public function update(Request $request, Wheel $wheel):WheelResource
    {
    	$wheel->update($request->all());
    	return new WheelResource($wheel);
    }
    public function destroy(Wheel $wheel)
    {
    	$wheel->delete();
    	return response()->json(["Data has been succesfully deleted."]);
    }
}
