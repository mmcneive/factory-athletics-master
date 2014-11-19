$tourWindow = $(document).find('#tour-experience-overlay');
$(document).ready(function(){
	

	$('#experience-gateway').click(function(e){
		if($('#tour-experience-overlay').length == 0){
			$.ajax({
			    url: $templateDirectory+'/includes/tour.php',
			    type: 'post',
			    success: function (data) { 
			    	$('body').append(data);
					setupTour();
					window.location.hash = '#experience';
			    }
			});
		} else{
			// just reload the thing
			setupTour();
		}
		e.preventDefault();
	});
	$(document).on('click','#tour-back-btn', function(e){
		breakdownTour();
		e.preventDefault();
	});
	
	$(document).on('click','.time', function(e){
		$tourWindow = $(document).find('#tour-experience-overlay')
		$currentTime = $(this).attr('href').substring(1);
		$('.time-slide.active').removeClass('active');
		$('#slide-'+$currentTime).addClass('active');
		$('a.time.active').removeClass('active');
		$('a.time-'+$currentTime).addClass('active');
		$('#tour-back-btn').attr('class','');
		if($('.time-slide.active').hasClass('white-fill') && $('.time-slide.active').hasClass('text-left')){
			$('#tour-back-btn').removeClass('white');
		} else if(!$('.time-slide.active').hasClass('white-fill') || $('.time-slide.active').hasClass('text-right')){
			$('#tour-back-btn').addClass('white');
		}
		
		$tourWindow
		.attr('class','initiated loading begin loaded')
		.addClass('time-'+$currentTime)
		.find('article')
		.removeClass('loaded')
		.addClass('loading');
		
		setTimeout(function(){
			
			$tourWindow
			.removeClass('loading')
			.find('article')
			.addClass('loaded')
			.addClass('started');
			
		}, 2100);
		e.preventDefault();
	});	
});

function setupTour(){
	// whatever needs to happen to set the stage					
	preload([
	    $templateDirectory+'/assets/images/bg-tour-intro-texture.jpg',
	    $templateDirectory+'/assets/images/bg-tour-intro-photo.jpg',
	    $templateDirectory+'/assets/images/bg-tour-photo-800.jpg',
	    $templateDirectory+'/assets/images/bg-tour-photo-900.jpg',
	    $templateDirectory+'/assets/images/bg-tour-photo-920.jpg',
	    $templateDirectory+'/assets/images/bg-tour-photo-930.jpg',
	    $templateDirectory+'/assets/images/bg-tour-photo-945.jpg',
	    $templateDirectory+'/assets/images/bg-tour-photo-955.jpg',
	    $templateDirectory+'/assets/images/bg-tour-photo-1000.jpg',
	    $templateDirectory+'/assets/images/bg-tour-photo-1100.jpg',
	    $templateDirectory+'/assets/images/bg-tour-photo-800-bw.jpg',
	    $templateDirectory+'/assets/images/bg-tour-photo-900-bw.jpg',
	    $templateDirectory+'/assets/images/bg-tour-photo-920-bw.jpg',
	    $templateDirectory+'/assets/images/bg-tour-photo-930-bw.jpg',
	    $templateDirectory+'/assets/images/bg-tour-photo-945-bw.jpg',
	    $templateDirectory+'/assets/images/bg-tour-photo-955-bw.jpg',
	    $templateDirectory+'/assets/images/bg-tour-photo-1000-bw.jpg',
	    $templateDirectory+'/assets/images/bg-tour-photo-1100-bw.jpg',
	    $templateDirectory+'/assets/images/ui-tour-default-clock-white.svg',
	    $templateDirectory+'/assets/images/ui-tour-default-clock.svg',
	    $templateDirectory+'/assets/images/stencil-tour-800.svg',
	    $templateDirectory+'/assets/images/stencil-tour-900.svg',
	    $templateDirectory+'/assets/images/stencil-tour-920.svg',
	    $templateDirectory+'/assets/images/stencil-tour-930.svg',
	    $templateDirectory+'/assets/images/stencil-tour-945.svg',
	    $templateDirectory+'/assets/images/stencil-tour-955.svg',
	    $templateDirectory+'/assets/images/stencil-tour-1000.svg',
	    $templateDirectory+'/assets/images/stencil-tour-1100.svg'
	]);
	$('.stretched').anystretch();
	$('body').addClass('show-tour-experience');
	$('#tour-experience-overlay').addClass('loaded');
	setTimeout(
		function(){
			$('#tour-experience-overlay').addClass('begin');
		}
	,300);
}

function breakdownTour(){
	$('body').removeClass('show-tour-experience');
	$tourWindow = $(document).find('#tour-experience-overlay')
	
	$tourWindow
	.attr('class','')
	.find('.active')
	.removeClass('active');
	
	$tourWindow
	.find('article')
	.attr('class','');
	
	window.location.hash = '';
}

$(window).load(function(){
	$hash = window.location.hash;
	if($hash == '#experience'){
		$('#tour-experience #experience-gateway').click();
	}
});

function preload(arrayOfImages) {
    $(arrayOfImages).each(function(){
        $('<img/>')[0].src = this;
    });
}
