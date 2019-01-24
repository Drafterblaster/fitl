<?php

namespace App;

use \Esensi\Model\Model;

class Type extends Model
{
	protected $rules = [ 'name' => ['required'] ];
    public function fillorders() {

	// belongsToMany is a many-to-many relationship
		return $this->belongsToMany('App\Fillorder', 'fillorders_types');
	}
}
