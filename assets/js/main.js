$(function() {

	var menu = false;

	$('.menu').click(function() {
		var left = $('header nav.bottom .left');
		var right = $('header nav.bottom .right');
		if(menu === false) {
			$('nav.bottom').slideDown();
			left.fadeIn(1050);
			right.fadeIn(1050);
			menu = true;
		} else {
			$('nav.bottom').slideUp();
			menu = false;
			left.hide();
			right.hide();
		}
	});

});

function formError(txt) {
  $(".page .error").text(txt);
  // $(".page .error").fadeIn('slow');
}

function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
} 

function validatePhone(phone) {
  var re = /^\(?\d{3}\)?[- ]?\d{3}[- ]?\d{4}$/;
  return re.test(phone);
}

function lof(data) {
	return console.log(data);
}
