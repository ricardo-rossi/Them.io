<!DOCTYPE html>
<html lang="en" @yield('angular')>
  <head>
    @include('layout.head')
    @yield('head')
  </head>

  <body class="body-blue" @yield('body')>

    @yield('extrabar')
    @include('layout.navbar')

    <!-- Wrapper -->
    <div class="wrapper">      

      <!-- Main Content -->
      <div class="container animated fadeIn">
        @yield('content')
      </div> <!-- / .container -->

    </div> <!-- / .wrapper -->


    @include('layout.footer')

    {{-- @include('layout.toggle-style') --}}

    @include('layout.scripts')

    @yield('scripts')

</body>
</html>