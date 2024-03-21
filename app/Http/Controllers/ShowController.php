<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Show;

class ShowController extends Controller
{
    //…

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shows = Show::all();
        
        return view('show.index',[
            'shows' => $shows,
            'resource' => 'spectacles',
        ]);
    }

//…

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Show::find($id);
        
        return view('show.show',[
            'show' => $show,
        ]);    
    }

    //…
}
