<?php

namespace App\Http\Controllers\Admin;

use App\Model\Bspyl;
use App\Http\Requests\bspylRequest;
use Illuminate\Http\Request;

class BspylController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $strTitle = 'Bspyl';
        $All_Bspyl_Data = Bspyl::all();
        return view('admin.bspyl.index', compact('strTitle' , 'All_Bspyl_Data'));
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
     * @param  \App\Bspyl  $bspyl
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $strTitle = "Show Bspyl Data";
        $objData = Bspyl::find($id);
        return view('admin.bspyl.show' , compact('objData','strTitle') );
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
}
