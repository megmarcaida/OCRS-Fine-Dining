<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cltran_billng extends Model
{
    public function cltran_order(){
    	return $this->belongsTo('App\cltran_order');
    }
}