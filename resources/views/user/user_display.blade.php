@extends('admin')
@section('admincontent')
    <!--User Table-->
    <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">User ID</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">First Name</th>
                <th scope="col">User Type</th>
                <th scope="col">User Status</th>
              </tr>
            </thead>
            <tbody>
    @if(count($users) > 0)
            @foreach ($users as $user)
            <tr>
                    <th scope="row"></th>
                     <td>{{$user->id}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->first_name}}</td>
                    <td>{{$user->last_name}}</td>
                    <td>{{$user->user_type}}</td>
                    <td>{{$user->user_status}}</td>
                    <td></td>
            </tr>
            @endforeach

    @else
    <h1>No records</h1>
    @endif
   
</tbody>
</table>
@endsection