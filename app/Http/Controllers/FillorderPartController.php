<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FillorderPartController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @param  int $fillorderId
     * @return Response
     */

    // fillorders/<id>/parts
    public function store(Request $request, $fillorderId)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request
     * @param  int $fillorderId
     * @param  int $id
     * @return Response
     */
    
    public function update(Request $request, $fillorderId, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $fillorderid
     * @return \Illuminate\Http\Response
     */
    public function destroy($fillorderId, $id)
    {
        //
    }
}
