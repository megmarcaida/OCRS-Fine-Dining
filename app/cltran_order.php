<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cltran_order extends Model
{
     public function cltran_order(){
    	return $this->hasMany('App\cltran_billing');
    }
}
