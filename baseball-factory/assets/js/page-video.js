closeMe = '';
$(document).ready(function(){
	$('#playlist-picker').click(function(e){
		if($(this).hasClass('open')){
			clearTimeout(closeMe);
			$('#playlist-name', this).html($('#playlist-options .selected').html());
			closePlaylistMenu();
			
		} else{
			$('#playlist-options:not(.open)').css({'padding-top':$(this).outerHeight() + 20, 'width': ($('#watching aside').outerWidth() + 20)}).addClass('open');
			$('#playlist-name', this).html('Select a ');
			$(this).addClass('open');
		}
		e.preventDefault();
	});
	
	$('#watching').on('click', '#playlist-options a', function(e){
		$playlistID = $(this).attr('href');
		$('#playlist-options a.selected').removeClass('selected');
		$(this).addClass('selected');
		$('.video-list.shown').removeClass('shown');
		$('.video-list'+$playlistID).addClass('shown');
		closePlaylistMenu();
		e.preventDefault();
	});
	$('#watching').on('mouseout', '#playlist-options.open', function(){
		closeMe = setTimeout(closePlaylistMenu, 1000);
	});
	
	$('#watching').on('mouseover', '#playlist-options.open', function(){
		clearTimeout(closeMe);
	});

});

function closePlaylistMenu(){
	$('#playlist-options').attr('style','').removeClass('open');
	$('#playlist-name').html($('#playlist-options .selected').html());
	$('#playlist-picker').removeClass('open');
	$('.scroll-pane').jScrollPane();
}

function adjustList($winH, $winW){
	$vidH = $('#watching #video-player').height();
	$('#watching aside .scroll-pane').height($vidH);
	$('.scroll-pane').jScrollPane();
}

$(window).on('resize load', function(){
	$winH = $(window).height();
	$winW = $(window).width();
	adjustList($winH, $winW);
});