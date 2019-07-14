$(document).on('scroll', function(){
	$('.description_card').css("left", Math.max(300 - 0.35*window.scrollY,
		0) +"px")
}) 
