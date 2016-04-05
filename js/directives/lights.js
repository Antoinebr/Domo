/**
*
* Permet d'ajouter un like
*
*/
app.directive('lightaction',function($http){
  return{
    restrict: "C",

    link: function(scope,element, attrs){

      element.click(function(e){
        e.preventDefault();

        var lightId = $(this).data('id');
        var action = $(this).data('action');
        console.log("crash");
        console.log(action);

        $http({
          url: "api/hue/index.php",
          method: "POST",
          data: {
            "light-id" : lightId,
            "light-action" : action
          }
        }).success(function(data, status, headers, config) {

          console.log(data);
        }).error(function(data, status, headers, config) {
          //$scope.status = status;
        });


      }); // click
    }
  };
});


app.directive('wemoaction',function($http){
  return{
    restrict: "C",

    link: function(scope,element, attrs){

      element.click(function(e){
        e.preventDefault();

        var action = $(this).data('action');
        console.log("crash");
        console.log(action);

        $http({
          url: "api/wemo/index.php",
          method: "POST",
          data: {
            "wemo-action" : action
          }
        }).success(function(data, status, headers, config) {

          console.log(data);
        }).error(function(data, status, headers, config) {
          //$scope.status = status;
        });


      }); // click
    }
  };
});


/**
*
*  MOODS
*
*/
app.directive('moodlight',function($http){
  return{
    restrict: "C",

    link: function(scope,element, attrs){

      element.click(function(e){
        e.preventDefault();

        var moodid = $(this).data('moodid');

        var mood = scope.moods[moodid].devices;


        mood.forEach(function(entry) {
          // console.log(entry.id);
          // console.log(entry.value);

          $http({
            url: "api/hue/index.php",
            method: "POST",
            data: {
              "light-mood" : true,
              "light-id" : entry.id,
              "light-value" : entry.value,
              "light-brightness" : entry.brightness
            }
          }).success(function(data, status, headers, config) {

            console.log(data);
          }).error(function(data, status, headers, config) {
            //$scope.status = status;
          });

        });

        console.log("crash");





      }); // click
    }
  };
});
