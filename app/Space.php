<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
	public function user() {
  	return $this->belongsTo('App\User', 'user_id');
	}
}
