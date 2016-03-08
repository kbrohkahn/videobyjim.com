<?php

echo '<h1>'.$video_item['title'].'</h1>';

if ($video_item['link'] != "") {
	$vimeo_id = substr($video_item['link'], strrpos($video_item['link'], '/'));
	echo '<div class="embed-responsive embed-responsive-16by9">';
	echo '<iframe class="embed-responsive-item" src="https://player.vimeo.com/video'.$vimeo_id.'" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
	echo '</div>';

	echo '<a class="btn btn-primary" href="'.$video_item['link'].'">Download from Vimeo</a>';	
}

if ($video_item['price'] > 0) {
	echo '<p>Cost:'.$video_item['price'].'</p>';	
	echo '<input type="button" class="btn btn-primary">Purchase</input>';	
}

echo '<p><a href='.$video_item['link'].'>'.$video_item['title'].'</a> from <a href="https://vimeo.com/jimalthoff">people</a> on <a href="https://vimeo.com">Vimeo</a>.</p>';
echo '<p>'.$video_item['text'].'</p>';
?>

<script src="/assets/js/braintree-2.21.0.min.js"></script>
