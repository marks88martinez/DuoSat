$(document).ready(function() {
	$('#fullpage').fullpage({
		anchors: ['firstPage', 'secondPage', 'thirdPage', 'fourthPage', 'fifthPage', 'sixth', 'eighth','neventh', 'diesth','ONCEth', 'doceth', 'treceth','14th','15th','16th', '17th','18th'],
		sectionsColor: ['#D8D8D8', '#000000', '#000000', '#2082ec', '#666666','#155477', '#000000', '#D8D8D8', '#000000','#D8D8D8','#d72702','#000000','#48474e','#9dc6d8','#000000','#2b2b2d', '#9dc6d8'],
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