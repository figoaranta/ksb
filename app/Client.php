<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable=[
    	'clientName',
    	'wheelId',
    	'quantityBought',
        'order',
    	'price',
    	'shippingDate',
    	'paymentDate',
    	'purchaseDate',
    	'paid',
    	'staffName',
    	'clientAddress',
    	'description',
    ];
}
