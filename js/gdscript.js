$(document).ready(function() {

{
	var curImg = 1;
	var autoSlide;
	$('#leftButton').hide();
	$('#rightButton').hide();
	$('#img_list').css('width', $('#img_list').children().length * 100 + '%');

	function startAutoSlide() {
		clearInterval(autoSlide);
		autoSlide = setInterval(function() {
			changePic(-1);
		}, 5000);
	}
	startAutoSlide()

	function changePic(dir) {
		clearInterval(autoSlide);
		if (dir > 0) // Left
		{
			$('#img_list').animate({left: '+=513'}, 600, function() {
				curImg--;
				if (curImg <= 0)
				{
					$('#img_list').css('left', -513 * ($('#img_list').children().length-2));
					curImg = ($('#img_list').children().length-2);
				}
				startAutoSlide();
			});
		} else if (dir < 0) // Right
		{
			$('#img_list').animate({left: '-=513'}, 600, function() {
				curImg++;
				if (curImg >= $('#img_list').children().length-1)
				{
					$('#img_list').css('left', -513);
					curImg = 1;
				}
				startAutoSlide();
			});
		}
	}

	$('#leftButton').click(function() {
		changePic(1);
	});

	$('#rightButton').click(function() {
		changePic(-1);
	});

	$('#slider').hover(function() {
		$('#leftButton').show();
		$('#rightButton').show();
	}, function() {
		$('#leftButton').hide();
		$('#rightButton').hide();
	});
} // END OF Slider Functions

});