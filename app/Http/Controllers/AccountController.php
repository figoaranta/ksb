<?php

namespace App\Http\Controllers;
use App\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
    	return Account::all();
    }
    public function show(Account $account)
    {
    	return $account;
    }
    public function store(Request $request)
    {
    	$request->validate([
    		'name' => 'required',
    		'password'=> 'required',
    		'accountType'=> 'required',
    	]);

    	$account = Account::create([
    		'name' => $request->name,
    		'password' => bcrypt($request->password),
    		'accountType' => $request->accountType,
    	]);
    	return $account;
    }
    public function update(Request $request , Account $account)
    {
    	$account->update($request->except(['password']));
    	$account->update([
    		'password'=>bcrypt($request->password)
    	]);
    	return $account;
    }
    public function destroy(Account $account)
    {
    	$account->delete();
    	return response()->json(["Data has been deleted."]);
    }
}
