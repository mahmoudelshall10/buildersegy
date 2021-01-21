<?php

namespace App\Http\Controllers\Admin;
use App\Model\Team;
use Auth;
use App\Http\Requests\teamRequest;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
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
        $strTitle = 'Team Members';
        $All_Team_Members = Team::all();
        return view('admin.team.index' , compact('strTitle' , 'All_Team_Members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $strTitle = 'Create Team Member';
        return view('admin.team.create' ,compact('strTitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(teamRequest $request)
    {
        try {
            if(isset($request->fldPhoto) ){
                $fldPhoto = $request->fldPhoto;
                $path=$fldPhoto->store('Team_Member_Photos'); 
                
                $TeamMember = new Team();
                $TeamMember->fldName = $request->fldName;
                $TeamMember->fldJobTitle = $request->fldJobTitle;
                $TeamMember->fldQuote = $request->fldQuote;
                $TeamMember->fldFacebook = $request->fldFacebook;
                $TeamMember->fldLinkedIn = $request->fldLinkedIn;
                $TeamMember->fkCreatedByUserID = Auth::user()->id;
                $TeamMember->fldPhoto =$path;
                $TeamMember->save();
            }else{
                $TeamMember = new Team();
                $TeamMember->fldName = $request->fldName;
                $TeamMember->fldJobTitle = $request->fldJobTitle;
                $TeamMember->fldQuote = $request->fldQuote;
                $TeamMember->fldFacebook = $request->fldFacebook;
                $TeamMember->fldLinkedIn = $request->fldLinkedIn;
                $TeamMember->fkCreatedByUserID = Auth::user()->id;
                $TeamMember->save();
            }
            session()->flash('message' ,'Member Successfully Added.');
        } catch (\Exception $e) {
            session()->flash('error' ,'Please Check Your Data');
        }
        return redirect('admin/team_members');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $strTitle = 'Show Team Member';
      $objTeamMember = Team::find($id);
      return view('admin.team.show' ,compact('objTeamMember' ,'strTitle'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objTeamMember = Team::find($id); 
        $strTitle = 'Edit Team Member';
        return view('admin.team.edit' ,compact('objTeamMember','strTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(teamRequest $request, $id)
    {
        try {
            if(isset($request->fldPhoto) ){
                $fldPhoto = $request->fldPhoto;
                $path=$fldPhoto->store('Team_Member_Photos');

                $ObjTeamMember= Team::find($id);
                $ObjTeamMember->fldName = $request->get('fldName');
                $ObjTeamMember->fldJobTitle = $request->get('fldJobTitle');
                $ObjTeamMember->fldQuote = $request->get('fldQuote');
                $ObjTeamMember->fldFacebook = $request->fldFacebook;
                $ObjTeamMember->fldLinkedIn = $request->fldLinkedIn;
                Storage::delete($ObjTeamMember->fldPhoto); // delete previous image from folder
                $ObjTeamMember->fldPhoto = $path;
                $ObjTeamMember->update();
        
                }else{
                    
                $ObjTeamMember= Team::find($id);
                $ObjTeamMember->fldName = $request->get('fldName');
                $ObjTeamMember->fldJobTitle = $request->get('fldJobTitle');
                $ObjTeamMember->fldQuote = $request->get('fldQuote');
                $ObjTeamMember->fldFacebook = $request->fldFacebook;
                $ObjTeamMember->fldLinkedIn = $request->fldLinkedIn;
                $ObjTeamMember->update();
                }

            session()->flash('message' ,'Member Successfully Updated.');
        } catch (\Exception $e) {
            session()->flash('error' ,'Please Check Your Data');
        }
        return redirect('/admin/team_members');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try { 
            $objTeam = Team::find($id);
            Storage::delete($objTeam->fldPhoto);
            $objTeam->delete();
             Session::flash('message' , 'Successfully Deleted!!');
         } catch (\Exception $e){
             Session()->flash('message' ,'Please Check Your Data');
         }
         return redirect('/admin/team_members');
    }
}
