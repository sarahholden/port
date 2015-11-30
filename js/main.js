$( function() {

  // Sticky nav
  var $nav = $('.nav-wrapper nav'),
  		$aboutSection = $('#about'),
  		$navItems = $nav.find('a'),
  		$navHeight = $nav.outerHeight() + 1,
  		aboutOffset = $aboutSection.offset().top;
    	
  // // Anchors corresponding to menu items
  // scrollItems = $navItems.map(function(){
  //   var item = $($(this).attr("href"));
  //   if (item.length) { return item; }
  // });
  var scrollPos = $(window).scrollTop();

  sticky(scrollPos);

  $(window).on('scroll', function () {

  	scrollPos = $(this).scrollTop();

  	sticky(scrollPos);
  	// highlightMenuItem(scrollPos);

  });

  function sticky (scrollPos) {
    if (scrollPos >= (aboutOffset - $navHeight)) {
      $nav.attr('class', 'stick-sticky-stuck');
    } else if (scrollPos >= ($navHeight + 50)) {
      $nav.attr('class', 'almost-stuck');
    } else {
      $nav.attr('class', '');
    }
  }

  // Resize window
  $(window).on('resize', function () {
  	aboutOffset = $aboutSection.offset().top;
  	sticky(scrollPos);
  });

  $('#menu-toggle').on('click', function (e) {
    e.preventDefault();
    $('nav').toggleClass('open');
  });

  // Smooth scroll
	$('nav li a').on('click', function(e) {
	  e.preventDefault();

	  var thisTarget = $(this).attr('href'),
	  		targetOffset = $(thisTarget).offset().top;

	  $('body').animate({
	    scrollTop: targetOffset - 60
	  }, 400);
	});




  // function highlightMenuItem (scrollPos) {
    // // Get id of current scroll item
    // var cur = scrollItems.map(function(){
    //  if ($(this).offset().top < (scrollPos + $navHeight))
    //    return this;
    // });

  //    // Get the id of the current element
  //    cur = cur[cur.length-1];
  //    var id = cur && cur.length ? cur[0].id : "";
  //    // Set/remove active class
  //    $navItems.removeClass('active');
  //    $navItems.blur();
  //   $navItems.filter('[href=#' + id + ']').addClass('active');
  // }



});


