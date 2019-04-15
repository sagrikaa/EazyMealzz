@extends('admin')
@section('admincontent')


        <div>
            <h1 style='color:#5C0A1D;'>Search</h1><br>

          <form action="/project-kaizen-masterss/public/search" method="POST" role="search">
            {{ csrf_field() }}
                  <table>
                    <tr>
                      <td><input type="text" name="keyword" placeholder="Type a keyword" value=""></td><td> &nbsp;&nbsp; </td>
                      <td>
                        <input list="scopes" name="scope" placeholder="Select scope">
                          <datalist id="scopes">
                            <option value="users">
                            <option value="recipes">
                            </datalist>

                      </td><td> &nbsp;&nbsp; </td>
                      <td><input type="submit" name="search" value="Search"></td> <td> &nbsp;&nbsp; </td>
                      <td><input type="submit" name="list" value="View All"></td>
                    </tr>


                  </table><br><br>
              </form>

              <?php
                if(isset($_POST["search"]))  {
                    $id=$_POST['scope'];
                      if($id==""){
                          echo "Please select scope";
                        }
                elseif($id=="recipes"){
              ?>
            <!--Search Results-->
              <div class="row">
                <div class="col-md-12">
                  <br/>
                    <h3 align="center">Recipes</h3>
                      <br/>
                      @if(isset($data))
                      <table class="table table-bordered">
                        <tr>
                          <th>Recipe ID</th>
                          <th>Name</th>
                          <th>Description</th>
                          <th>Servings</th>
                          <th>Calories</th>
                          <th>Steps</th>
                          <th>Status</th>
                        </tr>
                        @foreach($data as $row)
                        <tr>
                            <td>{{$row['id']}}</td>
                            <td>{{$row['recipe_name']}}</td>
                            <td>{{$row['recipe_description']}}</td>
                            <td>{{$row['recipe_servings']}}</td>
                            <td>{{$row['recipe_calories']}}</td>
                            <td>{{$row['recipe_steps']}}</td>
                            <td>{{$row['recipe_status']}}</td>
                        </tr>
                        @endforeach
                      </table>
                      {!! $data->render() !!}
                      @else

                      @endif
                </div>
              </div>
            <!--End of Results-->
            <?php
            }
            elseif($id=="users"){
            ?>

            <!--Search Results-->
              <div class="row">
                <div class="col-md-12">
                  <br/>
                    <h3 align="center">Users</h3>
                      <br/>
                      @if(isset($data))
                      <table class="table table-bordered">
                        <tr>
                          <th>User ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>User Type</th>
                          <th>Status</th>
                        </tr>
                        @foreach($data as $row)
                        <tr>
                            <td>{{$row['id']}}</td>
                            <td>{{$row['name']}}</td>
                            <td>{{$row['email']}}</td>
                            <td>{{$row['type']}}</td>
                            <td>{{$row['user_status']}}</td>

                        </tr>
                        @endforeach
                      </table>
                      {!! $data->render() !!}
                      @else

                      @endif
                </div>
              </div>
            <!--End of Results-->
            <?php
            }
            }
            ?>
          </div>
            <!--End of Content-->

@endsection
