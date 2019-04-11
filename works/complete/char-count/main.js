(function(){
    'use strict';
    var comment = document.getElementById('comment');
    var label = document.getElementById('label');
    
    var LIMIT = 140;
    var WARNING = 20;
    
    label.innerHTML =LIMIT;
    
    comment.addEventListener('keyup',function(){
        var remaining = LIMIT-this.value.length;
        label.innerHTML = remaining;
        
         // if (remaining < WARNING) {
    //   label.className = 'warning';
    // } else {
    //   label.className = '';
    // }
    label.className = remaining < WARNING ? 'warning' : '';
        
    });
})();