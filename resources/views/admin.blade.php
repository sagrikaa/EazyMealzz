@extends('layouts.master')

@section('content')
<div><a class="mobilea" href="#"></a></div>
<div id="contain">
  <div class="sidebar">
    <ul id="nav">
      <li><a  href="admin_dashboard">Dashboard</a></li>
      <li><a  href="user">Users</a></li>
      <li><a href="recipe">Recipes</a></li>
      <li><a href="postadmin">Posts</a></li>
    </ul>
  </div>
  <div class="content">
      @yield('admincontent')
    </div>
@endsection
