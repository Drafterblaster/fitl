<?php

namespace App;

use \Esensi\Model\Model;

use Auth;

class Part extends Model
{
    protected $rules = [
	'fillorder_id' => ['required'],
	'part' => ['required'],
	];

	public function user() {
		return $this->belongsTo('App\User');
	}
		public function fillorder() {
		return $this->belongsTo('App\Fillorder');
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
