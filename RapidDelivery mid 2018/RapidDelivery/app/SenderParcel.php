<?php

namespace RapidDelivery;

use Illuminate\Database\Eloquent\Model;

class SenderParcel extends Model
{
    protected $fillable = [
    	'sender_id',
    	'parcel_id',
    ];
}
