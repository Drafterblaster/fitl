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

        return view('fillorders.index', $data);
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
        return view('fillorders.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
    // * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fillorder = new Fillorder;

    // set the fillorder's data from the form data
        $fillorder->title = $request->title;
        $fillorder->type = $request->type;
        $fillorder->deliver = $request->deliver;
        $fillorder->description = $request->description;
        $fillorder->custom_01 = $request->custom_01;
        $fillorder->custom_02 = $request->custom_02;
        $fillorder->custom_03 = $request->custom_03;

    // create the order in the database
        if (!$fillorder->save()) {
            $errors = $fillorder->getErrors();
        //echo '<pre>';
        //print_r($errors);
        //echo '</pre>';
        //exit;

    // redirect back to the create page and pass along the errors
        return redirect()
            ->action('FillorderController@create')
            ->with('errors', $errors)
            ->withInput();
    }

    // Success!!
        return redirect()
            ->action('FillorderController@index')
            ->with('message',
                '<div class="alert alert-success">Order Placed Successfully!</div>');
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
        $fillorder = Fillorder::findOrFail($id);
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

        return view('fillorders.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fillorder = Fillorder::findOrFail($id);
        return view('fillorders.edit', ['fillorder' => $fillorder]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $fillorder = Fillorder::findOrFail($id);
    // set the fillorder's data from the form data
        $fillorder->title = $request->title;
        $fillorder->type = $request->type;
        $fillorder->deliver = $request->deliver;
        $fillorder->description = $request->description;
        $fillorder->custom_01 = $request->custom_01;
        $fillorder->custom_02 = $request->custom_02;
        $fillorder->custom_03 = $request->custom_03;

    // if the save fails, redirect back to the edir page and show the errors
        if (!$fillorder->save()) {
        return redirect()
            ->action('FillorderController@edit', $fillorder->id)
            ->with('errors', $fillorder->getErrors())
            ->withInput();
        }

    // Success! redirect to index and pass a success message
        return redirect()
            ->action('FillorderController@index')
            ->with('message',
                '<div class="alert alert-success">Order Updated!</div>');
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
