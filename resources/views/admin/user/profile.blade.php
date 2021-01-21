@extends('admin.auth.user_layouts.app')

@section('content')
<h1 style="text-align:center">Change Profile Picture</h1>
<div class="container" style="margin-top:100px;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <img src="{{ asset($user->photo) }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                <h2>{{ $user->name }}'s Profile</h2>
            <form enctype="multipart/form-data" action="{{ asset('admin/users/profile')}}" method="POST">
                    <label>Update Profile Image</label>
                    <input type="file" name="photo">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                    <a href="{{asset('admin/users')}}" class="btn btn-success" style="margin-left:650px;font-size:12px">Back</a>
                </form>
            </div>
        </div>
    </div>



@endsection