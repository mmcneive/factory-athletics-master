$menuBtn = $('.toggle-nav');
$menuBtnH = $menuBtn.outerHeight();
$stopScroll = 0;
$scrolled = 0;
$logo = $('header .logo');
$logoH = $logo.outerHeight();
$singleEvent = false;
$bftv = false;
$btnFormula = '';
$logoFormula = '';
$logoMarginTop = '';
$slow = 300;
$fast = 150;
$hasSecNav = false;
if($('nav#secondary').length > 0){
	$hasSecNav = true;
	$secNav = $('nav#secondary');
	$secNavH = $secNav.outerHeight();
}


$(document).ready(function() {
	$('html').attr('style','margin-top:0!important');
	if($('body').hasClass('page-template-single-event-php') || $('body').hasClass('single-event')){
		$singleEvent = true;
	}

	if($('body').hasClass('page-template-page-video-php')){
		$bftv = true;
	}

	// Smooth scrolling anchors
	$('a[href*=#]:not([href=#],.no-scroll)').click(function() {
	    if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 500);
	        return false;
	      }
	    }
  	});

  	// Waypoints
  	$.waypoints.settings.scrollThrottle = 20;
	$('body').delegate('section', 'waypoint.reached', function(event, direction) {
		var $active = $(this);

		if (direction === "up") {
			$active = $active.prev();
		}

		if (!$active.length) $active = $active.end();

		$('.s-active').removeClass('s-active');
		$active.addClass('s-active').addClass('init');
		event.stopPropagation();

	});

	$('section').not('#hero').waypoint({ offset: '50%' });
	
	// Toggle Navigation
	$('.toggle-nav').click(function() {
        if ($('#site-wrapper').hasClass('show-nav')) {
        	closeNav();
        	if($('body').hasClass('home')){
	        	 playVideo();
	        }
		} else {
       		$('#site-wrapper').addClass('show-nav');
        	if($('body').hasClass('home')){
       			pauseVideo();
	   		}
		}
   		$stopScroll = parseInt($(window).scrollTop());
    });
    
    // Show sub menus
    $('#primary .menu-item-has-children a').click(function(e){
		$(this).parent().addClass('selected');
		if($(this).parent().parent().attr('id') === 'primary'){ // if this is the 2nd level
			$('#site-menu').addClass('open-sub');
			setTimeout(function(){
				$('#site-menu').addClass('opened');
			},100);
			e.preventDefault(); 
		} else if($(this).parent().find('.sub-menu').length == 1){ // if this is the 3rd level
			$('#site-menu').addClass('open-sub-sub');
			e.preventDefault(); 
		}
    });
  
    
	$(document).on('click','.opened', function(e){
	    var $this = $(this);
	    if (e.pageX - $this.offset().left < $this.width() / 5) {
	       $('#site-menu #back-btn').click();
	    }
	}); 
    
    $(document).on('click','.open-sub a', function(e){
	    if (e.pageX < $('#site-menu').width() / 5) {
	       e.preventDefault();
	    }
    });
    
    // go back if sub menu is open
    $('#site-menu #back-btn').click(function(e){
	    if($('#site-menu').hasClass('open-sub-sub')){
		    $('#site-menu.open-sub-sub').removeClass('open-sub-sub');
		    $('#primary .sub-menu .selected').removeClass('selected');
	    } else{
		    $('#site-menu.open-sub').removeClass('open-sub');
		    $('#primary  .selected').removeClass('selected');
			setTimeout(function(){
				$('#site-menu').removeClass('opened');
			},100);
	    }
		e.preventDefault();
    });


	// snap stuff for svg animation
	var speed = 150,
		easing = mina.easeinout;

	[].slice.call($('.slanted')).forEach( function(el){
		var s = Snap( el.querySelector('svg.animated')), path = s.select('path'),
			pathConfig = {
				from : path.attr('d'),
				to : path.attr('data-path-hover')
			};

		el.addEventListener('mouseenter', function() {
			path.animate({'path' : pathConfig.to}, speed, easing);
		});

		el.addEventListener('mouseleave', function() {
			path.animate({'path' : pathConfig.from}, speed, easing);
		});
	});
});

function closeNav(){
	$('#site-menu.open-sub').removeClass('open-sub');
	$('#primary .selected').removeClass('selected');
	setTimeout(function(){
		$('#site-wrapper').removeClass('show-nav'); 	
	}, $slow);
}

function globalScroll($scroll, $winH, $winW){   
	// set formulas for conditionals
	if($singleEvent){
		// specific formuals for single event template since menu button is at different position
		$logoFormula = 400 - $menuBtnH - $logoH;
		$btnFormula = 350 - $menuBtnH + $logoH - 80;
		$logoMarginTop = ($winH/2 - $menuBtnH - 60) *-1; 
	} else{
		// formulas for everything else
		$logoFormula = $winH/2 - $menuBtnH - $logoH;
		$btnFormula = $winH/2 - $menuBtnH + $logoH - 90;
		$logoMarginTop = $menuBtnH*-1 - 100 - 20;
	}
	
	if($bftv){
		// pass the header along
		if($scroll > $winW/4 - 90){
			$('header').addClass('passed');	
		} else{
			$('header').removeClass('passed');			
		}	
		// stick the menu button
		if($scroll > $winW/4 +20){
			$menuBtn.addClass('stuck');	
		} else{
			$menuBtn.removeClass('stuck');			
		}
				
	} else{
		// pass the logo along
		if($scroll > $logoFormula){
			$logo.addClass('passed').css('margin-top',$logoMarginTop);	
		} else{
			$logo.removeClass('passed').attr('style','');			
		}		
		// stick the menu button
		if($scroll > $btnFormula){
			$menuBtn.addClass('stuck');	
		} else{
			$menuBtn.removeClass('stuck');			
		}
	}

	// adjust the subnav, scroll the burger
	if($hasSecNav){
		if($scrolled > $winH - $secNavH - 90){
			$secNav.addClass('squeeze');
		} else{
			$secNav.removeClass('squeeze');
		}
	}	

	// make the subnav sticky
	if($hasSecNav){	
		if($scrolled > $winH - $secNavH){
			$secNav.addClass('stuck');
			$menuBtn.addClass('joined');
		} else{
			$secNav.removeClass('stuck');
			$menuBtn.removeClass('joined');
		}
	}

	
	if($scroll > $stopScroll + 50 || $scroll < $stopScroll - 50){
		closeNav();
	}
	
}


$(window)
.scroll(function(){
	$scrolled = $(window).scrollTop();
	$winH = $(window).height();
	$winW = $(window).width();
	globalScroll($scrolled, $winH, $winW);
})
.on('resize load', function(){
	$scrolled = $(window).scrollTop();
	$winH = $(window).height();
	$winW = $(window).width();
	globalScroll($scrolled, $winH, $winW);
});
