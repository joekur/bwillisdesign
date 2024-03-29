<div class="slideshow">
	
	<div class="slideshow-screen">
		
		<? $ind = 0; ?>
		<? foreach($images as $image) { ?>
			<? $image_path = "/img/projects/" . $image; ?>
			
			<? if ($ind==0) { ?>
				<div class="picture-container active">
			<? } else { ?>
				<div class="picture-container">
			<? } ?>
				<img src=<?= $image_path ?> class="big-picture" />
			</div>
			<? $ind++ ?>
		<? } ?>
		
	</div>
	
	<div class="slideshow-sidebar">
		
		<? $ind = 0; ?>
		<? foreach($images as $image) { ?>
			<? $path_parts = pathinfo($image); ?>
			<? $thumb_path = "/img/projects/thumbs/" . $path_parts['filename'] . "_thumb." . $path_parts['extension']; ?>
			<? if ($ind == 0) { ?>
				<div class="thumb-container active">
			<? } else { ?>
				<div class="thumb-container">
			<? } ?>
				<img class="slideshow-thumbnail" src=<?= $thumb_path ?> />
			</div>
			<? $ind++; ?>
		<? } ?>
		
	</div>
	
	<div class="slideshow-bottom">
		<div class="left-arrow"></div>
		<div class="right-arrow"></div>
	</div>
	
</div>