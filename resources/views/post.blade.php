@extends('layouts.master')
@section('content')
 <!-- Page Content -->
    
 <div class="container">
        <span>
        <input  class="btn btn-warning" value="Go Back" onclick="history.back(-1)" />
        </span>
        <div class="row">
    
          <!-- Post Content Column -->
          <div class="col-lg-8">
    
            <!-- Title -->
            <h1 class="mt-4">{{$post->title}}</h1>
    
            <!-- Author -->
            <p class="lead">
              by
              <a href="#">{{$user}}</a>
            </p>
    
            <hr>
    
            <!-- Date/Time -->
            <p>Posted on {{$post->created_at}}</p>
    
            <hr>
    
            <!-- Preview Image -->
            <img class="img-fluid rounded" src="{{$post->img_url}}" alt="">
    
            <hr>
    
            <!-- Post Content -->
            <p class="lead">{{$post->content}}</p>
    
            {{-- <blockquote class="blockquote">
              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <footer class="blockquote-footer">Someone famous in
                <cite title="Source Title">Source Title</cite>
              </footer>
            </blockquote> --}}
            <h1>Ingredients</h1>
            <p>{{$post->ingredients}}</p>
    
            <p>{{$post->instructions}}</p>
    
            <hr>
    
            <!-- Comments Form -->
            <div class="card my-4">
              <h5 class="card-header">Leave a Comment:</h5>
              <div class="card-body">

                @csrf

                <form  id='comment_form'  action='/storeComment'>
                  <div class="form-group">
                    <textarea class="form-control" rows="3" value="" name="comment_box"></textarea>
                  </div>
                  <input type="hidden" name="user_id" value="{{$post->user_id}}">
                  <input type="hidden" name="post_id" value="{{$post->id}}">

                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
    
            <!-- Single Comment -->
           @foreach($post->comments as $comment)
            <div class="media mb-4">
              <img class="d-flex mr-3 rounded-circle" src="{{asset('storage/user_avatar/'.$comment->user->avatar) }}" height="75" width="75" alt="image">
              <div class="media-body">
                <h5 class="mt-0">{{($comment->user)->name}}</h5>
                <p class="comment">
                {{$comment->comment_string}}
                </p>
              </div>
            </div>
    @endforeach
            <!-- Comment with nested comments -->
            <div class="media mb-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    
                <div class="media mt-4">
                  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                  <div class="media-body">
                    <h5 class="mt-0">Commenter Name</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                  </div>
                </div>
    
                <div class="media mt-4">
                  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                  <div class="media-body">
                    <h5 class="mt-0">Commenter Name</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                  </div>
                </div>
    
              </div>
            </div>
    
          </div>
    
          <!-- Sidebar Widgets Column -->
          <div class="col-md-4">
    
            <!-- Search Widget -->
            <div class="card my-4">
              <h5 class="card-header">Search</h5>
              <div class="card-body">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div>
    
            <!-- Categories Widget -->
            <div class="card my-4">
              <h5 class="card-header">Categories</h5>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                      <li>
                        <a href="#">Web Design</a>
                      </li>
                      <li>
                        <a href="#">HTML</a>
                      </li>
                      <li>
                        <a href="#">Freebies</a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                      <li>
                        <a href="#">JavaScript</a>
                      </li>
                      <li>
                        <a href="#">CSS</a>
                      </li>
                      <li>
                        <a href="#">Tutorials</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
    
            <!-- Side Widget -->
            <div class="card my-4">
              <h5 class="card-header">Side Widget</h5>
              <div class="card-body">
                You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
              </div>
            </div>
    
          </div>
    
        </div>
        <!-- /.row -->
    
      </div>

      <script src={{asset('js/comments.js')}}></script>
      <!-- /.container -->
    @endsection