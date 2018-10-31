<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests;
use App\University;

class universityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $var = University::all();
        return view('University.index')->with('var', $var);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('University.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //fix this
        {

            // $var = new University();
            
            // $var->University_name = $request->University_name;
            // $var->path = $request->file('path')->getRealPath();
            // $var->image = $request->file('image')->getRealPath();
            
            // $var->save();
            
            // echo  $var->University_name. " "  .  $var->path . " " .  $var->image . ".";
            
            // $var = University::all();
            // return view('University.index')->with('var', $var);
        }

        $var = new University();

        $var->University_name = $request->uniName;
        $var->path = $request->uniImage;
        $var->image= $request->unifile;

        $var->save();

        return redirect('university');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $var = University::find($id);
        return view('university.show')->with ('var',$var);
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
