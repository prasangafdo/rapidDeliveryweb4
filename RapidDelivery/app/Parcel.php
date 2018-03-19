<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    //


    public function parcelUser(){
        return $this->hasOne('App\ParcelUser');//Has a in ER diagram
    }
}