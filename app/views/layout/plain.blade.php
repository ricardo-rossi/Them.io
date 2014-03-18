<!DOCTYPE html>
<html lang="en" id="ng-app" ng-app="app" ng-controller="MainCtrl" xmlns:ng="http://angularjs.org">
  <head>
    @include('layout.head')
    @yield('head')
  </head>

  <body class="body-blue">
    
    @yield('content')

    @include('layout.scripts')

    @yield('scripts')

</body>
</html>