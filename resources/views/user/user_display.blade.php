@extends('admin')
@section('admincontent')

<table class="table">
  <tr>
    <td><h3 style='color:#5C0A1D;'>Users</h3><br></td>
    <td><div align="left">
      <a href="{{ route('user.export')}}" class="btn btn-info mb-4">Export to excel</a>
    </div></td>
</tr>
</table>


    <!--User Table-->
    <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">User ID</th>
                <th scope="col">Email</th>
                <th scope="col">Name</th>
                <th scope="col">User Type</th>
                <th scope="col">User Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
    @if(count($users) > 0)
            @foreach ($users as $user)
            <tr>
                    <th scope="row"></th>
                     <td>{{$user->id}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->type}}</td>
                    <td>{{$user->user_status}}</td>

                    <td>
                      <?php
                        $stat=$user['user_status'];
                        if($stat=="Active"){
                      ?>
                          <form method="post" name="delete_form" action="{{action('UserController@deactivate',$user['id'])}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="POST"/>
                            <button type="submit" class="btn btn-danger">Deactivate</button>
                          </form>
                      <?php
                      }
                        else{
                      ?>
                          <form method="post" name="active_form" action="{{action('UserController@activate',$user['id'])}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="POST"/>
                            <button type="submit" class="btn btn-success">Activate</button>
                          </form>
                      <?php
                      }
                      ?>
                    </td>
                    <td></td>
            </tr>
            @endforeach

    @else
    <h1>No records</h1>
    @endif

</tbody>
</table>
<!-- Pagination -->
<div class="pagination justify-content-center mb-4 paging">
  <div>

           {{$users->links( "pagination::bootstrap-4")}}

</div>
</div>

@endsection
