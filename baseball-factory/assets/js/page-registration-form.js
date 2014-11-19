$(document).ready(function() {
	
	$('.program').click(function() {
		$('.program').removeClass('selected');
		$(this).addClass('selected');
	});
	
	$('#submit-one').click(function() {
		$("html, body").animate({ scrollTop: 0 }, "slow", function() {
			$('#step-one').addClass('past');
			$('#step-two').removeClass('next');
		});
		$('.mark.active').removeClass('active').addClass('past');
		$('.mark:nth-child(4)').addClass('active');
	});
	
	$('#step-two #back').click(function() {
		$('#step-one').removeClass('past');
		$('#step-two').addClass('next');
		$("html, body").delay(400).animate({ scrollTop: 0 }, "slow");
  return false;
	});
	
	$('#submit-two').click(function() {
		$("html, body").animate({ scrollTop: 0 }, "slow", function() {
			$('#step-two').addClass('past');
			$('#step-three').removeClass('next');
		});
		$('.mark.active').removeClass('active').addClass('past');
		$('.mark:nth-child(6)').addClass('active');
	});
	
	$('#submit-three, #step-three #skip').click(function() {
		event.preventDefault();
		$("html, body").animate({ scrollTop: 0 }, "slow", function() {
			$('#step-three').addClass('past');
			$('#step-four').removeClass('next');
		});
		$('.mark.active').removeClass('active').addClass('past');
	});
	
	
});