@extends('layout.plain')

@section('title')
	Them.io - Sign Up
@stop

@section('content')

<div id="login" class="alt-p">

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Logo -->
          <div class="logo">
            <h1 class="text-center animated bounceInDown">
              <a href="/">Them.io <i class="fa fa-comments-o"></i></a>
            </h1>
          </div> <!-- / .logo -->
        </div>
      </div>

      <div class="row">

        <div class="col-md-6 col-md-offset-3">
            <div class="sign-form animated bounceInRight extra-right">
              <h3 class="first-child text-center">Sign Up Form</h3>
              <form role="form">
                <div class="form-group">
                  <input type="text" class="form-control" id="name" placeholder="Your name" data-toggle="popover" data-placement="left" data-trigger="focus" data-content="Enter your full name here." data-original-title="Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="username" placeholder="Username" data-toggle="popover" data-placement="left" data-trigger="focus" data-content="Enter your nickname here." data-original-title="Username">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="email" placeholder="Enter email" data-toggle="popover" data-placement="left" data-trigger="focus" data-content="Enter a valid email here." data-original-title="Email">
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-6">
                      <input type="password" class="form-control margin-bottom-xs" id="password" placeholder="Password" data-toggle="popover" data-placement="left" data-trigger="focus" data-content="Three symbols minimum." data-original-title="Password">
                    </div>
                    <div class="col-sm-6">
                      <input type="password" class="form-control" id="repeat-password" placeholder="Repeat Password" data-toggle="popover" data-trigger="focus" data-content="Make sure you still remember it." data-original-title="Repeat Password">
                    </div>
                  </div>
                </div>
                <p style="font-size:12px;">
                    By creating an account you are agreeing to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                </p>
                <p><button type="submit" class="btn btn-danger">Create Account</button></p>
                <p>Already registered? <a href="/login">Login</a></p>
              </form>
            </div>

        </div>
      </div>

    </div>
  
</div>


@stop


