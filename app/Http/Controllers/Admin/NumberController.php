<?php

namespace App\Http\Controllers\Admin;

use App\Model\Number as Number;
use Illuminate\Http\Request;
use App\Http\Requests\numberRequest;
use Auth;
use Redirect;
use Session;
class NumberController extends Controller
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
        $All_Numbers = Number::all();
        $strTitle = "Show Number";
        return view('admin.number.index' ,compact('All_Numbers','strTitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $strTitle = "Create Number";
        return view('admin.number.create' , compact('strTitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(numberRequest $request)
    {
        try{
            $number = new Number();
            $number->fldName = $request->input('fldName');
            $number->fldNumber = $request->input('fldNumber');
            $number->fkCreatedByUserID = Auth::user()->id;
            $number->save();
            session()->flash('message' ,'Added successfully!!.');
        } catch (\Exception $e) {
            session()->flash('error' ,'Please Check Your Data Again');
        }
        return redirect('admin/numbers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Number  $number
     * @return \Illuminate\Http\Response
     */
    public function show(Number $number)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Number  $number
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $strTitle = 'Edit Number';
        $objNumber = Number::find($id);
        // print_r($objNumber);die;
        return view('admin.number.edit',compact('objNumber', 'strTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Number  $number
     * @return \Illuminate\Http\Response
     */
    public function update(numberRequest $request, $id)
    {
        try {
            $objNumber = Number::find($id);
            // print_r($objNumber);die;
            $objNumber->fldName = $request->input('fldName');
            $objNumber->fldNumber = $request->input('fldNumber');
            $objNumber->save();
            session()->flash('message' ,'Updated successfully.');
        } catch (\Exception $e) {
            session()->flash('error' ,'Please check your data again');
        }
        return redirect('/admin/numbers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Number  $number
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try { 
            $objNumber = Number::find($id);
            $objNumber->delete();
            Session::flash('message' , 'Successfully Deleted!!');
        } catch (\Exception $e){
            Session()->flash('error' ,'Error in Deleted');
        }
        return redirect('admin/numbers'); 
    }
}
