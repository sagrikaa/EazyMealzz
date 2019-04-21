@extends('layouts.master')
@section('content')
    <div class="container mt-5 mb-5">
    <!--User Table-->
    <table class="table">
            <tbody>
    @if(count($recipes) > 0)
    <ul class="list-group">
        @foreach ($recipes as $recipe)
            <li class="list-group-item list-group-item-action">
                <a href="{{ route('recipes.show', [$recipe->id]) }}">
                    <div class="row">    
                        <div class="col-md-2">
                            <img src="{{ asset('storage/'.$recipe->image_url) }}" alt="{{ $recipe->name }}" height="100" width="100">
                        </div>
                        <div>
                            <p style="margin: 0">{{$recipe->name}}</p>
                            <small class="text-muted">{{ str_limit($recipe->description, $limit = 150, $end = '...') }}</small>
                        </div>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>

    @else
    <h1>No recipes found</h1>
    <a href="{{ route('recipes.create') }}" class="btn btn-info">Care to add one?</a>
    @endif

</tbody>
</table>
</div>
<!-- Pagination -->
<div class="pagination justify-content-center mb-4">
  <div>

           {{$recipes->links( "pagination::bootstrap-4")}}

</div>
</div>
@endsection