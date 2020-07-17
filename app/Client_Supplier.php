<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client_Supplier extends Model
{
    public $table = "clients_suppliers";
    protected $fillable=[
    	'name',
    	'address',
    ];
}
