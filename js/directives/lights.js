/**
*
* Permet d'ajouter un like
*
*/
app.directive('lightaction',function($http){
  return{
    restrict: "E",
    controller : function(){

      this.state = "off";

      this.togglePower = function(id){

        this.state = ('on' === this.state) ?  'off' : "on";
        console.log("state to hue "+this.state);
        this.sendToHue(id,this.state);
      };


      this.sendToHue = function(id,state){

        $http({
          url: "api/hue/index.php",
          method: "POST",
          data: {
            "light-id" : id,
            "light-action" : state,
          }
        }).success(function(data, status, headers, config) {

          console.log(data);
        }).error(function(data, status, headers, config) {
          //$scope.status = status;
        });

      };



    },
    controllerAs : 'lightCtrl',

  };
});


app.directive('wemo',function($http,Rooms){
  return{
    restrict: "E",
    controller : function(){


      this.togglePower = function(){

        this.toggleWemo();
      };


      this.toggleWemo = function(state){

        $http({
          url: "api/wemo/index.php",
          method: "POST",
          data: {
            "wemo-action" : 'action'
          }
        }).success(function(data, status, headers, config) {

          console.log(data);
        }).error(function(data, status, headers, config) {
          //$scope.status = status;
        });
      };

    },
    controllerAs : 'wemoCtrl',
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




/**
*
*  Brighnes
*
*/
app.directive('brightness',function($http){
  return{
    restrict: "C",
    controller: function($scope){

      this.BrightValue = 0;
      console.log(this.BrightValue);



      this.setBrightness = function(bgtn){
        this.brightness = bgtn;


        var that = this;
        setTimeout(function(){
          that.updateBrighness(that.brightness);
        },800);

      };


      this.updateBrighness = function(value){

        $http({
          url: "api/hue/index.php",
          method: "POST",
          data: {
            "light-mood" : true,
            "light-id" : $scope.device.id,
            "light-value" : 12000,
            "light-brightness" : value
          }
        }).success(function(data, status, headers, config) {

          console.log(data);
        }).error(function(data, status, headers, config) {
          //$scope.status = status;
        });


      };




    },
    controllerAs : 'brightnessCtrl'


  };
});
