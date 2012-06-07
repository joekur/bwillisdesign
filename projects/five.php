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
$images = array('typeposters.jpg', 'typeposterone.jpg', 'typepostertwo.jpg');

include($_SERVER['DOCUMENT_ROOT'] . '/partials/_slideshow.html.php');
?>


<div class="project-content">
	
	<p class="project-head">
		Baskerville Poster Spread<br>
		13×23″<br>
		Adobe Indesign<br>
		
		
	</p>
	
	<p>
		The spread was created to present information on the Baskerville typeface using hierarchy and grids in a clean, stylistic way.<br>
		<br>
		The challange was to create an eye-catching poster set without using images while incorporating only the Baskerville typeface. 

	
</div>

		
<?php include($_SERVER['DOCUMENT_ROOT'] . "/footer.php") ?>