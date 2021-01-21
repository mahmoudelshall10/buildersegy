<?php

namespace App\Http\Controllers\Admin;

use App\Model\Consultancy;
use Illuminate\Http\Request;
use App\Http\Requests\consultancyRequest;
use Auth;
use Session;
class ConsultancyController extends Controller
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
        $strTitle = 'Show Consultancies';
        $All_Consultancies = Consultancy::all();
        return view('admin.consultancy.index', compact('strTitle','All_Consultancies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $strTitle = 'Create Consultancy'; 
       return view('admin.consultancy.create',compact('strTitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(consultancyRequest $request)
    {
        try{
        $Consultancy = new Consultancy();
        $Consultancy->fldName = $request->fldName;
        $Consultancy->fldSubject = $request->fldSubject;
        $Consultancy->fkCreatedByUserID = Auth::user()->id;
        $Consultancy->save();
        session()->flash('message','Consultancy Successfully Added.');
    } catch (\Exception $e) {
        session('error','Please Check Your Data');
    }
    return redirect('admin/consultancies');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Consultancy  $consultancy
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $strTitle = 'Show Consultancy';
        $objConsultancy = Consultancy::find($id);
        return view('admin.consultancy.show',compact('objConsultancy','strTitle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Consultancy  $consultancy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $strTitle = 'Edit Consultancy';
        $objConsultancy = Consultancy::find($id);
        return view('admin.Consultancy.edit', compact('strTitle' , 'objConsultancy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Consultancy  $consultancy
     * @return \Illuminate\Http\Response
     */
    public function update(consultancyRequest $request,$id)
    {
        try {
                $objConsultancy= Consultancy::find($id);
                $objConsultancy->fldName = $request->get('fldName');
                $objConsultancy->fldSubject = $request->get('fldSubject');;
                $objConsultancy->update();

            session()->flash('message' ,'Consultancy Successfully Updated.');
        } catch (\Exception $e) {
            session()->flash('error' ,'Please Check Your Data');
        }
        return redirect('/admin/consultancies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Consultancy  $consultancy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try { 
            $objConsultancy = Consultancy::find($id);
            $objConsultancy->delete();
            Session::flash('message' , 'Successfully Deleted!!');
        } catch (\Exception $e){
            Session()->flash('error' ,'Error in Deleted');
        }
        return redirect('admin/consultancies');
    }
}
