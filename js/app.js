var app = angular.module('myApp', ['ngRoute']);

app.config(function($routeProvider){

  $routeProvider

  .when('/',{templateUrl: 'partials/home.html', controller: 'RoomsCtrl'})

  .when('/devices/:id' , {templateUrl: 'partials/devices.html', controller: 'DevicesCtrl'})



  .otherwise({redirectTo : '/'});

});
