$( function() {
  $('#slider').cbpFWSlider();


  // Sticky nav
  var $nav = $('.nav-wrapper nav'),
  		$navWrapper = $('.nav-wrapper'),
  		$navItems = $nav.find('a'),
  		$navHeight = $nav.outerHeight() + 1,
  		navOffset = $navWrapper.offset().top;
    	
	    // Anchors corresponding to menu items
	    scrollItems = $navItems.map(function(){
	      var item = $($(this).attr("href"));
	      if (item.length) { return item; }
	    });

  $(window).on('scroll', function () {

  	var scrollPos = $(this).scrollTop();

  	sticky(scrollPos);
  	highlightMenuItem(scrollPos);

  });




  function highlightMenuItem (scrollPos) {
		// Get id of current scroll item
		var cur = scrollItems.map(function(){
		 if ($(this).offset().top < (scrollPos + $navHeight))
		   return this;
		});

   	// Get the id of the current element
   	cur = cur[cur.length-1];
   	var id = cur && cur.length ? cur[0].id : "";
   	// Set/remove active class
   	$navItems.removeClass('active');
   	$navItems.blur();
    $navItems.filter('[href=#' + id + ']').addClass('active');
  }

  function sticky (scrollPos) {
  	if (scrollPos >= navOffset) {
  		$nav.addClass('stick-sticky-stuck');
  	} else {
  		$nav.removeClass('stick-sticky-stuck');
  	}
  }


  // Resize window
  $(window).on('resize', function () {
  	navOffset = $navWrapper.offset().top;
  	sticky();
  });




  // Smooth scroll
	$('nav a').on('click', function(e) {
	  e.preventDefault();

	  var thisTarget = $(this).attr('href'),
	  		targetOffset = $(thisTarget).offset().top;

	  $('body').animate({
	    scrollTop: targetOffset - 60
	  }, 400);
	});
} );


