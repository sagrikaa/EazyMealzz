@extends('layouts.master')
@section('content')
<header>
      <!--Carousel SLides-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url({{asset('img/slider-1.jpg')}}">
                    
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url({{asset('img/slider-2.jpg')}}">
                    
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url({{asset('img/slider-3.jpg')}})">
                    
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Search Bar -->
        <div class="container search">
            <div class="form-group">
                <input type="text" class="form-control search-bar shadow" placeholder="Search Recipes">
            </div>
        </div>
        
    </header>
<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="my-4">Welcome to EasyMealz</h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item active">
        <a href="#">Trending Culinary Articles</a>
      </li>
    </ol>

    <!-- Project One -->
    @foreach($articles as $article)
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <img class="img-fluid rounded mb-3 mb-md-0" src="{{asset($article->image)}}" alt="" height="50px" width="700px">
        </a>
      </div>
      <div class="col-md-5">
        <h3>{{ $article->name }}</h3>
          <p>{{ $article->description }}</p>
        <a class="btn btn-primary" href="#">View Article
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
    @endforeach
    <!-- /.row -->

    <!-- Pagination -->

        <div class="col-lg-12">{{ $articles->links()  }}</div>


  </div>
  <!-- /.container -->
@endsection

