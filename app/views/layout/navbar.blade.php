    <div id="navbar" class="navbar navbar-dark navbar-static-top" role="navigation">
      <div class="container">

        <!-- Navbar Header -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"> Them.io <i class="fa fa-comments-o"></i>
            &nbsp;&nbsp;<span class="hidden-sm"> get to know them</span>
          </a>
        </div> <!-- / Navbar Header -->

        <!-- Navbar Links -->
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="<?= Request::is('features*') ? 'active' : '' ?>">
              <a href="/features" class="bg-hover-color">FEATURES</a>
            </li>
            <li class="<?= Request::is('faq*') ? 'active' : '' ?>">
              <a href="/faq" class="bg-hover-color">FAQ</a>
            </li>
            <li class="<?= Request::is('docs*') ? 'active' : '' ?>">
              <a href="/docs" class="bg-hover-color">DOCS</a>
            </li>
            <li class="<?= Request::is('blog*') ? 'active' : '' ?>">
              <a href="/blog" class="bg-hover-color">BLOG</a>
            </li>
          @if(!Auth::check())            
            <li>
              <a href="/signup" class="bg-hover-color active">SIGN UP</a>
            </li>
            <li>
              <a href="/login" class="bg-hover-color">LOGIN</a>
            </li>
          @endif
          @if(Auth::check())
            <li class="dropdown">     
              <a href="#" class="dropdown-toggle bg-hover-color" data-toggle="dropdown">
              <img src="//www.gravatar.com/avatar/6cba523020d38ee3275849615ead69e2" 
              class="nav-gravatar" alt="rrossi">&nbsp;&nbsp;{{ Auth::user()->username }} <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/" class="bg-hover-color">Home</a></li>
                <li><a href="/settings" class="bg-hover-color">Settings</a></li>
                <li><a href="/logout" class="bg-hover-color">Log Out</a></li>
              </ul>
            </li>
          @endif
          </ul>
          <div class="ribbon-wrapper">
              <div class="ribbon success">
                  BETA
              </div>
          </div>

        </div> <!-- / Navbar Links -->
      </div> <!-- / container -->
    </div> <!-- / navbar -->