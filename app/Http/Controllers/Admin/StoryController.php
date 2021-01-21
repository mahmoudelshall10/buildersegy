<?php

namespace App\Http\Controllers\Admin;
use App\Model\Story;
use App\Http\Requests\storyRequest;
use Illuminate\Http\Request;
use Auth;
use Session;
use Illuminate\Support\Facades\Storage;
class StoryController extends Controller
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
        $strTitle = 'Show Posts';
        $All_Stories = Story::all();
        return view('admin.story.index' ,compact('strTitle','All_Stories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $strTitle = 'Create Post';
        return view('admin.story.create' ,compact('strTitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storyRequest $request)
    {
        try {
            if(isset($request->fldPhoto)){
                $fldPhoto = $request->fldPhoto;
                $path=$fldPhoto->store('Story_Photos');
            }
            $Story = new Story();
            $Story->fldName = $request->fldName;
            $Story->fldText = $request->fldText;
            $Story->fldAddress = $request->fldAddress;
            $Story->fldDate = $request->fldDate;
            $Story->fkCreatedByUserID = Auth::user()->id;
            $Story->fldPhoto = $path;
            $Story->save();
            Session::flash('message','Post Successfully Added.');
        } catch (\Exception $e) {
            Session::flash('error','Please Check Your Data');
        }
        return redirect('admin/stories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $strTitle = 'Show Post';
       $objStory = Story::find($id);
       return view('admin.story.show' , compact('strTitle' , 'objStory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $strTitle = 'Edit Post';
        $objStory = Story::find($id);
        return view('admin.story.edit' , compact('strTitle' , 'objStory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Story  $Story
     * @return \Illuminate\Http\Response
     */
    public function update(storyRequest $request, $id)
    {
        try {
            if(isset($request->fldPhoto) ){
                $fldPhoto = $request->fldPhoto;
                $path=$fldPhoto->store('Story_Photos');

                $objStory= Story::find($id);
                $objStory->fldName = $request->get('fldName');
                $objStory->fldText = $request->get('fldText');
                $objStory->fldAddress = $request->get('fldAddress');
                $objStory->fldDate = $request->get('fldDate');
                Storage::delete($objStory->fldPhoto); // delete previous image from folder
                $objStory->fldPhoto = $path;
                $objStory->update();
        
                }else{
                $objStory= Story::find($id);
                $objStory->fldName = $request->get('fldName');
                $objStory->fldText = $request->get('fldText');
                $objStory->fldAddress = $request->get('fldAddress');
                $objStory->fldDate = $request->get('fldDate');
                $objStory->update();
                }

            session()->flash('message' ,'Post Successfully Updated.');
        } catch (\Exception $e) {
            session()->flash('error' ,'Please Check Your Data');
        }
        return redirect('/admin/stories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Story  $Story
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try { 
            $objStory = Story::find($id);
            Storage::delete($objStory->fldPhoto);
            $objStory->delete();
             Session::flash('message' , 'Successfully Deleted!!');
         } catch (\Exception $e){
             Session()->flash('message' ,'Please Check Your Data');
         }
         return redirect('admin/stories');
    }
    
}
