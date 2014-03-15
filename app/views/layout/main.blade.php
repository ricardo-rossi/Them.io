<!DOCTYPE html>
<html lang="en" id="ng-app" ng-app="app" ng-controller="MainCtrl" xmlns:ng="http://angularjs.org">
  <head>
    @include('layout.head')
    @yield('head')
  </head>

  <body class="body-blue">

    @yield('extrabar')
    @include('layout.navbar')

    <!-- Wrapper -->
    <div class="wrapper">
    
      <!-- Topic Header -->
      <div class="topic">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <h3 class="primary-font">Page Title</h3>
            </div>
            <div class="col-sm-8">
              <ol class="breadcrumb pull-right hidden-xs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Page Title</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <!-- Main Content -->
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <h2 class="headline first-child text-color">
              <span class="border-color">Headline #1</span>
            </h2>
            <h3 class="first-child primary-font">Block Title</h3>
            <p>Use this dummy page to create a new page for your website.</p>
            <h3 class="primary-font">Block Title</h3>
            <p>
              Vivamus at tincidunt risus. Etiam nisl velit, commodo et dolor id, volutpat gravida mi. Quisque ligula velit, convallis ac vehicula non, malesuada vel orci. Integer egestas ac eros ut aliquam. Nullam lobortis diam quis ante fringilla, ut consectetur elit mollis. Nullam laoreet magna sit amet orci semper ultrices. Nam a porta nisl. Ut imperdiet a magna sit amet congue. Curabitur quis egestas dui, sit amet consequat lorem. Aenean id accumsan lacus. Aenean vehicula, est vitae suscipit suscipit, lectus elit eleifend ligula, et rutrum odio odio id augue. Phasellus nec eros sodales, congue risus convallis, auctor enim. Donec mollis nibh vitae purus luctus, in scelerisque libero faucibus.
            </p>
            <a class="btn btn-lg btn-color" href="#">Button Large</a>
          </div>
          <div class="col-sm-4">
            <h2 class="headline first-child first-child-m text-color">
              <span class="border-color">Headline #2</span>
            </h2>
          </div>
        </div>  <!-- / .row -->
      </div> <!-- / .container -->

    </div> <!-- / .wrapper -->


    @include('layout.footer')

    {{-- @include('layout.toggle-style') --}}

    @include('layout.scripts')

    @yield('scripts')

</body>
</html>