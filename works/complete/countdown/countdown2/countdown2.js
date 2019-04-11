(function() {
  'use strict';
  
  var start = document.getElementById('start');
  var msg = document.getElementById('msg');
  
  start.onclick =function(){
   msg.textContent = 'countdown started!';      
   console.log('countdown started!');
  };
})