<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logbook extends Model {

  protected $table = 'logbooks';

	/**
	 * User relationship
	 */
	public function users(){
	  return $this->belongsToMany('App\User');
	}

	public function qsos()
	{
		return $this->hasMany('App\Qsos', 'logbook_id');
	}

}
