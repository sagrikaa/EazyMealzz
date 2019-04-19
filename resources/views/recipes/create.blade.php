@extends('layouts.master')
@section('content')
<div class="mt-5 mb-5 container">

    <div class="jumbotron">
        <h2 class="text-center">Post a new recipe</h2>
    </div>

    <form method="post" action="{{ url('/recipes') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter recipe name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Cover Image</label>
            <input type="file" class="form-control-file" name="image" id="image" id="exampleFormControlFile1" accept=".jpg,.jpeg,.png">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Serving Size</label>
            <input type="text" class="form-control" name="serving_size" id="exampleInputPassword1" placeholder="ex: '1 cup', '4 pieces', etc.">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Total Calories</label>
            <input type="text" class="form-control" name="calories" id="exampleInputPassword1" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Steps</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="steps" rows="15"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

@endsection