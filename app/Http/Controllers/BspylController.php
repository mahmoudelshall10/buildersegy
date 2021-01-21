<?php

namespace App\Http\Controllers;

use App\Model\Bspyl;
use App\Http\Requests\bspylRequest;
use Illuminate\Http\Request;
use Session;

class BspylController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bspyl-form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bspyl-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(bspylRequest $request)
    {
        if($request->ajax()){
            $input = $request->all();
            $data = Bspyl::create($input);
            return response(['status'=>true]);
        }
         return redirect('/bspyl-form');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bspyl  $bspyl
     * @return \Illuminate\Http\Response
     */
    public function show(Bspyl $bspyl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bspyl  $bspyl
     * @return \Illuminate\Http\Response
     */
    public function edit(Bspyl $bspyl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bspyl  $bspyl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bspyl $bspyl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bspyl  $bspyl
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bspyl $bspyl)
    {
        //
    }

    public function insert_data_bspyl(bspylRequest $request){

    }
}
