// scroll

$(function() {
  	$(window).scroll(function() {
  		if($(this).scrollTop() != 0) {
  			$('#totop').fadeIn();
  		} else {
  			$('#totop').fadeOut();
  		}
  	});
  		$('#totop').click(function() {
  		$('body,html').animate({scrollTop: 0},600);
 	});
});

// Обратный звонок 

function openForm2() {
    document.getElementById("myForm2").style.display = "block";
}

