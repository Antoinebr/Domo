app.factory('Moods', function (){

  var Moods = {
    'moods' : [
      {
        "name" : 'Zen salon',
        "icon" : "img/glass.svg",
        "devices": [
          {
            "name" : "Fenêtre",
            "type" : "light",
            "value" : 12000,
            "brightness" : 1,
            "id" : 3
          },
          {
            "name" : "Porte",
            "type" : "light",
            "value" : 12000,
            "brightness" : 1,
            "id" : 2
          }
        ]
      }
    ],

    getMoods :  function(){
      return this.moods;
    }

  };

  return Moods;


});
