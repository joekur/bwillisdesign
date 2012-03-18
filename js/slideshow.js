$(document).ready( function() {
	
	$('.big-picture').each(function() {
		$(this).load(function() {
			//console.log($(this).height());
			var imgHeight = $(this).height();
			if (imgHeight < 400) {
				// pad on top
				var topPad = (400 - imgHeight) / 2;
				$(this).css("margin-top", topPad);
			}
		});
	});
	
	
	$('.slideshow-thumbnail').click(function() {
		
		console.log( $('.slideshow-thumbnail').index($(this)) );
		
	});
	
});
