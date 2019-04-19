@extends('layouts.master')
@section('content')
<div class="mt-5 mb-5 container">

    <div class="jumbotron">
        <h2 class="text-center">Edit {{ $recipe->name }}</h2>
    </div>

    <form method="post" action="{{ route('recipes.update', [$recipe->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $recipe->name }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter recipe name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Cover Image</label>
            <input type="file" class="form-control-file" name="image" id="image" id="exampleFormControlFile1" accept=".jpg,.jpeg,.png">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Serving Size</label>
            <input type="text" class="form-control" name="serving_size" value="{{ $recipe->servings }}" id="exampleInputPassword1" placeholder="ex: '1 cup', '4 pieces', etc.">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Total Calories</label>
            <input type="text" class="form-control" name="calories" value="{{ $recipe->calories }}" id="exampleInputPassword1" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="5">{{ $recipe->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Steps</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="steps" rows="15">{{ $recipe->steps }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

@endsection