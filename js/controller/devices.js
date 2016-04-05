app.controller('DevicesCtrl', function ($scope, Rooms, $routeParams) {
  console.log($routeParams.id);


  // $scope.room = Things.getDevices(id);
  $scope.devices =  Rooms.getDevices($routeParams.id);

});
