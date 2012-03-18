<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/header.php") ?>

<?php

$images = array('sleepy-panda.jpg', 'tall-panda.jpg', 'wide-panda.jpg');

?>

<div class="slideshow">
	
	<div class="big-picture">
		
		<img src="/img/projects/one.jpg" />
		
	</div>
	
	<div class="slideshow-sidebar">
		
		<? foreach($images as $image) { ?>
			<? $image_path = "/img/projects/" . $image; ?>
			<? $path_parts = pathinfo($image); ?>
			<? $thumb_path = "/img/projects/thumbs/" . $path_parts['filename'] . "_thumb." . $path_parts['extension']; ?>
			<img class="slideshow-thumbnail" src=<?= $thumb_path ?> />
		<? } ?>
		
	</div>
	
</div>


<div class="project-content">
	
</div>
		
<?php include($_SERVER['DOCUMENT_ROOT'] . "/footer.php") ?>