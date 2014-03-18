@extends('layout.main')

@section('title')
	Them.io - Features
@stop

@section('content')

<!-- Topic Header -->
<div class="topic">
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3 class="primary-font">Our Blog</h3>
    </div>
    <div class="col-sm-8">
      <ol class="breadcrumb pull-right hidden-xs">
        <li><a href="/">Home</a></li>
        <li class="active">Blog</li>
      </ol>
    </div>
  </div>
</div>
</div>

  <div class="container">

    <div class="row blog-p">
      <div class="col-sm-9">

        <!-- Blog Post #1 -->
        <div class="blog-p-body">
          <h2 class="primary-font first-child"><a href="blog-post.html">Duis fermentum tortor at elit malesuada mollis.</a></h2>
          <hr>
          <p class="text-muted">by John Doe, January 30, 2014</p>
          <p>
            Nam ultrices, orci sit amet dignissim dignissim, tellus elit consequat dui, eu venenatis urna nisi non est. Aliquam egestas pulvinar ornare. Aenean et vulputate lacus. Ut eget purus ut ante imperdiet feugiat quis vel elit. Donec imperdiet enim quis risus porttitor congue. Vestibulum vel tristique urna. Pellentesque nulla leo, laoreet sed luctus eu, dapibus id lorem. Pellentesque eu tincidunt odio. Proin imperdiet bibendum mauris, ut bibendum odio mollis id.
          </p>
          <a href="blog-post.html" class="btn btn-lg btn-color">Read More...</a>
          <a href="blog-post.html"><img class="img-responsive" src="img/general-3.jpg" alt="..."></a>
        </div>

        <!-- Blog Post #2 -->
        <div class="blog-p-body">
          <h2 class="primary-font"><a href="blog-post.html">Aliquam placerat ligula nec augue sollicitudin porta.</a></h2>
          <hr>
          <p class="text-muted">by John Doe, February 03, 2014</p>
          <p>
            Nam ultrices, orci sit amet dignissim dignissim, tellus elit consequat dui, eu venenatis urna nisi non est. Aliquam egestas pulvinar ornare. Aenean et vulputate lacus. Ut eget purus ut ante imperdiet feugiat quis vel elit. Donec imperdiet enim quis risus porttitor congue. Vestibulum vel tristique urna. Pellentesque nulla leo, laoreet sed luctus eu, dapibus id lorem. Pellentesque eu tincidunt odio. Proin imperdiet bibendum mauris, ut bibendum odio mollis id.
          </p>
          <a href="blog-post.html" class="btn btn-lg btn-color">Read More...</a>
          <a href="blog-post.html"><img class="img-responsive" src="img/general-1.jpg" alt="..."></a>
        </div>

        <!-- Paggination -->
        <ul class="pagination pull-right">
          <li class="disabled"><a href="#">«</a></li>
          <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">»</a></li>
        </ul>
        <div class="clearfix"></div>

      </div>
      <div class="col-sm-3">
        <!-- Search Form -->
        <div class="blog-p-search">
          <form class="form" role="form">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search our blog">
              <span class="input-group-btn">
                <button class="btn btn-color" type="button">Go!</button>
              </span>
            </div>
          </form>
        </div>

        <!-- Social Links -->
        <h4 class="primary-font">
          Stay Tuned
        </h4>
        <ul class="blog-p-social">
          <li><a href="#"><i class="fa fa-rss"></i> RSS Feed</a></li>
          <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
          <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
        </ul>

        <!-- Most Popular -->
        <h4 class="primary-font">
          Most Popular
        </h4>
        <ul class="blog-p-popular">
          <li><a href="blog-post.html">Pellentesque consectetur lectus.</a></li>
          <li><a href="blog-post.html">Aliquam placerat ligula nec augue sollicitudin porta.</a></li>
          <li><a href="blog-post.html">Pellentesque vel sem quis augue ultricies.</a></li>
          <li><a href="blog-post.html">Proin in justo et risus dictum consectetur quis quis orci.</a></li>
        </ul>

      </div>
    </div> <!-- / .row -->

  </div> <!-- / .container -->

@stop


