
/* --------------------------- +/
$(document).ready(function(e) {
	alert('ready');    
});


$(document).scroll(function() {

  var y = $(this).scrollTop();
  
  if (y > 500) {
    $('#playerContainer').addClass('fixedPosition');
  } else {
    $('#playerContainer').removeClass('fixedPosition');
  }

});

/+ --------------------------- */

