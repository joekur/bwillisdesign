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
$images = array('typeposters.png', 'typeposterone.png', 'typepostertwo.png');

include($_SERVER['DOCUMENT_ROOT'] . '/partials/_slideshow.html.php');
?>


<div class="project-content">
	
	<p class="project-head">
		Typographical Poster Set<br>
		Print <br>
		
	</p>
	
	<p>
		Branding for Habitación was accomplished by creating a unique, identifying logo that captures its modern 
		attributes while using a color pallet that keeps the warmness. While the focus was on the logo itself, other 
		pieces were made to show a unifying use of type and color. 
	</p>
	
</div>

		
<?php include($_SERVER['DOCUMENT_ROOT'] . "/footer.php") ?>