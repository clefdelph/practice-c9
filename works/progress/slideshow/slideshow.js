(function() {
  'use strict';

  var files = [
    'Sample 1.png',
    'Sample 2.png',
    'Sample 3.png',
    'Sample 4.png'
  ];

  var currentNum = 0;
  var prev = document.getElementById('prev');
  var next = document.getElementById('next');
  var target = document.getElementById('target');

  prev.addEventListener('click', function() {
    currentNum--;
    if (currentNum < 0) {
      currentNum = files.length - 1;
    }
    //console.log(files[currentNum]);
    target.src　=　files[currentNum];
  });

  next.addEventListener('click', function() {
    currentNum++;
    if (currentNum > files.length - 1) {
      currentNum = 0;
    }
    target.src　=　files[currentNum];
    //console.log(files[currentNum]);
  });

})();