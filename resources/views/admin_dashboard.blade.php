@extends('admin')
@section('admincontent')


        <div>
            <h2 style='color:#5C0A1D;'>Search</h2><br>

          <form action="/search" method="POST" role="search">
            {{ csrf_field() }}
                  <table>
                    <tr>
                      <td><input type="text" class="form-control" name="q" size="85" maxlength="85" placeholder="Search Users" value=""></td><td> &nbsp;&nbsp; </td>
                      <td> &nbsp;&nbsp; </td>
                      <td><input type="submit" class="form-control" name="search" value="Search"></td> <td> &nbsp;&nbsp; </td>
                    </tr>
                  </table><br><br>
          </form>

          <!--Search Results-->
          <div>
            @if(isset($details))
            <p> The Search results for your query <b> {{ $query }} </b> are :</p>
            <h3>User details</h3>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>User ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>User Type</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach($details as $user)
                <tr>
                  <td>{{$user['id']}}</td>
                  <td>{{$user['name']}}</td>
                  <td>{{$user['email']}}</td>
                  <td>{{$user['type']}}</td>
                  <td>{{$user['user_status']}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>

            @if($details)
            <div class="paging">
            {!! $details->render() !!}
           </div>
            @endif
            @elseif(isset($message))
            <p>{{ $message }}</p>
            @endif
          </div>
          <!--End of Results-->
          </div>
            <!--End of Content-->

@endsection
