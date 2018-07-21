<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SenderParcel extends Model
{
    protected $fillable = [
    	'sender_id',
    	'parcel_id',
    ];
}
