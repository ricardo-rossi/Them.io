@extends('layout.main')

@section('angular')
id="ng-app" ng-app="app" ng-controller="MainCtrl" xmlns:ng="http://angularjs.org"
@stop

@section('head')
	<link rel="stylesheet" href="/poll.css">
	<link rel="stylesheet" href="/css/editors.css">
@stop

@section('title')
	Them.io - Welcome!
@stop

@section('extrabar')
	@include('layout.extrabar')
@stop

@section('content')


	<div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <div id="video" class="flex-video">
          <iframe src="//player.vimeo.com/video/67449472" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
      </div>
    </div>

      <!-- Intro Text -->
      <div class="container intro">
        <div class="row">
          <div class="col-sm-10">
            <h2 class="text-color">Multiple colors, responsive video, stunning support and many more!</h2>
            <p class="text-muted">Buying this template now you become eligible to free download all of its future updates, including new pages and neat options. We hope you will enjoy using our template!</p>
          </div>
          <div class="col-sm-2">
            <a href="#" class="btn btn-color btn-lg">Buy Now!</a>
          </div>
        </div> <!-- / .row -->

        <hr>

        <!-- Our Services -->
        <div class="row services">
          <div class="col-sm-4">
            <!-- Service Item #1 -->
            <div class="services-item">
              <i class="fa fa-gear fa-2x text-color"></i>
              <div class="services-item-desc">
                <h3 class="primary-font">Built With Bootstrap 3</h3>
                <p class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <!-- Service Item #1 -->
            <div class="services-item">
              <i class="fa fa-arrows-alt fa-2x text-color"></i>
              <div class="services-item-desc">
                <h3 class="primary-font">Responsive Design</h3>
                <p class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <!-- Service Item #1 -->
            <div class="services-item">
              <i class="fa fa-refresh fa-2x text-color"></i>
              <div class="services-item-desc">
                <h3 class="primary-font">Easy to Customize</h3>
                <p class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.
                </p>
              </div>
            </div>
          </div>
        </div> <!-- / .row -->

        <!-- Portfolio -->
        <h2 class="headline text-color">
          <span class="border-color">Portfolio</span>
        </h2>
        <div class="row portfolio">
          <div class="col-sm-4">
            <!-- Portfolio Item #1 -->
            <div class="portfolio-item">
              <a href="portfolio-item.html">
                <img src="img/general-1.jpg" class="img-responsive" alt="...">
                <div class="mask">
                  by John Doe <span class="pull-right"><i class="fa fa-heart"></i> 12 <i class="fa fa-comments-o"></i> 24</span>
                </div>
              </a>
              <div class="portfolio-desc">
                <h3 class="primary-font">Yet Another Meeting</h3>
                <p class="text-muted">
                  Sed lacinia suscipit lacus non sodales. Pellentesque lacinia ornare justo eu tincidunt. Morbi ullamcorper sed ligula.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <!-- Portfolio Item #2 -->
            <div class="portfolio-item">
              <a href="portfolio-item.html">
                <img src="img/general-2.jpg" class="img-responsive" alt="...">
                <div class="mask">
                  by John Doe <span class="pull-right"><i class="fa fa-heart"></i> 12 <i class="fa fa-comments-o"></i> 24</span>
                </div>
              </a>
              <div class="portfolio-desc">
                <h3 class="primary-font">My Working Table</h3>
                <p class="text-muted">
                  Sed lacinia suscipit lacus non sodales. Pellentesque lacinia ornare justo eu tincidunt. Morbi ullamcorper sed ligula.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <!-- Portfolio Item #3 -->
            <div class="portfolio-item">
              <a href="portfolio-item.html">
                <img src="img/general-3.jpg" class="img-responsive" alt="...">
                <div class="mask">
                  by John Doe <span class="pull-right"><i class="fa fa-heart"></i> 12 <i class="fa fa-comments-o"></i> 24</span>
                </div>
              </a>
              <div class="portfolio-desc">
                <h3 class="primary-font">Having Lunch</h3>
                <p class="text-muted">
                  Sed lacinia suscipit lacus non sodales. Pellentesque lacinia ornare justo eu tincidunt. Morbi ullamcorper sed ligula.
                </p>
              </div>
            </div>
          </div>
        </div> <!-- / .row -->

        <!-- Features -->
        <h2 class="headline text-color">
          <span class="border-color">Main Features</span>
        </h2>
        <div class="row features">
          <div class="col-sm-6">
            <h3 class="primary-font first-child">Easy to adjust for your needs with multiple color combinations.</h3>
            <p class="text-muted">
              Nulla pretium libero interdum, tempus lorem non, rutrum diam. Quisque pellentesque diam sed pulvinar lobortis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
            </p>
          </div>
          <div class="col-sm-6">
            <img src="img/imac.png" class="img-responsive" alt="...">            
          </div>
        </div> <!-- / .row -->
        <div class="divider"></div>
        <div class="row features last">
          <div class="col-sm-6">
            <div class="border-bottom"><img src="img/browser-cut.png" class="img-responsive" alt="..."></div>
          </div>
          <div class="col-sm-6">
            <h3 class="primary-font">Fifteen unique templates to take your site up and running in no time.</h3>
            <p class="text-muted">
              Nulla pretium libero interdum, tempus lorem non, rutrum diam. Quisque pellentesque diam sed pulvinar lobortis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
            </p>
          </div>
        </div> <!-- / .row -->

        <!-- Blog Posts -->
        <h2 class="headline text-color">
          <span class="border-color">Read Our Blog</span>
        </h2>
        <div class="row recent-blogs">
          <div class="col-sm-6">
            <div class="recent-blog">
              <img src="img/photo-1.jpg" alt="...">
              <div class="recent-blog-desc">
                <h3 class="primary-font">
                  <a href="blog-post.html">Sed lacinia suscipit lacus non sodales. Pellentesque lacinia ornare justo eu tincidunt. </a>
                </h3>
                <hr>
                <p class="text-muted">by John Doe</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nisi lorem, elementum sed feugiat ac, pharetra lacinia mi. Integer iaculis risus sed quam vehicula, sit amet lacinia sem rutrum. Integer ligula orci.</p>
                <a class="btn btn-lg btn-color" href="blog-post.html">Read More...</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="recent-blog">
              <img src="img/photo-2.jpg" alt="...">
              <div class="recent-blog-desc">
                <h3 class="primary-font">
                  <a href="blog-post.html">Nulla pretium libero interdum, tempus lorem non, rutrum diam. Lorem ipsum dolor sit amet.</a>
                </h3>
                <hr>
                <p class="text-muted">by John Doe</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nisi lorem, elementum sed feugiat ac, pharetra lacinia mi. Integer iaculis risus sed quam vehicula, sit amet lacinia sem rutrum. Integer ligula orci.</p>
                <a class="btn btn-lg btn-color" href="blog-post.html">Read More...</a>
              </div>
            </div>
          </div>
        </div> <!-- / .row -->

      </div> <!-- / .container -->



@stop

@section('scripts')
	<script src="/poll.js"></script>
	<script src="/dnd.js"></script>
@stop

