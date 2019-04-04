@extends('layouts.master')

@section('content')
<div><a class="mobilea" href="#"></a></div>
<div id="contain">
  <div class="sidebar">
    <ul id="nav">
    <li><a  href="#">Dashboard</a></li>
      <li><a  href="user">Users</a></li>
      <li><a href="#">Recipes</a></li>
      <li><a href="#">Posts</a></li>
      <li><a href="#">Subscriptions</a></li>
    </ul>
  </div>
  <div class="content">
      @yield('admincontent')
    </div>
@endsection