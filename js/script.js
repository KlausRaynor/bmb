$(document).ready(function() {

	//mouse enter function will make icon 'bounce'/move/etc
	$('.colorChange').mouseover(function() {
		$(this).addClass('showMe');
	});

	//mouse leave
	$('.colorChange').mouseleave(function() {
		$(this).removeClass('showMe')

	});

	$('.colorChange').click(function() {
		$('body').css('background-image', '#000');
		var color = $(this).attr('title');
		console.log(color);
		switch (color) {
			case 'teal':
				$('body').css('background-image','url(/images/teal-knit-shirt-texture.jpg');
				break;
			case 'blue':
				$('body').css('background-image','url(/images/blue-knit-shirt-texture.jpg');
				break;
			case 'purple':
				$('body').css('background-image','url(/images/purple-knit-shirt-texture.jpg');
				break;
			case 'marigold':
				$('body').css('background-image','url(/images/marigold-knit-shirt-texture.jpg');
				break;
			default:
				$('body').css('background-image','url(/images/purple-knit-shirt-texture.jpg');
		}

	});
});