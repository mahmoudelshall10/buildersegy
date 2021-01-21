<?php

namespace App\Http\Controllers\Admin;

use App\Model\Partner;
use App\Http\Requests\partnerRequest;
use Illuminate\Http\Request;
use Redirect;
use PHPUnit\Framework\MockObject\Stub\Exception;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class PartnerController extends Controller
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
        $strTitle = 'Show Partner';
        $All_Partners = Partner::all();
        return view('admin.partner.index', compact('strTitle','All_Partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // print_r($request->fldType . '_Photos');die;
        $strTitle = 'Create Partner';
        return view('admin.partner.create', compact('strTitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(partnerRequest $request)
    {
        try {
            if(isset($request->fldPhoto)){
                $fldPhoto = $request->fldPhoto;
                $path=$fldPhoto->store($request->fldType .'_Photos');
            }
            $Partner = new Partner();
            $Partner->fldName = $request->fldName;
            $Partner->fldType = $request->fldType;

            $Partner->fkCreatedByUserID = Auth::user()->id;

            $Partner->fldPhoto = $path;

            $Partner->save();
            if($request->fldType == 'Partner'){
                session()->flash('message','Partner Successfully Added.');
            }elseif ($request->fldType == 'Sponsor') {
                session()->flash('message','Sponsor Successfully Added.');
            }
        } catch (\Exception $e) {
            session('error','Please Check Your Data');
        }
        return redirect('admin/partners');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$partner
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $strTitle = 'Edit Partner';
        $objPartner = Partner::find($id);
        return view('admin.partner.edit', compact('strTitle' , 'objPartner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(partnerRequest $request, $id)
    {
        try{
            if(isset($request->fldPhoto)){
                    $fldPhoto = $request->fldPhoto;
                    $path=$fldPhoto->store($request->fldType .'_Photos');
                
                $objPartner = Partner::find($id);
                $objPartner->fldName = $request->fldName;
                $objPartner->fldType = $request->fldType;
                Storage::delete($objPartner->fldPhoto); // delete previous image from folder
                $objPartner->fldPhoto = $path;
                $objPartner->update();
            }else{
                $objPartner = Partner::find($id);
                $objPartner->fldName = $request->fldName;
                $objPartner->fldType = $request->fldType;
                $objPartner->update();
            }
            if($request->fldType == 'Partner'){
                session()->flash('message','Partner Successfully Updated.');
            }elseif ($request->fldType == 'Sponsor') {
                session()->flash('message','Sponsor Successfully Updated.');
            }
        }catch(Exception $e){
            session()->flash('error' , 'Please Check Your Data Again');
        }
        return redirect('admin/partners');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try { 
            $objPartner = Partner::find($id);
            Storage::delete($objPartner->fldPhoto);
            $objPartner->delete();
             Session::flash('message' , 'Successfully Deleted!!');
         } catch (\Exception $e){
             Session()->flash('message' ,'Please Check Your Data');
         }
         return redirect('/admin/partners');
    }
}
