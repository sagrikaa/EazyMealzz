@extends('layouts.master')

@section('content')
<div><a class="mobilea" style="color:white;">Administration</a></div>
<div id="contain">
  <div class="sidebar">
    <ul id="nav">
      <li><a  href="admin_dashboard">Search</a></li>
      <li><a  href="useradmin">Users</a></li>
      <li><a href="recipeadmin">Recipes</a></li>
      <li><a href="postadmin">Posts</a></li>
    </ul>
  </div>
  <div class="content">
      @yield('admincontent')
    </div>
@endsection
