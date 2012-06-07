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
$images = array('metropoliscoverlarge.jpg', 'metropolisspread_one.jpg', 'metropolisspread_two.jpg', 'metropolisspread_three.jpg');

include($_SERVER['DOCUMENT_ROOT'] . '/partials/_slideshow.html.php');
?>


<div class="project-content">
	
	<p class="project-head">
	    2012 silver Addy award for photography<br>
		<br>
		Metropolis Magazine—University Addition<br>
		9x10.75"<br>
		Adobe Indesign, photoshop
	
		
	</p>
	
	<p>
		The magazine layout integrates type and image while working with in a specified grid. Hierarchy is used
        to maintain readability. The intent was to make differing, yet coordinating pages within the article. 
	</p>
	
</div>

		
<?php include($_SERVER['DOCUMENT_ROOT'] . "/footer.php") ?>