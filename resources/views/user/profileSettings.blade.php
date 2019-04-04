@extends('layouts.master')
@section('content')
<div class="jumbotron">
    <!-- Profile Settings-->
    <div class="col-lg-8 pb-5">
        <div class="page-header">Settings</div>
        <form class="row"  method="post" action="#">
        <!-- <div class="col-md-6">
                <div class="form-group">
               
                    <label for="account-fn">User Name</label>
                    <input class="form-control" type="hidden" name="account-un" value="2" >
                </div>
        </div> -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="account-fn">First Name</label>
                  <input class="form-control" type="text" name="account-fn" value="" >
                    <input class="form-control" type="text" name="account-fn" value="" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="account-ln">Last Name</label>
                    <input class="form-control" type="text" name="account-ln" value="" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="account-email">E-mail Address</label>
                    <input class="form-control" type="email" name="account-email" value="" >
                </div>
            </div>
            <!-- <div class="col-md-6">
                <div class="form-group">
                    <label for="account-phone">Contact Number</label>
                    <input class="form-control" type="text" name="account-phone" value="" >
                </div>
            </div>
            <div class="col-md-6"> -->
            
                <div id="ChangePassword" class="form-group">
                    <label for="account-pass">New Password</label>
                    <input class="form-control" type="password" name="account-pass">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="account-confirm-pass">Confirm Password</label>
                    <input class="form-control" type="password" name="account-confirm-pass">
                </div>
            </div>
            <div class="col-12">
                <hr class="mt-2 mb-3">
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <div class="custom-control custom-checkbox d-block">
                        <input class="custom-control-input" type="checkbox" id="subscribe_me" checked="">
                        <label class="custom-control-label" for="subscribe_me">Subscribe me to Newsletter</label>
                    </div>
                    <button name="Update_btn" value="Update_btn" class="btn btn-style-1 btn-primary" type="submit" data-toast="" data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Success!" data-toast-message="Your profile updated successfuly.">Update Profile</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection