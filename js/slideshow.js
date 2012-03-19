$(document).ready( function() {
	
	var thumbContainers = $('.thumb-container');
	var picContainers = $('.picture-container');
	var body = $('body');
	
	$('.big-picture').load(function() {
		var imgHeight = $(this).height();
		console.log(imgHeight);
		if (imgHeight < 400 && imgHeight > 0) {
			var topPad = (400 - imgHeight) / 2;
			$(this).css("margin-top", topPad);
		}
		var myContainer = $(this).parent();
		myContainer.css('visibility', 'visible').hide();
		if (picContainers.index(myContainer) == 0) {
			myContainer.show();
		}
	});
	
	
	$('.thumb-container').click(function() {
		if (body.hasClass('animating') || $(this).hasClass('active')) {
			return;
		}
		body.addClass('animating');
		
		var ind = thumbContainers.index($(this));
		thumbContainers.removeClass('active');
		$(this).addClass('active');
		
		$('.picture-container.active').fadeOut(600);
		picContainers.removeClass('active');
		//var nextPic = picContainers.get(ind);
		var nextPic = $('.picture-container:nth-child(' + (ind+1) + ')');
		console.log(nextPic);
		nextPic.fadeIn(600, function() {
			$(this).addClass('active');
			body.removeClass('animating');
		});
		
		
	});
	
});
