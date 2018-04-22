<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function solution()
    {
    	return $this->belongsTo('App\Solution');
    }

    public function product_locations()
    {
    	return $this->hasMany('App\ProductLocation');
    }
}
