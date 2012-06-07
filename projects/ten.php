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
$images = array('gandermnt.jpg');

include($_SERVER['DOCUMENT_ROOT'] . '/partials/_slideshow.html.php');
?>


<div class="project-content">
	
	<p class="project-head">
		Gander Mnt. Advertisement<br>
		Photography <br>
		
	</p>
	
	<p>
		The intent was to make a very simple, common-seeming photograph into a usable, effective advertisement. 
	</p>
	
</div>

		
<?php include($_SERVER['DOCUMENT_ROOT'] . "/footer.php") ?>