<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Part;

use Auth;

class FillorderPartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
    }

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
        $part = new Part;

        $part->fillorder_id = $fillorderId;
        $part->part = $request->part;
        $part->user_id = Auth::user()->id;

        if ( ! $part->save() )
        {

        return redirect()
            ->action('FillorderController@show', $fillorderId)
            ->with('errors', $part->getErrors())
            ->withInput();
        }

        // success!
        return redirect()
        ->action('FillorderController@show', $fillorderId)
        ->with('message',
                '<div class="alert alert-success">Part added!</div>');
    }    

    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request
     * @param  int $fillorderId
     * @param  int $id
     * @return Response
     */

    public function update(Request $request, $id, $fillorderId)
    {
        $part = Part::findOrFail($id);

        if ( ! $part->canEdit() )
        {
            abort('403', 'Not authorized.');
        }

        $part->part = $request->part;

        if (! $part->save() )
        {
            return redirect()
            ->action('FillorderController@show', $fillorderId)
            ->with('errors', $part->getErrors())
            ->withInput();
        }

        // success!
        return redirect()
        ->action('FillorderController@show', $fillorderId)
        ->with('message',
                '<div class="alert alert-success">Part updated!</div>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $fillorderid
     * @param  int $id
     * @return Response
     */
    public function destroy($fillorderId, $id)
    {
        $part = Part::findOrFail($id);

        if ( ! $part->canEdit() ) {
            abort('403', 'Not authorized.');
        }

        $part->delete();

        return redirect()
        ->action('FillorderController@show', $fillorderId)
        ->with('message',
                '<div class="alert alert-info">Part Removed!</div>');
    }
}
