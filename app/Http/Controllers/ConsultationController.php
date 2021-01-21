<?php

namespace App\Http\Controllers;

use App\Model\Consultation;
use App\Model\Number;
use App\Model\ClientFeedBack as FeedBack;
use App\Http\Requests\consultationRequest;
use App\Model\Team;
use App\Model\Partner;
use Illuminate\Http\Request;
use App\Model\Story;
class ConsultationController extends Controller
{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $All_Numbers = Number::all();
        $All_FeedBacks = FeedBack::where('fldStatus' , 1)->get();
        $All_Team_Members = Team::all();
        $All_Stories = Story::Paginate(3);
        $All_Partners = Partner::where('fldType' , 'Partner')->get();
        $All_Sponsors = Partner::where('fldType' , 'Sponsor')->get();
        return view('index' , compact('All_Numbers' , 'All_FeedBacks' , 'All_Team_Members' , 'All_Stories','All_Partners','All_Sponsors'));
    }
    // public function index()
    // {

    //     return view('index');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('index');
    }   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(consultationRequest $request)
    {
            if($request->ajax()){
                $input = $request->all();
                $data = Consultation::create($input);
                return response(['status'=>true]);
        }
           return redirect('/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Consultation  $Consultation
     * @return \Illuminate\Http\Response
     */
    public function show(Consultation $consultation)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultation $consultation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultation $consultation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultation $consultation)
    {
        //
    }
}
