<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wheel extends Model
{
    protected $fillable=[
    	'brandType',
    	'ringSizeType',
    	'patternType',
    	'wheelSizeType',
    	'stock',
    	'uniqueCode',
    ];
}
