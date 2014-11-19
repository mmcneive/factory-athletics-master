$burger = $('.toggle-nav');

//$secNav = $('nav#secondary');
//$secNavH = $secNav.outerHeight();
$eventsBtn = $('#events-btn');
$experienceBtn = $('#experience-btn');
$faqsBtn = $('#faqs-btn');

$cal = $('article[role=main]');
$calH = $cal.outerHeight();

$calNav = $('nav#calendar');

$sidebar = $('#events aside');
$sidebarW = $sidebar.outerWidth();

$filters = $('#events aside div#filters');
$filtersH = 0;

$callout = $('#events aside div#callout');
$calloutTop = $callout.offset().top;
$calloutH = $callout.outerHeight();	

$experience = $('#tour-experience');
$experienceTop = $experience.offset().top;

$faqs = $('#faqs');
$faqsTop = $faqs.offset().top;

$pad = 40;

$hoverConfig = {    
     sensitivity: 1,    
     interval: 5000,     
     timeout: 5000,    
};

$(document).ready(function(){
	$('select#event_states').minimalect({placeholder:'Select State'});
	$('select#event_types').minimalect({placeholder:'Select Event Type'});
	$('select#event_months').minimalect({placeholder:'Select Month'});
	
	// expand sidebar promo callout 
	$sidebar.find('#callout').hoverIntent(function(){
		$(this).addClass('hovered');
		$('body').append('<div id="dimmer"></div>');
		$('#dimmer').animate({'opacity':'0.8'},300);
	}, function(){
		$sidebar.find('#callout').removeClass('hovered');	
		$('#dimmer').animate({'opacity':'0'},300, function(){
			$('#dimmer').remove();
		})	
	}, $hoverConfig);
	
	$sidebar.find('#callout #more a').click(function(e){
		$('#dimmer').animate({'opacity':'0'},300, function(){
			$('#dimmer').remove();
		});	
		$sidebar.find('#callout').removeClass('hovered');
		e.preventDefault();
	});
});

function eventsScroll($scrolled,$winH){
	$filtersH = $filters.outerHeight();	
	$calloutH = $callout.outerHeight();	
	$calloutY = $secNavH + $filtersH + $pad*2;
	$sidebarThreshold = $scrolled + $calloutH + $filtersH + $pad*5;
	if($scrolled < $winH){
		$('#hero.events .intro').css({
			'transform': 'translateY(-50%) translateX(' + (($scrolled * .5) + 0) + 'px)',
			'opacity': 1 - ($scrolled/500)
		});
	}
	
	// set subnav active state
	if($scrolled < $experienceTop - $winH/3){
		$secNav.find('a.current').removeClass('current');
		$eventsBtn.addClass('current');
	} else if($scrolled > $experienceTop - $winH/3 && $scrolled < $faqsTop - $winH/3){
		$secNav.find('a.current').removeClass('current');
		$experienceBtn.addClass('current');		
	} else{
		$secNav.find('a.current').removeClass('current');
		$faqsBtn.addClass('current');				
	}

	// adjust the subnav, scroll the burger
	/*if($scrolled > $winH - $secNavH - 90){
		$secNav.addClass('squeeze');
	} else{
		$secNav.removeClass('squeeze');
	}*/	

	// make the subnav sticky
	/*if($scrolled > $winH - $secNavH){
		$secNav.addClass('stuck');
		$burger.addClass('joined');
	} else{
		$secNav.removeClass('stuck');
		$burger.removeClass('joined');
	}*/

	// make the calendar table header sticky
	if($scrolled > $winH + $pad*2 && $scrolled < $experienceTop - $winH/2 ){
		$calNav.removeClass('passed').addClass('stuck');
	} else if($scrolled > $experienceTop - $winH/2){
		$calNav.addClass('passed');
	} else{
		$calNav.removeClass('stuck').removeClass('passed');		
	}

	// only do this stuff if there's room
	if($calloutH + $filtersH + $pad*4 < $winH){
		// make the filters sticky
		if($scrolled > $winH - $pad && $sidebarThreshold < $experienceTop){
			$filters.addClass('stuck').removeClass('passed').css('bottom','auto');
		} else if($sidebarThreshold > $experienceTop){
			$filters.removeClass('stuck').addClass('passed').css('bottom',$calloutH + $pad*2 );
		} else{
			$filters.removeClass('stuck').removeClass('passed').css('bottom','auto');
		}
	
		// make the sidebar callout sticky and so on
		if($scrolled + $secNavH + $filtersH + $pad*2 + 10 > $calloutTop && $sidebarThreshold < $experienceTop){
			$callout.addClass('stuck').removeClass('passed').css('top',$calloutY);
		} else if($sidebarThreshold > $experienceTop){
			$callout.removeClass('stuck').addClass('passed').attr('style','');
		} else{
			$callout.removeClass('stuck').removeClass('passed').attr('style','');
		}
	} else{
		// make sure stuff ain't stuck and reset otherwise
		$filters.removeClass('stuck').removeClass('passed').css('bottom','auto');
		$callout.removeClass('stuck').removeClass('passed').attr('style','');		
	}
}

$(window)
.scroll(function(){
	$scrolled = $(window).scrollTop();
	$winH = $(window).height();
	eventsScroll($scrolled, $winH);
})
.on('resize load', function(){
	$scrolled = $(window).scrollTop();
	$winH = $(window).height();
	$winW = $(window).width();
	$calH = $cal.outerHeight();
	$calloutH = $callout.outerHeight();	
	
	$sidebarW = $sidebar.outerWidth();	
	
	$filtersH = $filters.outerHeight();	
	$calloutY = $secNavH + $filtersH;	

	$mainW = $('#events article[role=main]').outerWidth();
	
	$calNav.find('ul').css({'width':$mainW});
	$sidebar.css('height',$calH).find('#filters').css('width',$sidebarW);

	eventsScroll($scrolled, $winH);
});