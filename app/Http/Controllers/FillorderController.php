<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Fillorder;

class FillorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    // to confirm that this $id has the same ID as entered in the url
        // echo $id;
        // exit;
    //  fitl.local/fillorders/1  (the number 1 should be only thing now showing on the browser page)
        $data = array();

        // $data['KEY'] = $VALUE;
        // $data['id'] = $id;

        $fillorder = Fillorder::findOrFail($id);

    // to confirm that this ::find function works, use this to print out result   
        //echo '<pre>';
        //print_r($fillorder);
        //echo '</pre>';
        //exit; //(or not exit to also load everything else on the page)

    // or this to retreive just the title    
        //echo $fillorder->title;
        //exit;

        $data['object'] = $fillorder;

        return view('fillorders/show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
