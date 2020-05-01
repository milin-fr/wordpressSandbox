var app = {
    init: function() {
        console.log("init")
        var Storm = function(){};
        Storm.prototype.precip = 'rain';
        var WinterStorm = function(){};
        WinterStorm.prototype = new Storm();
        WinterStorm.prototype.precip = 'snow';
        var bob = new WinterStorm();
        console.log(bob.precip);
    }
  };
  
  document.addEventListener('DOMContentLoaded', app.init);