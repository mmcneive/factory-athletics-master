$win = $(window);
$slide1length = 3.75;
$slide2length = 3.75;
$slide3length = 3.75;
$slide4length = 3.75;
$banner1 = $('#video #banner-01');
$banner2 = $('#video #banner-02');
$banner3 = $('#video #banner-03');
$banner4 = $('#video #banner-04');
$banners = $('#video h1');
$progress = null;
$(document).ready(function() {
	
	// Fix strange drawing/painting issue in last chrome/safari
	sel = document.getElementById('video');
	sel.style.display='none';
	sel.offsetHeight; 
	sel.style.display='';


	var progress = new CircularProgress({
	  radius: 60,
	  strokeStyle: 'white',
	  lineCap: 'round',
	  lineWidth: 8
	});
	
	progress.options.text.value = '';
	
	$('#video .scroll').append(progress.el);
	//progress;
	$progress = setInterval(function(){
		$current = $("#main-layer").get(0).currentTime;
		$duration = $("#main-layer").get(0).duration;
		if($current <= $slide1length){
			//console.log('slide 1');
			$banners.removeClass('shown');
			$banner1.addClass('shown');
		} else if($current >= $slide1length && $current <= $slide1length + $slide2length){
			$banners.removeClass('shown');
			$banner2.addClass('shown');
		} else if($current >= $slide2length && $current <= $slide1length + $slide2length + $slide3length){
			$banners.removeClass('shown');
			$banner3.addClass('shown');
		} else{
			$banners.removeClass('shown');
			$banner4.addClass('shown');
		}
		$percentage = Math.round(($current/$duration)*100);
		progress.update($percentage);		
	},30);
	

	$('section#hero').waypoint({ offset: '-20%' });
    
    var feed = new Instafeed({
        get: 'tagged',
        tagName: 'BFFilming',
        limit: 0,
        resolution: 'standard_resolution',
        sortBy: 'most-liked',
        links: false,
        clientId: 'd53128ed610b4413ad9845ca0431e1bb'
    });
    
    feed.run();
	
});


function setupVideo(){
	var v = document.getElementById('main-layer');
    var canvas = document.getElementById('vfx');
    var context = canvas.getContext('2d');
    var back = document.getElementById('bg');
    var backcontext = back.getContext('2d');
	var z = 1.05;
    var cw,ch;

    v.addEventListener('play', function(){
        cw = v.clientWidth;
        ch = v.clientHeight;
        canvas.width = cw;
        canvas.height = ch;
        back.width = cw;
        back.height = ch;
        draw(v,context,backcontext,cw,ch,z);
    },false);
}

document.addEventListener('DOMContentLoaded', function(){setupVideo();},false);
document.addEventListener('resize', function(){setupVideo();},false);

var playMovie;

function draw(v,c,bc,w,h,z) {
    if(v.paused || v.ended) return false;

	bc.drawImage(v,0,0,w,h); 
    
	c.beginPath();
	c.moveTo(w/2,h/4.75);
	c.lineTo(w - w/3, h/2);
	c.lineTo(w/2, h-h/4.75);
	c.lineTo(w/3, h/2);
	c.closePath(); 
	c.clip();
    c.drawImage(v,w-(w*z),h-(h*z),w*z,h*z);
    c.restore();
    
    playMovie = setTimeout(function(){ draw(v,c,bc,w,h,z); }, 30);
}

function pauseVideo(){
	$('#main-layer').get(0).pause();
}
function playVideo(){
	$('#main-layer').get(0).play();
}
function homeScroll($scrolled, $winH){
	/*$('#video h1').css({
		'opacity': 1 - ($scrolled/500)
	});*/
	$('#vfx').css({
		'transform': 'translateY(' + (($scrolled * .2) + 0) + 'px)'
	});
	$('#bg').css({
		'opacity': 1+ $scrolled * -.001
	});
	if($scrolled > $winH/5){
		 pauseVideo();
		 $('#video h1').addClass('hide');
	} else{
		 playVideo();
		$('#video h1').removeClass('hide');
	}
}

var sxsw = {

    fillscreen: function(boxWidth, boxHeight, imgWidth, imgHeight) {

        var initW = imgWidth;
        var initH = imgHeight;
        var ratio = initH / initW;

        imgWidth = boxWidth;
        imgHeight = boxWidth * ratio;

        if(imgHeight < boxHeight){
            imgHeight = boxHeight;
            imgWidth = imgHeight / ratio;
        }
		
        return {
            width: imgWidth,
            height: imgHeight
        };

    },

}

$win
.scroll(function(){
	$scrolled = $win.scrollTop();
	$winH = $win.height();
	$winW = $win.width();
	homeScroll($scrolled, $winH)
})
.on('resize load', function(){
	$scrolled = $win.scrollTop();
	$winH = $win.height();
	$winW = $win.width();
	$videos = $('canvas#vfx, canvas#bg');
	playVideo();
	homeScroll($scrolled,$winH);
    var videoHeight = $videos.height();
    var videoWidth = $videos.width();
    var newSize = sxsw.fillscreen($winW, $winH, 1920, 1080);
    $videos
        .width(newSize.width)
        .height(newSize.height)
		.css("margin-left", (($winW - newSize.width)/2))
		.css("margin-top", (($winH - newSize.height)/2));
		
	//});
	 
});