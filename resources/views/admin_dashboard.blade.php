@extends('layouts.master')
@section('content')
<div><a class="mobilea" href="#">MENU</a></div>

      <div id="contain">
        <div class="sidebar">
          <ul id="nav">
            <li><a class="selected">Dashboard</a></li>
            <li><a href="../views/admin-user.php">Users</a></li>
            <li><a href="../views/admin-recipe.php">Recipes</a></li>
            <li><a href="#">Posts</a></li>
            <li><a href="#">Subscriptions</a></li>
          </ul>
        </div>
        <div class="content">
            <h1 style='color:#5C0A1D;'>Search</h1><br>

          <form name="myForm" action="dashboard.php" method="post">
                  <table>
                    <tr>
                      <td><input type="text" name="keyword" placeholder="Type a keyword" value=""></td><td> &nbsp;&nbsp; </td>
                      <td>
                        <input list="scopes" name="scope" placeholder="Select scope">
                          <datalist id="scopes">
                            <option value="users">
                            <!-- <option value="recipes"> -->
                            </datalist>

                      </td><td> &nbsp;&nbsp; </td>
                      <td><input type="submit" name="search" value="Search"></td> <td> &nbsp;&nbsp; </td>
                      <td><input type="submit" name="list" value="View All"></td>
                    </tr>


                  </table><br><br>
              </form>
            </div>
            <!--End of Content-->

        </div>

@endsection