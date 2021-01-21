<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use Auth;
use App\User;
use Storage;
use Illuminate\Support\Facades\File;
use Session;
class UserController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $All_Users = User::all();
        $strTitle = 'Show Users';   
        return view('admin.user.index' , compact('All_Users' ,'strTitle' ));
    }

    public function create(){
        $strTitle = 'Create User';
        return view('admin.user.create',compact('strTitle'));
    }

    public function store(Request $request){

        try{
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'fldType' => 'required|in:Admin,User',
            ]);

            if(isset($request->photo) ){
                $profileImage = $request->file('photo');
                $profileImageSaveAsName = time() . Auth::id() . "-profile." . 
                                        $profileImage->getClientOriginalExtension();
    
                $upload_path = 'storage/app/User_Photos/';
                $profile_image_url = $upload_path . $profileImageSaveAsName;
                $success = $profileImage->move($upload_path, $profileImageSaveAsName);

                $User = new User();
                $User->name = $request->name; 
                $User->email = $request->email; 
                $User->password =  bcrypt($request->password); 
                $User->fldType = $request->fldType;;
                $User->photo = $profile_image_url;
                $User->save();
            }
            session()->flash('message' ,'User Successfully Added.');
        } catch (\Exception $e) {
            session()->flash('error' ,'Please Check Your Data');
        }
        return redirect('admin/users');
    }



    public function profile()
    {
        $user = Auth::user();
        return view('admin.user.profile',compact('user',$user));
    }
    


    public function update_photo(Request $request){

        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();
        $profileImage = $request->file('photo');
        $profileImageSaveAsName = time() . Auth::id() . "-profile." . 
                                $profileImage->getClientOriginalExtension();

        $upload_path = 'storage/app/User_Photos/';
        $profile_image_url = $upload_path . $profileImageSaveAsName;
        $success = $profileImage->move($upload_path, $profileImageSaveAsName);
        File::delete($user->photo); // delete previous image from folder
        $user->photo = $profile_image_url;
        $user->save();

        return back()->with('success','You have successfully upload image.');

    }

    public function destroy($id){
        try { 
            $objUser = User::find($id);
            File::delete($objUser->photo);
            $objUser->delete();
             Session::flash('message' , 'Successfully Deleted!!');
         } catch (\Exception $e){
             Session()->flash('message' ,'Please Check Your Data');
         }
         return redirect('admin/users'); 
    }
}