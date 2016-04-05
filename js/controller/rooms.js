app.controller('RoomsCtrl', function($scope, Rooms){

  $scope.rooms = Rooms.getRooms();

  //$scope.things = JSON.parse(JSON.stringify(posts));

});
