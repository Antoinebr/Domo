app.controller('MoodsCtrl', function($scope, Moods){

  $scope.moods = Moods.getMoods();

  //$scope.things = JSON.parse(JSON.stringify(posts));

});
