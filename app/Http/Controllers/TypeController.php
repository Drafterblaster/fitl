<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Type;

class TypeController extends Controller
{
    public function show($id)
    {
        $type = Type::findOrFail($id);

        return view('types.show', [ 'type' => $type, 'types' => Type::all() ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
