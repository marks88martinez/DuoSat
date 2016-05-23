$(document).ready(function() {
	$('#fullpage').fullpage({
		anchors: ['firstPage', 'secondPage', 'thirdPage', 'fourthPage', 'fifthPage', 'sixth', 'seventh','neventh', 'diesth','oncesth'],
		sectionsColor: ['#000000', '#000000', '#000000', '#d8d8d8', '#2b2b2e', '#d8d8d8','#d72702','#48474e', '#2b2b2e', '#9dc6d8'],
		navigation: true,
		navigationPosition: 'right',
		navigationTooltips: [],
		responsive:900,
	  	continuousVertical: false,
		scrollOverflow: false
	});







	$('.fancybox').fancybox();
	$('.fancybox-thumbs').fancybox({
		prevEffect : 'none',
		nextEffect : 'none',

		closeBtn  : false,
		arrows    : false,
		nextClick : true,

		helpers : {
			thumbs : {
				width  : 50,
				height : 50
			}
		}
	});

	  $("#owl-demo").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 3,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3],
      pagination: false,
      navigation: false,
      paginationSpeed: 200,
      rewindSpeed: 300
 
  });

});


// Wow js activation
 new WOW().init();