<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Auth;

class ProfileController extends Controller
{
	public function __construct()
    	{
        	$this->middleware('auth');
    }

	public function profile()
	{
		$user = Auth::user();
		$fillorders = $user->fillorders;
		$parts = $user->parts;

		return view('profile.profile',
			['fillorders' => $fillorders, 'parts' => $parts]);
	}	
}