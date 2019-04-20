@extends('layouts.master')
@section('content')
  <!-- Page Content -->

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
  crossorigin="anonymous">
  
<<<<<<< HEAD
=======
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
  crossorigin="anonymous"></script>
  



>>>>>>> 3ac4c5ea334ca08bb4a668b148a9e1dfa67ed556
<div class="container gedf-wrapper mt-5 mb-5">
  <div class="row">
      <div class="col-md-3">
          <div class="card">
              <div class="card-body">
                  <img id="displaypic" src="../assets/img/shashank.jpg">

                  <div class="h5">@Shashank
                  </div>

                  <div class="h7 text-muted">Fullname : Shashank Yadav
                  </div>
                  <div class="h7">Pioneer of Haryanvi Cuisine 
                  </div>
              </div>
              <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                      <div class="h6 text-muted">Followers</div>
                      <div class="h5">5.2342</div>
                  </li>
                  <li class="list-group-item">
                      <div class="h6 text-muted">Following</div>
                      <div class="h5">6758</div>
                  </li>
                  <li class="list-group-item">
                      <div class="h6 text-muted"><a href="profilesetting" class="btn btn-warning btn-large" >Settings</a></div>
                      
                  </li>
                  <li class="list-group-item">Vestibulum at eros</li>
              </ul>
          </div>
      </div>
      <div class="col-md-6 gedf-main">
            
          <!--- \\\\\\\Post-->
          
          

          <div class="card gedf-card">
              <div class="card-header">
                  <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex justify-content-between align-items-center">
                          <div class="mr-2">
                              <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                          </div>
                          <div class="ml-2">
                              <div class="h5 m-0">@Shashank</div>
                              <div class="h7 text-muted">Shashank Yadav</div>
                          </div>
                      </div>
                      <div>
                          <div class="dropdown">
                              <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fa fa-ellipsis-h"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                  <div class="h6 dropdown-header">Configuration</div>
                                  <a class="dropdown-item" href="#">Save</a>
                                  <a class="dropdown-item" href="#">Hide</a>
                                  <a class="dropdown-item" href="#">Report</a>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>
              <div class="card-body">
                  <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>10 min ago</div>
                  <a class="card-link" href="#">
                      <h5 class="card-title">Title</h5>
                  </a>

                  <p class="card-text">
                        Content
                  </p>
              </div>
              <div class="card-footer">
                  <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
                  <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                  <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
              </div>
          </div>




          <!-- Post /////-->


          <!--- \\\\\\\Post-->
          <div class="card gedf-card">
              <div class="card-header">
                  <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex justify-content-between align-items-center">
                          <div class="mr-2">
                              <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                          </div>
                          <div class="ml-2">
                              <div class="h5 m-0">@Harsh</div>
                              <div class="h7 text-muted">Harshdeep Singh</div>
                          </div>
                      </div>
                      <div>
                          <div class="dropdown">
                              <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fa fa-ellipsis-h"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                  <div class="h6 dropdown-header">Configuration</div>
                                  <a class="dropdown-item" href="#">Save</a>
                                  <a class="dropdown-item" href="#">Hide</a>
                                  <a class="dropdown-item" href="#">Report</a>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>
              <div class="card-body">
                  <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> 10 min ago</div>
                  <a class="card-link" href="#">
                      <h5 class="card-title"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit consectetur
                          deserunt illo esse distinctio.</h5>
                  </a>

                  <p class="card-text">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam omnis nihil, aliquam est, voluptates officiis iure soluta
                      alias vel odit, placeat reiciendis ut libero! Quas aliquid natus cumque quae repellendus. Lorem
                      ipsum dolor sit amet consectetur adipisicing elit. Ipsa, excepturi. Doloremque, reprehenderit!
                      Quos in maiores, soluta doloremque molestiae reiciendis libero expedita assumenda fuga quae.
                      Consectetur id molestias itaque facere? Hic!
                  </p>
                  <div>
                      <span class="badge badge-primary">Tandoori</span>
                      <span class="badge badge-primary">Teekha</span>
                      <span class="badge badge-primary">Hakka</span>
                      <span class="badge badge-primary">Mint Chutney</span>
                      <span class="badge badge-primary">Naan</span>
                      <span class="badge badge-primary">Tikka</span>
                  </div>
              </div>
              <div class="card-footer">
                  <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
                  <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                  <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
              </div>
          </div>
          <!-- Post /////-->


          <!--- \\\\\\\Post-->
          <div class="card gedf-card">
              <div class="card-header">
                  <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex justify-content-between align-items-center">
                          <div class="mr-2">
                              <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                          </div>
                          <div class="ml-2">
                              <div class="h5 m-0">@Ruchi</div>
                              <div class="h7 text-muted">Ruchi Singh</div>
                          </div>
                      </div>
                      <div>
                          <div class="dropdown">
                              <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fa fa-ellipsis-h"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                  <div class="h6 dropdown-header">Configuration</div>
                                  <a class="dropdown-item" href="#">Save</a>
                                  <a class="dropdown-item" href="#">Hide</a>
                                  <a class="dropdown-item" href="#">Report</a>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>
              <div class="card-body">
                  <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> Hace 40 min</div>
                  <a class="card-link" href="#">
                      <h5 class="card-title">Totam non adipisci hic! Possimus ducimus amet, dolores illo ipsum quos
                          cum.</h5>
                  </a>

                  <p class="card-text">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam sunt fugit reprehenderit consectetur exercitationem odio,
                      quam nobis? Officiis, similique, harum voluptate, facilis voluptas pariatur dolorum tempora sapiente
                      eius maxime quaerat.
                      <a href="https://https://sanjeevkapoor.com/" target="_blank">https://mega.nz/#!1J01nRIb!lMZ4B_DR2UWi9SRQK5TTzU1PmQpDtbZkMZjAIbv97hU</a>
                  </p>
              </div>
              <div class="card-footer">
                  <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
                  <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                  <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
              </div>
          </div>
          <!-- Post /////-->



      </div>
      
  </div>
</div>

@endsection