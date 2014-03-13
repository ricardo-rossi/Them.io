<!doctype html>
<html lang="en" id="ng-app" ng-app ng-controller="Ctrl" xmlns:ng="http://angularjs.org">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">  
	<title ng-bind="poll.title"></title>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.12/angular.min.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

{{ Form::open() }}
<h3>@{{ poll.title }}</h3>
@{{ poll.description }}
<ul>
	<li ng-repeat="option in poll.options">
		<input name="response" type="radio" value="@{{option.id}}">@{{ option.text }}
	</li>
</ul>
<button type="submit">Submit</button>
{{ Form::close() }}

<script type="text/javascript">

  function Ctrl($scope, $http) {
  	
      $scope.hello = "Hello World";
      $scope.poll = {{ $poll }};
  }

  window.onload = function() {
    if (parent) {
        var oHead = document.getElementsByTagName("head")[0];
        var arrStyleSheets = parent.document.getElementsByTagName("style");
        for (var i = 0; i < arrStyleSheets.length; i++)
            oHead.appendChild(arrStyleSheets[i].cloneNode(true));
    }
  }

</script>

</script>
</body>
</html>
