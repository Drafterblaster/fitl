<?php

namespace App;

use \Esensi\Model\Model;

class Part extends Model
{
    protected $rules = [
	'fillorder_id' => ['required'],
	'part' => ['required'],
	];
}
