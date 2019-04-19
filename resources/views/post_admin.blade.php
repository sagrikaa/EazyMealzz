@extends('admin')
@section('admincontent')

<div align="right">
  <a href="{{ route('post.export')}}" class="btn btn-info mb-4">Export to excel</a>
</div>
    <!--User Table-->
    <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Ingredients</th>
                <th scope="col">Content</th>
                <th scope="col">Instructions</th>
                <th scope="col">Created</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
    @if(count($posts) > 0)
            @foreach ($posts as $post)
            <tr>
                    <th scope="row"></th>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->ingredients}}</td>
                    <td>{{$post->content}}</td>
                    <td>{{$post->instructions}}</td>
                    <td>{{$post->created_at}}</td>

                    <td>
                      <form method="post" name="delete_form" action="{{action('PostController@destroy',$post['id'])}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="POST"/>
                            <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
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
<div class="pagination justify-content-center mb-4">
  <div>

         {{$posts->links("pagination::bootstrap-4")}}

</div>
</div>

@endsection
