<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class premium extends Model
{
	
	public $table = "premium";

	public function user() {
    	return $this->belongsTo('App\User');
    }
    
}
