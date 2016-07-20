<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class entry extends Model
{
    //

    public $table = "entry";

    public function user() {
    	return $this->belongsTo('App\User');
    }
}
