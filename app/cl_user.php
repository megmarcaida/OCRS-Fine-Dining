<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class cl_user extends Model implements Authenticatable
{
	protected $table = 'cl_user'; 
    use \Illuminate\Auth\Authenticatable;
 
      
}
