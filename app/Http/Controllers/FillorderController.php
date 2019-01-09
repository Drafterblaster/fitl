<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class FillorderController extends Controller
{
    public function fillorder()
    {
        return view('pages/order');
    }
}
