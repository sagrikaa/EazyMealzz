@extends('layouts.master')
@section('content')
    
    <div class="container mt-5 mb-5">
        <div class="jumbotron" style="background-image: url({{ asset('storage/'.$recipe->image_url) }}); background-repeat: no-repeat;background-size: cover; height:300px; opacity: 0.6">
            <h1 class="text-center" style="color: white">{{ $recipe->name }}</h1>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h5>Serving Size</h4>
                <p>{{ $recipe->servings }}</p>
            </div>
            <div class="col-md-12">
                <h5>Calories</h4>
                <p>{{ $recipe->calories }}</p>
            </div>
            <div class="col-md-12">
                <h5>Description</h4>
                <p>{{ $recipe->description }}</p>
            </div>
            <div class="col-md-12">
                <h5>Steps</h5>
                <p>{{ $recipe->steps }}</p>
            </div>
            @if($recipe->user == Auth::user())
            <div class="col-md-12 mt-3">
                <a class="btn btn-info" style="color: white">Edit</a>
                <a class="btn btn-danger" style="color: white">Delete</a>
            </div>
            @endif
        </div>
    </div>
    

@endsection