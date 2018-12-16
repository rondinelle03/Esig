$(document).ready(function(){
/*
	Códigos de invocação dos plugins.
*/
	
	$('.modal').modal();

	 $(".button-collapse").sideNav();

	 $('.parallax').parallax();

	  $(".dropdown-button").dropdown( 
	  	);

	 $('.principal-destaque').owlCarousel({
	    loop:true,
	    autoplay:true,
	    autoplayTimeout:4000,
    	autoplayHoverPause:true,
	    margin:0,
	    navText: ["",""],
	    nav:true,
	    items:1,
	    
	});

	 $('.bloco-noticias').owlCarousel({
	    loop:true,
	    margin:30,
	    nav:true,
	    navText: ["<i class='material-icons'>arrow_back</i>","<i class='material-icons'>arrow_forward</i>"],
	    dots:false,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:2
	        },
	        1000:{
	            items:4
	        }
	    }
	});


	  $('.bloco-depoimentos').owlCarousel({
	    loop:true,
	    margin:30,
	    nav:true,
	    navText: ["<i class='material-icons'>arrow_back</i>","<i class='material-icons'>arrow_forward</i>"],
	    dots:false,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:3
	        }
	    }
	});



});























