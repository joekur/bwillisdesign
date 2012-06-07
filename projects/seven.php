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
$images = array('winterpic_one.jpg', 'winterpic_two.jpg', 'winterpic_three.jpg');

include($_SERVER['DOCUMENT_ROOT'] . '/partials/_slideshow.html.php');
?>


<div class="project-content">
	
	<p class="project-head">
		Sledding Portraits<br>
		7×10″ <br>
		Camera Raw, Photoshop<br>
		 
		
	</p>
	
	<p>
		Images were part of a portrait series in which I experimented with different camera 
		settings including aperture, shutter-speed and depth of field. In order to acheive a photojournalist
		approach editing was kept to a minimum. 
	</p>
	
</div>

		
<?php include($_SERVER['DOCUMENT_ROOT'] . "/footer.php") ?>