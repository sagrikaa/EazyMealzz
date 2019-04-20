@extends('layouts.master')
@section('content')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href=" {{asset('css/userprofile.css')}}">

    
   
<div>
      <!--Profile header -->
      <!--<div class=main main-raised>-->
      <div class="jumbotron">

              <div class="profile-content">
                
                      <div class="container" >
                          <div class="row">
                              <div class="col-md-6 ml-auto mr-auto">
                                <div class="profile ">
                                      <div class="avatar">
                                          <img src="{{asset('img/sagrika_profile_edit.jpg')}}"  alt="Circle Image" style="height: 250px;width: 250px;" class="img-raised rounded-circle img-fluid">
                                      </div>
                                      <div class="name">
                                          <h3 class="title">{{$currentuser->name}}</h3>
                                        <h6>{{$currentuser->user_title}}</h6>
                                          <i class="fa fa-dribbble"></i></a>
                                          <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                          <a href="#pablo" class="btn btn-just-icon btn-link btn-pinterest"><i class="fa fa-pinterest"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="description text-center">
                                  <p>{{$currentuser->user_description}}</p>
                              </div>
          
                              <!--FAVOURITES AND OPTIONS-->
                              <div class="row">
                                      <div class="col-md-6 ml-auto mr-auto">
                                          <div class="profile-tabs">
                                            <ul class="nav nav-pills  justify-content-center" role="tablist">
                                              <li class="nav-item">
                                                  <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
                                                    <i class="material-icons">add</i>
                                                  Follow
                                                  </a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="#works" role="tab" data-toggle="tab">
                                                    <i class="material-icons">restaurant_menu</i>
                                                      Recipes
                                                  </a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="#favorite" role="tab" data-toggle="tab">
                                                    <i class="material-icons">favorite</i>
                                                      Favorite
                                                  </a>
                                              </li>
                                            </ul>
                                          </div>
                                  </div>
                              </div>
                    </div>
              </div>
          
      </div>
      <!--End profile header-->  
      
      
      <!-- Page Content -->
     <div class="container">
    
            <div class="row">
        
              <!-- Blog Entries Column -->
              <div class="col-md-8">
        
<<<<<<< HEAD
                <h1 class="my-4">Profile
                <small>{{$currentuser->name}}</small>
=======
                <h1 class="my-4">Feed
                <small>SecondoryText</small>
>>>>>>> 3ac4c5ea334ca08bb4a668b148a9e1dfa67ed556
                </h1>
        
                <!-- Blog Post -->
                @if(count($posts) > 0)
                    @foreach ($posts as $post)
                        <div class="card">
<<<<<<< HEAD
                        {{-- <img class="card-img-top" src="{{asset('img/Smoothie_Image_post.jpg')}}" alt="Card image cap"> --}}
                        <img class="card-img-top" src="{{$post->img_url}}" alt="Card image cap">
=======
                        <img class="card-img-top" src="{{asset('img/Smoothie_Image_post.jpg')}}" alt="Card image cap">
>>>>>>> 3ac4c5ea334ca08bb4a668b148a9e1dfa67ed556
                        <div class="card-body">
                            <h2 class="card-title">{{$post->title}}</h2>
                            <p class="card-text">{{$post->description}}</p>
                        <a href="/post/{{$post->id}}" class="btn btn-primary">Read More &rarr;</a>
                        </div>
<<<<<<< HEAD
                        <div class="card-footer">
                            Posted on {{$post->created_at}} by <a href="#">{{$currentuser->name}}</a>
                            <span class="container">
                            <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
                            <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                            <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
                            </span >
                        </div>
                        {{-- <div class="card-footer text-muted">
                          
=======
                        <div class="card-footer text-muted">
                            Posted on {{$post->created_at}} by
                            <a href="#">@username</a>
>>>>>>> 3ac4c5ea334ca08bb4a668b148a9e1dfa67ed556
                            <!--Favourite button-->
                            <div class="click">
                                <span class="fa fa-star-o"></span>
                                <div class="ring"></div>
                                <div class="ring2"></div>
                                <p class="info">Added to favourites!</p>
                            </div>
                            </div>
<<<<<<< HEAD
                        </div> --}}
=======
                        </div>
>>>>>>> 3ac4c5ea334ca08bb4a668b148a9e1dfa67ed556
                    @endforeach
                     <!-- Pagination -->
                   <div class="pagination justify-content-center mb-4">
                       <div class="page-item">
                           
                                {{$posts->links()}}
                       
                   </div>
                </div>
                @endif
                
                
                
        
              </div>
            </div>
<<<<<<< HEAD
     </div>

</div>
=======
    </div>

>>>>>>> 3ac4c5ea334ca08bb4a668b148a9e1dfa67ed556
         <!-- Bootstrap core JavaScript -->
         <script src="{{asset('js/jquery.min.js')}}"></script>
         <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
         <script src="{{asset('js/userprofile.js')}}"></script>


<<<<<<< HEAD

    
    
  @endsection
=======
        @endsection
>>>>>>> 3ac4c5ea334ca08bb4a668b148a9e1dfa67ed556
