<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Partner;
use App\Model\Training;
use App\Model\Team;
use App\Model\Consultation;
use App\Model\ClientFeedBack;
use App\Model\Story;
use App\Model\Bspyl;

class AdminController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $Users = User::all()->count();
        $Partners = Partner::all()->count();
        $Trainings = Training::all()->count();
        $TeamMembers = Team::all()->count();
        $Consultations = Consultation::all()->count();
        $FeedBacks = ClientFeedBack::all()->count();
        $Stories = Story::all()->count();
        $Bspyl_Data = Bspyl::all()->count();
        return view('admin.dashboard' , compact('Users','Partners','Trainings','TeamMembers','Consultations','FeedBacks','Stories','Bspyl_Data'));
    }
    public function categories()
    {
        return view('admin.categories');
    }
    public function news()
    {
        return view('admin.news');
    }
    public function settings()
    {
        return view('admin.settings');
    }

}