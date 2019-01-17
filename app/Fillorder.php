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
}