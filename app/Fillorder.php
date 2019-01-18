<?php

namespace App;

use \Esensi\Model\Model;

class Fillorder extends Model
{
	protected $rules = [
		'title' => ['required'],
		'type' => ['required'],
		'deliver' => ['required'],
	];

	// access parts using, e.g., $fillorder->parts
	public function parts() {

	return $this->hasMany('App\part')->orderBy('created_at', 'desc');


	// or if you don't need it to be in ascending order use just this:
	//	return $this->hasMany('App\part');

	}
}