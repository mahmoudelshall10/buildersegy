<?php

namespace App\Http\Controllers;

use App\Model\Number as Number;
use Illuminate\Http\Request;
use App\Model\ClientFeedBack as FeedBack;
use App\Model\Team;
use App\Model\Partner;
use App\Model\Training;
use App\Model\Story;
use App\Model\Consultancy;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $All_Numbers = Number::all();
    //     $All_FeedBacks = FeedBack::where('fldStatus' , 1)->get();
    //     $All_Team_Members = Team::all();
    //     $All_Partners = Partner::where('fldType' , 'Partner')->get();
    //     $All_Sponsors = Partner::where('fldType' , 'Sponsor')->get();
    //     return view('index' , compact('All_Numbers' , 'All_FeedBacks' , 'All_Team_Members','All_Partners','All_Sponsors'));
    // }

    public function about()
    {
        $All_Numbers = Number::all();
        return view('about', compact('All_Numbers'));
    }

    public function BSPYL_Home()
    {
        return view('bspyl-home');
    }
    public function BSPYL_About()
    {
        return view('bspyl-about');
    }
    public function BSPYL_Stages()
    {
        return view('bspyl-stages');
    }
    public function welcome()
    {
        return view('welcome');
    }

    public function contact()
    {
        $strTitle = 'Your FeedBack';
        return view('contact' , compact('strTitle'));
    }


    public function buildersStory()
    {
        $All_Stories = Story::Paginate(6);
        return view('builders-story' , compact('All_Stories'));
    }
    
    public function buildersStorySingle($id)
    {
        $objStory = Story::find($id);
        $Three_Stories = Story::paginate(3);
        return view('builders-story-single' , compact('Three_Stories','objStory'));
    }

    public function consultancy()
    {
        $All_Consultancies = Consultancy::all();
        return view('consultancy',compact('All_Consultancies'));
    }

    public function training()
    {
        $All_Trainings = Training::all();
        return view('training',compact('All_Trainings'));
    }

    public function isoAccreditation()
    {
        return view('iso-accreditation');
    }
}
