<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function fillorders() {

	// belongsToMany is a many-to-many relationship
		return $this->belongsToMany('App\Fillorder', 'fillorders_types');
	}
}
