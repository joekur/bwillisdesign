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
$images = array('folderpic.jpg', 'folder.jpg');

include($_SERVER['DOCUMENT_ROOT'] . '/partials/_slideshow.html.php');
?>


<div class="project-content">
	
	<p class="project-head">
		Children’s Booklet<br>
		6×6″<br>
		Adobe Indesign, Illustrator, Photoshop<br>
		
	</p>
	
	<p>
		The booklet was designed as an educational guide through the human digestive system. 
		It is geared toward a young audience by its style of writing and it’s minimalistic design.<br>
		<br>
		The design required innovation, the use of multiple design programs, 
		the use of grids, hierarchy and color, and the combining of text and images. The objective was to create 
		the guide by first deciding upon a “travel destination” and then by engineering a prototype followed by a 
		digital template of the booklet.
	</p>
	
</div>

		
<?php include($_SERVER['DOCUMENT_ROOT'] . "/footer.php") ?>