@extends('admin')
@section('admincontent')

<table class="table">
  <tr>
    <td><h3 style='color:#5C0A1D;'>Recipes</h3><br></td>
    <td><div align="left">
      <a href="{{ route('recipe.export')}}" class="btn btn-info mb-4">Export to excel</a>
    </div></td>
</tr>
</table>

    <!--User Table-->
    <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Recipe ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Servings</th>
                <th scope="col">Steps</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
    @if(count($recipes) > 0)
            @foreach ($recipes as $recipe)
            <tr>
                    <th scope="row"></th>
                     <td>{{$recipe->id}}</td>
                    <td>{{$recipe->recipe_name}}</td>
                    <td>{{$recipe->recipe_description}}</td>
                    <td>{{$recipe->recipe_servings}}</td>
                    <td>{{$recipe->recipe_steps}}</td>
                    <td>{{$recipe->recipe_status}}</td>

                    <td>
                      <?php
                        $stat=$recipe['recipe_status'];

                        if(isset($stat)){
                          if($stat=="Approved"){
                      ?>
                          <form method="post" name="delete_form" action="{{action('RecipeController@reject',$recipe['id'])}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="POST"/>
                            <button type="submit" class="btn btn-danger mb-4">Reject</button>
                          </form>
                      <?php
                      }
                        elseif($stat=="Rejected"){
                      ?>
                          <form method="post" name="active_form" action="{{action('RecipeController@approve',$recipe['id'])}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="POST"/>
                            <button type="submit" class="btn btn-success">Approve</button>
                          </form>
                      <?php
                    }}
                    else{
                      ?>
                      <form method="post" name="delete_form" action="{{action('RecipeController@reject',$recipe['id'])}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="POST"/>
                        <button type="submit" class="btn btn-danger">Reject</button>
                      </form>

                      <form method="post" name="active_form" action="{{action('RecipeController@approve',$recipe['id'])}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="POST"/>
                        <button type="submit" class="btn btn-success">Approve</button>
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

           {{$recipes->links( "pagination::bootstrap-4")}}

</div>
</div>

@endsection
