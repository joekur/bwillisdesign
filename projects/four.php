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
$images = array('cartoonmag.jpg', 'cartoonspread.jpg', 'scannedcartoon.jpg');

include($_SERVER['DOCUMENT_ROOT'] . '/partials/_slideshow.html.php');
?>


<div class="project-content">
	
	<p class="project-head">
		11×17″<br>
		Print, Illustration<br>
		Adobe Illustrator, Indesign, Photoshop
		
	</p>
	
	<p>
		This project was executed by hand drawing the illustration and then creating an appropriate page layout. 
		It integrates the use of multiple design programs as well as close attention to the technicalities of the body copy.
	</p>
	
</div>

		
<?php include($_SERVER['DOCUMENT_ROOT'] . "/footer.php") ?>