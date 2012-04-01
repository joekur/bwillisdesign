<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/header.php") ?>

<?php
// Project images go in /img/projects. Thumbs go in /img/projects/thumbs.
// List your file names here, including the file extension. It will automatically
// look in the correct folders, and look for a thumb with the same name but with
// the "_thumb" suffix.
//
// Example files for:  $images = array('CoolImage.jpg');
//     /img/projects/CoolImage.jpg
//     /img/projects/thumbs/CoolImage_thumb.jpg
$images = array('HabitacionLogo.jpg', 'ColorSwatches.jpg', 'HabitacionHandout.jpg');

include($_SERVER['DOCUMENT_ROOT'] . '/partials/_slideshow.html.php');
?>


<div class="project-content">
	
	<p class="project-head">
		University Magazine - Construction Addition<br>
		Print, Photography<br>
		9.25x12"
	</p>
	
	<p>
		The sample magazine consists of a cover plus three spreads. The integration 
		of text and image is achieved using original photography, a structured grid 
		and a sense of hierarchy.
	</p>
	
</div>

		
<?php include($_SERVER['DOCUMENT_ROOT'] . "/footer.php") ?>