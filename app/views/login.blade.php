@extends('layout.plain')

@section('title')
	Them.io - Login
@stop

@section('content')

<div id="login" class="alt-p">

  <div class="container">
    <div class="row">

      <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

        <!-- Logo -->
        <div class="logo">
          <h1 class="text-center animated bounceInDown">
            <a href="/">Them.io <i class="fa fa-comments-o"></i></a>
          </h1>
        </div> <!-- / .logo -->
          
        <div class="sign-form">
          {{ Form::open() }}

          <h3 class="first-child text-center">Login To Your Account</h3>
          <hr>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input name="email" type="email" class="form-control" id="email" placeholder="Enter email" data-original-title="" title="">
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" data-original-title="" title="">
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" checked> Remember me
              </label>
            </div>
            {{ Form::button('Log In', array('type'=>'submit', 'class'=>'btn btn-primary')) }}
            {{-- Form::hidden('backto', $backto) --}}
            {{ Form::close() }}
            @if (Session::has('message'))
                <br/><div class="alert alert-danger"><i class="fa fa-exclamation"></i>
                  {{ Session::get('message') }}
                </div>
            @endif
          <hr>
          <p>Not registered? <a href="/signup">Sign Up</a></p>
          <div class="pwd-lost">
            <div class="pwd-lost-q show">Lost your password? <a href="/recover">Click here to recover.</a></div>
            <div class="pwd-lost-f hidden">
              <p class="text-muted">Enter your email address and we will send you a link to reset your password.</p>
              <div class="form-group">
                <label class="sr-only" for="email-pwd">Email address</label>
                <input type="email" class="form-control" id="email-pwd" placeholder="Enter email">
              </div>
            </div>
          </div> <!-- / .pwd-lost -->
        </div>

      </div>

    </div> <!-- / .row -->
  </div> <!-- / .container -->

</div>

@stop


