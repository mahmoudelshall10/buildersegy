<?php

namespace App\Http\Controllers\Admin;

use App\Model\Training;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\trainingRequest;
use Session;

class TrainingController extends Controller
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
        $strTitle = 'Show Trainings';
        $All_Trainings = Training::all();
        return view('admin.training.index', compact('strTitle' , 'All_Trainings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $strTitle = 'Create Training';
        return view('admin.training.create' ,compact('strTitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(trainingRequest $request)
    {
        try{
            $Training = new Training();
            $Training->fldName = $request->input('fldName');
            $Training->fldDuration = $request->input('fldDuration');
            $Training->fkCreatedByUserID = Auth::user()->id;
            $Training->save();
            session()->flash('message' ,'Added successfully!!.');
        } catch (\Exception $e) {
            session()->flash('error' ,'Please Check Your Data Again');
        }
        return redirect('admin/trainings');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objTraining = Training::find($id); 
        $strTitle = 'Edit Training';
        return view('admin.training.edit' ,compact('objTraining','strTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function update(trainingRequest $request, $id)
    {
        try {
            $objTraining = Training::find($id);
            $objTraining->fldName = $request->input('fldName');
            $objTraining->fldDuration = $request->input('fldDuration');
            $objTraining->update();
            session()->flash('message' ,'Updated successfully.');
        } catch (\Exception $e) {
            session()->flash('error' ,'Please check your data again');
        }
        return redirect('/admin/trainings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try { 
            $objTraining = Training::find($id);
            $objTraining->delete();
            Session::flash('message' , 'Successfully Deleted!!');
        } catch (\Exception $e){
            Session()->flash('error' ,'Error in Deleted');
        }
        return redirect('admin/trainings'); 
    }
}
