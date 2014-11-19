$(document).ready(function(){
	$nationalTraining = $('body').hasClass('page-template-page-ua-national-training-php');
	$allAmericaGame = $('body').hasClass('page-template-page-ua-all-america-game-php');
	
	if($nationalTraining){
		$('select#event_states').minimalect({placeholder:'State'});
	}
	
})

function uaBaseballScroll($scrolled,$winH){
	if($scrolled < $winH){
		$('#hero .intro').css({
			'transform': 'translateY(-50%) translateX(' + (($scrolled * .3) + 0) + 'px)',
			'opacity': 1 - ($scrolled/500)
		});
		$('#hero img').css({
			//'transform': 'translateY(-50%) translateX(' + (($scrolled * -.3) + 0) + 'px)',
			'opacity': 1 - ($scrolled/500)
		});
	}
	if($nationalTraining){
		$eventsHeight = $('#events').outerHeight();
		$filtersThreshold = $eventsHeight + $winH - $('#events #filters').height() - 60;
		if($scrolled > $winH && $scrolled < $filtersThreshold){
			$('#events #filters').removeClass('passed').addClass('stuck');
		} else if($scrolled > $filtersThreshold){
			$('#events #filters').removeClass('stuck').addClass('passed');
			//alert();
		} else{
			$('#events #filters').removeClass('passed').removeClass('stuck');
		}
		//console.log($scrolled +', '+ $filtersThreshold);
	}
	
}


$(window)
.scroll(function(){
	$scrolled = $(window).scrollTop();
	$winH = $(window).height();
	uaBaseballScroll($scrolled, $winH);
})
.on('resize load', function(){
	$scrolled = $(window).scrollTop();
	$winH = $(window).height();
	uaBaseballScroll($scrolled, $winH);
});
