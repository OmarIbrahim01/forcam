<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    public function locations()
    {
    	return $this->hasMany('App\Location');
    }
}
