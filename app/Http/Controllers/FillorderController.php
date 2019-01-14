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
        $fillorders = Fillorder::all();

        //echo '<pre>';
        //print_r($fillorders);
        //echo '</pre>';

        $data = array();
        $data['objects'] = $fillorders;

        return view('fillorders/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fillorder = new Fillorder;
        $data = array();
        $data['fillorder'] = $fillorder;
        return view('fillorders/create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
    // * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo '<pre>';
        echo $request->title;
        echo '</pre>';
        exit;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array();
        //$data['id'] = $id;
        $fillorder = Fillorder::findOrfail($id);
        $data['object'] = $fillorder;

        // to test if the above command is working
        //echo '<pre>';
        //print_r($fillorder);
        //echo '</pre>';
        //exit;
        // -or- just to get the title, run:
        //echo $fillorder->title;
        //exit;

        //$data['object'] = $fillorder;

        // if it is working properly, this will print the number in the url onto the page
        //echo $id;
        //exit;

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
