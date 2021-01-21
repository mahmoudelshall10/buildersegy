<?php

namespace App\Http\Controllers\Admin;

use App\Model\ClientFeedBack;
use Illuminate\Http\Request;
use Session;
use Redirect;
use Auth;
class ClientFeedBackController extends Controller
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
     $strTitle = 'Show FeedBack';
     $All_FeedBacks = ClientFeedBack::all();
     return view('admin.clientfeedback.index' , compact('strTitle' , 'All_FeedBacks'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClientFeedBack  $clientFeedBack
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $strTitle = "Show FeedBack";
        $objFeedBack = ClientFeedBack::find($id);
        return view('admin.ClientFeedBack.show' , compact('objFeedBack','strTitle') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClientFeedBack  $ClientFeedBack
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientFeedBack $clientfeedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClientFeedBack  $clientFeedBack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientFeedBack $clientfeedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClientFeedBack  $clientFeedBack
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try { 
            ClientFeedBack::where('pkClientFeedBackID', $id)->delete();
             Session::flash('message' , 'Successfully Deleted!!');
         } catch (\Exception $e){
             Session()->flash('error' ,'Please Check Data');
         }
         return redirect('admin/clientfeedbacks');
    }

    public function unactive_feedback($id){
        try { 
            ClientFeedBack::where('pkClientFeedBackID', $id)
	           ->update(['fldStatus' => 0]);
             Session::flash('message' , 'Successfully Blocked!!');
         } catch (\Exception $e){
             Session()->flash('error' ,'Please Check Data');
         }
    
         return redirect('admin/clientfeedbacks');
    }


    public function active_feedback($id){
        try {
            ClientFeedBack::where('pkClientFeedBackID', $id)
               ->update(['fldStatus' => 1]);
               Session::flash('message' , 'Successfully Active!!');
        } catch (\Exception $e) {
            Session()->flash('error' ,'Please Check Data');
        }
        return redirect('admin/clientfeedbacks');
    }










}
