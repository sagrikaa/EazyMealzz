@extends('layouts.master')

@section('content')
<<<<<<< HEAD
<div><a class="mobilea" style="color:white;">Administration</a></div>
<div id="contain">
  <div class="sidebar">
    <ul id="nav">
      <li><a  href="admin_dashboard">Search</a></li>
      <li><a  href="useradmin">Users</a></li>
      <li><a href="recipeadmin">Recipes</a></li>
      <li><a href="postadmin">Posts</a></li>
=======
<div><a class="mobilea" href="#"></a></div>
<div id="contain">
  <div class="sidebar">
    <ul id="nav">
      <li><a  href="admin_dashboard">Dashboard</a></li>
      <li><a  href="user">Users</a></li>
      <li><a href="#">Recipes</a></li>
      <li><a href="#">Posts</a></li>
      <li><a href="#">Subscriptions</a></li>
>>>>>>> 3ac4c5ea334ca08bb4a668b148a9e1dfa67ed556
    </ul>
  </div>
  <div class="content">
      @yield('admincontent')
    </div>
@endsection
