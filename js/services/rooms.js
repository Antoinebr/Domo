app.factory('Rooms', function ($http){

  var Rooms = {
    'rooms' : [
      {
        "name" : 'salon',
        "icon" : "img/couch.svg",
        "devices": [
          {
            "name" : "fenêtre",
            "type" : "light",
            "icon" : "img/light-window.svg",
            "id" : 3
          },
          {
            "name" : "porte",
            "type" : "light",
            "icon" : "img/light-porte.svg",
            "id" : 2
          },
          {
            "name" : "wemo salon",
            "type" : "plug",
            "icon" : "img/plug.svg",
            "id" : "192.168.0.20"
          },
        ]
      },

      {
        "name" : 'dorm',
        "icon" : "img/bed.svg",
        "devices":[
          {
            "name" : "plafond",
            "type" : "light",
            "icon" : "img/light-porte.svg",
            "id" : 1
          }
        ]

      }
    ],
    wemoState : null,
    init : function(){
      this.getWemoState();
    },
    getRooms :  function(){
      return this.rooms;
    },
    getDevices : function(id){
      return this.rooms[id].devices;
    }

  };


  return Rooms;


});
