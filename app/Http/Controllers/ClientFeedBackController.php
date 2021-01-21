<?php

namespace App\Http\Controllers;

use App\Model\ClientFeedBack as FeedBack;
use Illuminate\Http\Request;
use App\Http\Requests\clientFeedBackRequest;
use Session;
use Redirect;
use Auth;
use TheSeer\Tokenizer\Exception;

class ClientFeedBackController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $strTitle = 'Your FeedBack';
        return view('contact' ,compact('strTitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(clientFeedBackRequest $request)
    {
    if($request->ajax()){
 
            if(isset($request->fldPhoto)){
                $input = $request->all();
                $profileImage = $request->file('fldPhoto');
                $profileImageSaveAsName =
                 time() . $request->pkClientFeedBackID . "-client." . 
                 $profileImage->getClientOriginalExtension();

                $upload_path = 'storage/app/Client_Photos/';
                $profile_image_url = $upload_path . $profileImageSaveAsName;
                // $success = $profileImage->move($upload_path, $profileImageSaveAsName);
                $input['fldPhoto'] = $profile_image_url;
            
                $data = FeedBack::create($input);
                //$data->fldPhoto = $profile_image_url;
                return response(['status'=>true]);
            }else{
                $input = $request->all();
                $data = FeedBack::create($input);

                return response(['status'=>true]);
            }
    }
        return redirect('/contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClientFeedBack  $clientFeedBack
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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

    }



}