<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function product_images()
    {
    	return $this->hasMany('App\ProductImage');
    }

    public function product_locations()
    {
    	return $this->hasMany('App\ProductLocation');
    }
}
