<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable=[
    	'supplierName',
    	'wheelId',
    	'quantityBought',
        'order',
    	'price',
    	'shippingDate',
    	'paymentDate',
    	'purchaseDate',
    	'paid',
    	'staffName',
    	'supplierAddress',
    	'description',
    ];
}
