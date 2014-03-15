
var app = angular.module('app', ['ngRoute','ngSanitize'])
	.run(['$http', '$rootScope', '$location', 
		function($http, $rootScope, $location) {


    $rootScope.isTouch = Modernizr.touch;

    $rootScope.UUID = function() {
      var d = new Date().getTime();
      var uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
          var r = (d + Math.random()*16)%16 | 0;
          d = Math.floor(d/16);
          return (c=='x' ? r : (r&0x7|0x8)).toString(16);
      });
      return uuid;
    };

    $rootScope.getID = function(length) {
        length = typeof length !== 'undefined' ? length : 14;
        var chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        var result = '';
        for (var i = length; i > 0; --i) result += chars[Math.round(Math.random() * (chars.length - 1))];
        return result;
    }

}]);

function MainCtrl($scope, $timeout) {

  $scope.new_option = '';

	$scope.poll = 
    {
      "id": "poll_" + $scope.getID(),
      "title": "Untitled Poll",
      "description": "",
      "options": [
      	{"id": "optn_" + $scope.getID(), "text": "Option 1"},
      ]
    };	

    /**
     * [addOption description]
     * @param {[type]} new_option [description]
     */
    $scope.addOption = function(new_option) {

      var newOptionText = '';

      if(new_option != '') {

        newOptionText = new_option;
      
      } else {
              
        var optionNum = $scope.poll.options.length + 1;
        newOptionText = "Option " + optionNum;
      }

      var newOption = {
          "id": "_optn_" + $scope.getID(), 
          "text": newOptionText
      };

      $scope.poll.options.push(newOption);
      $scope.new_option = '';

      if(! $scope.isTouch) {

        if(new_option == '') {

          $timeout(function() {
            // document.getElementById(newOption.id).focus();
            document.getElementById(newOption.id).select();
          }, 30);

        } else {

          $timeout(function() {
            document.getElementById(newOption.id).focus();
          }, 30);        
        }

      }
    };


    /**
     * [removeOption description]
     * @param  {[type]} option [description]
     * @return {[type]}        [description]
     */
    $scope.removeOption = function(option) {

      var options = $scope.poll.options;   

      for (var i = 0; i < options.length; i++) {
        var _option = options[i];
        if(_option.id === option.id) {
          $('row_' + i).addClass( "bounce" );
          $scope.poll.options.splice(i, 1);        
        }
      };
    }

    $scope.moveUp = function(idx) {

      var tmp = $scope.poll.options[idx];
      $scope.poll.options[idx] = $scope.poll.options[idx - 1];
      $scope.poll.options[idx - 1] = tmp;
    }

    $scope.moveDown = function(idx) {

      var tmp = $scope.poll.options[idx];
      $scope.poll.options[idx] = $scope.poll.options[idx + 1];
      $scope.poll.options[idx + 1] = tmp;
    }

    $scope.handleDrop = function(from, to) {

      var tmp = $scope.poll.options[from];

      //console.log(tmp);
      $scope.poll.options.splice(from, 1);
      $scope.poll.options.splice(to, 0, tmp);

    }    

};


$(function() {
    FastClick.attach(document.body);
});

