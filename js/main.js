function mobileCheck(){
	var winWidth=$(window).width();
	if (winWidth<=768) {
		$("#sidebar").after($("#body .pagination:first"))
	} else {
		$(".products-wrap").before($("#body .pagination:first"))
	}
}

$(document).ready(function() {
	$("input[type=checkbox]").crfi();
	$("select").crfs();
	$("#slider ul").bxSlider({
		controls: false,
		auto: true,
		mode: 'fade',
		preventDefaultSwipeX: false
	});
	$(".last-products .products").bxSlider({
		pager: false,
		minSlides: 1,
		maxSlides: 5,
		slideWidth: 235,
		slideMargin: 0
	});
	$(".tabs .nav a").click(function() {
		var container = $(this).parentsUntil(".tabs").parent();
		if (!$(this).parent().hasClass("active")) {
			container.find(".nav .active").removeClass("active")
			$(this).parent().addClass("active")
			container.find(".tab-content").hide()
			$($(this).attr("href")).show();
		};
		return false;
	});
	$("#price-range").slider({
		range: true,
		min: 0,
		max: 5000,
		values: [ 500, 3500 ],
		slide: function( event, ui ) {
			$(".ui-slider-handle:first").html("<span>$" + ui.values[ 0 ] + "</span>");
			$(".ui-slider-handle:last").html("<span>$" + ui.values[ 1 ] + "</span>");
		}
	});
	$(".ui-slider-handle:first").html("<span>$" + $( "#price-range" ).slider( "values", 0 ) + "</span>");
	$(".ui-slider-handle:last").html("<span>$" + $( "#price-range" ).slider( "values", 1 ) + "</span>");
	$("#menu .trigger").click(function() {
		$(this).toggleClass("active").next().toggleClass("active")
	});

	mobileCheck();
	$(window).resize(function() {
		mobileCheck();
	});
});

document.querySelector('.img__btn').addEventListener('click', function() {
	document.querySelector('.cont').classList.toggle('s--signup');
  });

  const submitBtn = document.getElementById('submit-btn');
  const submitBtnSignup = document.getElementById('submit-btn-signup');

const validate = (e) => {
  e.preventDefault();
  const username = document.getElementById('username');
  const emailAddress = document.getElementById('email-address');
  const password = document.getElementById('password');
  if (username.value === "") {
    alert("Please enter your username.");
    username.focus();
    return false;
  }
    
  if (emailAddress.value === "") {
    alert("Please enter your email address.");
    emailAddress.focus();
    return false;
  }

  if (!emailIsValid(emailAddress.value)) {
    alert("Please enter a valid email address.");
    emailAddress.focus();
    return false;
  }

  if (password.value === "") {
    alert("Please enter a password!");
    password.focus();
    return false;
  }

  if (password.value.length < 8) {
    alert("You password should have more than 8 characters!");
    password.focus();
    return false;
  }
  
  

  alert("Login was successfull!")
  return true; // Can submit the form data to the server
}

const validateSignup = (e) => {
	e.preventDefault();
	const username = document.getElementById('username-signup');
	const emailAddress = document.getElementById('email-address-signup');
	const password = document.getElementById('password-signup');
	if (username.value === "") {
	  alert("Please enter your username.");
	  username.focus();
	  return false;
	}
	  
	if (emailAddress.value === "") {
	  alert("Please enter your email address.");
	  emailAddress.focus();
	  return false;
	}
  
	if (!emailIsValid(emailAddress.value)) {
	  alert("Please enter a valid email address.");
	  emailAddress.focus();
	  return false;
	}
  
	if (password.value === "") {
	  alert("Please enter a password!");
	  password.focus();
	  return false;
	}
  
	if (password.value.length < 8) {
	  alert("You password should have more than 8 characters!");
	  password.focus();
	  return false;
	}
	
	
  
	alert("Your sign up is successfull!")
	return true; // Can submit the form data to the server
  }

const emailIsValid = email => {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

submitBtn.addEventListener('click', validate);
submitBtnSignup.addEventListener('click', validateSignup);