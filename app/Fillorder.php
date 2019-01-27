<?php

namespace App;

use \Esensi\Model\Model;

use Auth;

class Fillorder extends Model
{
	protected $rules = [
		'title' => ['required'],
		'type' => ['required'],
		'deliver' => ['required'],
	];

	// access parts using, e.g., $fillorder->parts
	public function parts() {

	// hasMany is a one-to-many relationship
	return $this->hasMany('App\Part')->orderBy('created_at', 'desc');

	// or if you don't need it to be in ascending order use just this:
	//	return $this->hasMany('App\part');

	}

	public function user() {
		return $this->belongsTo('App\User');
	}

	public function types() {

	// belongsToMany is a many-to-many relationship
		return $this->belongsToMany('App\Type', 'fillorders_types');
	}

	public function canEdit()
	{
		if ( ! Auth::check() ) {
			return false;
		}

		// if this is the active user's object,
		// they CAN edit it!
		if ( Auth::user()->id === $this->user_id ) {
			return true;
		}

		// by default, can't edit
		return false;
	}
}