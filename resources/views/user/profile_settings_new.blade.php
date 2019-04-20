@extends('layouts.master')
@section('content')
<div class="container mt-5 mb-5">
  <h1>Profile Settings</h1>
  <hr>
    <div class="row">
        <!-- left column -->
        
        <!-- edit form column -->
        {{-- <div class="col-md-9 personal-info">
          <div class="alert alert-info alert-dismissable">
            <a class="panel-close close" data-dismiss="alert">×</a> 
            <i class="fa fa-coffee"></i>
            This is an <strong>.alert</strong>. Use this to show important messages to the user.
          </div> --}}
          
          <h3 class="col-lg-12 col-med-12">Personal info</h3>
          
        <form class="form-horizontal col-lg-12 col-med-12 col-sm-12" method="get" action="/updateUserProfile/{{$user->id}}"        role="form" enctype="multipart/form-data">

                <div class=" col-lg-4 col-md-4">
                    <div class="text-center">
                        {{-- <img src="/storage/user_avatar/{{$user->avatar}}"  class="avatar img-circle" alt="avatar"> --}}
                      <img src="{//placehold.it/100}"  class="avatar img-circle" alt="avatar">
                      <h6>Upload a different photo...</h6>
                      <input type="file" class="form-control" name="user_avatar"> 
                    </div>
                </div>
                  

                <div class="form-group">
                  <label class="col-lg-3 control-label">Name:</label>
                  <div class="col-lg-6">
                  <input class="form-control" name="user_name" type="text" value="{{$user->name}}">
                  </div>
                </div>

                {{-- <div class="form-group">
                  <label class="col-lg-3 control-label">Last name:</label>
                  <div class="col-lg-8">
                    <input class="form-control" type="text" value="Bishop">
                  </div>
                </div> --}}

                <div class="form-group">
                  <label class="col-lg-3 control-label">Email:</label>
                  <div class="col-lg-6">
                    <input class="form-control"  name="user_email" type="text" value="{{$user->email}}">
                  </div>
                </div>

                {{-- Change Password section --}}
                <div class="form-group">

                    {{-- Change password button with collapsable section --}}
                      <div class="col-lg-8">
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#changepassword" aria-expanded="false" aria-controls="changepassword">Change Password </button>
                      </div>

                      {{-- collapsible section --}}
                      <div class="collapse" id="changepassword">

                          <label class="col-lg-3 control-label"> New Password:</label>
                          <div class="col-lg-6">
                            <input class="form-control" name="user_password" type="text" value="">
                          </div>

                          <label class="col-lg-3 control-label">Confirm Password:</label>
                          <div class="col-lg-6">
                          <input class="form-control" name="user_cnfrm_password" type="text" value="">
                          </div>

                      </div>
                </div>
                
              
                
              <div class="form-group">
                  <label class="col-md-3 control-label">Title:</label>
                  <div class="col-md-6">
                    <input type="text"  name="user_title" class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" value="{{$user->user_title}}">
                  
                    
                </div>
              </div>
            
                <div class="form-group">
                  <label class="col-md-3 control-label">Description:</label>
                  <div class="col-md-6">
                      <textarea  name="user_description" class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="{{$user->user_description}}" value=""></textarea>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-md-3 control-label"></label>
                  <div class="col-md-8">
                    <input type="submit" class="btn btn-primary" value="Save Changes">
                    <span></span>
                    <input type="reset" class="btn btn-default" value="Cancel">
                  </div>
                </div>

          </form>
   
    </div>
  <hr>
</div>
@endsection