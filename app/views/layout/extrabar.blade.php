<!-- Extra Bar -->
<div id="extrabar" class="alt-p hidden-xs">

    <div class="container">
      <div class="row">
        <div class="pull-right">
          <a href="#navbar" class="btn btn-success btn-lg learn-more animated slideInRight">Learn More</a>
        </div>        
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Logo -->
          <div class="logo">
            <h1 class="text-center animated bounceInDown">
              Welcome to Them.io <i class="fa fa-comments-o"></i>
            </h1>
            <h2 class="text-center animated lightSpeedIn">The simple way to engage your visitors </h2>
          </div> <!-- / .logo -->
        </div>
      </div>

      <div class="row">
        <div class="col-md-7">

          <div class="sign-form animated bounceInLeft extra-main">
            <div class="ribbon-wrapper">
                <div class="ribbon success">
                    FREE
                </div>
            </div>
            <h3 class="first-child text-left">Get Started In Seconds. For Free!</h3>
            <p>Use the tabs below to create polls, quizzes, ratings, votes and more!
            Easily create engaging content for your website or blog visitors. </p>
            <form role="form">
              <ul class="nav nav-tabs">
              <li class="active"><a href="#polls" data-toggle="tab">POLLS</a></li>
              <li><a href="#quizzes" data-toggle="tab">QUIZZES</a></li>
              <li><a href="#ratings" data-toggle="tab">RATINGS</a></li>
              <li><a href="#votes" data-toggle="tab">VOTES</a></li>
              <li><a href="#shares" data-toggle="tab">SHARES</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="polls">
                  @include('editors.poll')
                </div>
                <div class="tab-pane" id="quizzes">
                  @include('editors.quiz')
                </div>
                <div class="tab-pane" id="ratings">
                 @include('editors.rating')
                </div>
                <div class="tab-pane" id="votes">
                 @include('editors.vote')
                </div>
                <div class="tab-pane" id="shares">
                 @include('editors.share')
                </div>
              </div>
           </form>
          </div>

        </div>
        <div class="col-md-5">
            <div class="sign-form animated bounceInRight extra-right">
              <h3 class="first-child text-center">Sign Up / or <a>Login</a></h3>
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
                <p>Already registered? <a href="sign-up.html">Login</a></p>
              </form>
            </div>

        </div>
      </div>

    </div>
  
</div>
