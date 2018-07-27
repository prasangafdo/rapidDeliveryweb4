<?php

namespace RapidDelivery;

use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    //
	  protected $fillable = [
    	'item',
    	'pickup_address',
    	'pickup_state',
    	'delivery_address',
    	'delivery_state',
    	'status'
    ];

    public function parcelUser(){
        return $this->hasOne('RapidDelivery\ParcelUser');//Has a in ER diagram
    }
}