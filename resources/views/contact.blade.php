<<<<<<< HEAD
@extends('layouts.master')
@section('content')

<!-- Page Content -->

<div class="my-5"></div>

<!-- Contact -->
<section class="container">

    <!--Contact heading-->
    <h2 class="h1 m-0">Contact us</h2>
    <!--Contact description-->
    <p class="pb-4">We understand that a lot of questions pop up in your head when it comes down to food and authenticity.So feel free to contact us any time.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-lg-5 mb-4">

            <!--Form with header-->
            <div class="card border-primary rounded-0">

                <div class="card-header p-0">
                    <div class="bg-primary text-white text-center py-2">
                        <h3><i class="fa fa-envelope"></i> Write to us:</h3>
                        <p class="m-0">We'll write rarely, but only the best content.</p>
                    </div>
                </div>
                <div class="card-body p-3">

                    <!--Body-->
                    @if(Session::has('flash_message'))
                    <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
                    @endif
                    <form method="post" action="{{ route('contact.store')  }}">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label>Your name</label>
                        <div class="input-group">
                            <div class="input-group-addon bg-light"><i class="fa fa-user text-primary"></i></div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username" name="name">
                            @if($errors->has('name'))
                            <small class="form-text" invalid-feedback>{{ $errors->first('name')  }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Your email</label>
                        <div class="input-group mb-2 mb-sm-0">
                            <div class="input-group-addon bg-light"><i class="fa fa-envelope text-primary"></i></div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username" name="email">
                             @if($errors->has('email'))
                            <small class="form-text" invalid-feedback>{{ $errors->first('email')  }}</small>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Message</label>
                        <div class="input-group mb-2 mb-sm-0">
                            <div class="input-group-addon bg-light"><i class="fa fa-pencil text-primary"></i></div>
                            <textarea name="message" class="form-control"></textarea>
                             @if($errors->has('message'))
                            <small class="form-text" invalid-feedback>{{ $errors->first('message')  }}</small>
                            @endif
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-primary btn-block rounded-0 py-2">Submit</button>
                    </div>

                </form>

                </div>

            </div>
            <!--Form with header-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-7">

            <!--Google map-->
            <div class="mb-4">
               
            </div>

            <!--Buttons-->
            <div class="row text-center">
                <div class="col-md-4">
                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-map-marker"></i></a>
                    <p>Winterfell<br> South of the wall </p>
                    
                </div>

                <div class="col-md-4">
                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-phone"></i></a>
                    <p>+ 01 234 567 89, <br> Mon - Fri, 8:00-22:00</p>
                </div>

                <div class="col-md-4">
                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-envelope"></i></a>
                    <p>eastmealz@gmail.com <br> sale@gmail.com</p>
                </div>
            </div>

        </div>
       <!--Grid column-->

    </div>

</section>
<!-- Contact -->


@endsection
=======
@extends('layouts.master')
@section('content')

<!-- Page Content -->

<div class="my-5"></div>

<!-- Contact -->
<section class="container">

    <!--Contact heading-->
    <h2 class="h1 m-0">Contact us</h2>
    <!--Contact description-->
    <p class="pb-4">We understand that a lot of questions pop up in your head when it comes down to food and authenticity.So feel free to contact us any time.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-lg-5 mb-4">

            <!--Form with header-->
            <div class="card border-primary rounded-0">

                <div class="card-header p-0">
                    <div class="bg-primary text-white text-center py-2">
                        <h3><i class="fa fa-envelope"></i> Write to us:</h3>
                        <p class="m-0">We'll write rarely, but only the best content.</p>
                    </div>
                </div>
                <div class="card-body p-3">

                    <!--Body-->
                    @if(Session::has('flash_message'))
                    <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
                    @endif
                    <form method="post" action="{{ route('contact.store')  }}">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label>Your name</label>
                        <div class="input-group">
                            <div class="input-group-addon bg-light"><i class="fa fa-user text-primary"></i></div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username" name="name">
                            @if($errors->has('name'))
                            <small class="form-text" invalid-feedback>{{ $errors->first('name')  }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Your email</label>
                        <div class="input-group mb-2 mb-sm-0">
                            <div class="input-group-addon bg-light"><i class="fa fa-envelope text-primary"></i></div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username" name="email">
                             @if($errors->has('email'))
                            <small class="form-text" invalid-feedback>{{ $errors->first('email')  }}</small>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Message</label>
                        <div class="input-group mb-2 mb-sm-0">
                            <div class="input-group-addon bg-light"><i class="fa fa-pencil text-primary"></i></div>
                            <textarea name="message" class="form-control"></textarea>
                             @if($errors->has('message'))
                            <small class="form-text" invalid-feedback>{{ $errors->first('message')  }}</small>
                            @endif
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-primary btn-block rounded-0 py-2">Submit</button>
                    </div>

                </form>

                </div>

            </div>
            <!--Form with header-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-7">

            <!--Google map-->
            <div class="mb-4">

            </div>

            <!--Buttons-->
            <div class="row text-center">
                <div class="col-md-4">
                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-map-marker"></i></a>
                    <p>Winterfell<br> South of the wall </p>

                </div>

                <div class="col-md-4">
                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-phone"></i></a>
                    <p>+ 01 234 567 89, <br> Mon - Fri, 8:00-22:00</p>
                </div>

                <div class="col-md-4">
                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-envelope"></i></a>
                    <p>eastmealz@gmail.com <br> sale@gmail.com</p>
                </div>
            </div>

        </div>
       <!--Grid column-->

    </div>

</section>
<!-- Contact -->


@endsection
>>>>>>> 3ac4c5ea334ca08bb4a668b148a9e1dfa67ed556
