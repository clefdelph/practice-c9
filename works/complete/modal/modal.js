$(function(){
  $('.modal-open').click(function(){
  $('.modal-container,.modal-back').fadeIn();  
  });


 $('.modal-open').hover(function(){
  $('.hover').fadeIn()
  },function(){
  $('.hover').fadeOut()
  });
  
 /* $('.modal-open').hover(function(){
  $('.hover').addClass('hover-active')
  },function(){
  $('.hover').removeClass('hover-active')
  });*/
  
  $('.close-modal').click(function(){
  $('.modal-container,.modal-back').fadeOut();  
  });
});
