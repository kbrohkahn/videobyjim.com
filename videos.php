<?php echo file_get_contents( "templates/header.php" ); ?>

<h1>My Recent Videos</h1>

<form onsubmit="openVimeoSearch()">
	<input type="text" id="search-key">
	<button type="submit" class="btn btn-primary">Search Vimeo</button>
</form>



<div class="row video-list">



<?php	
	$xml=simplexml_load_file("rss.xml") or die("Error: Cannot create object");
	
	// echo $xml->item[0]->title;

	foreach($xml->channel->children() as $video) {
		if ($video->guid != "") {
			echo "
<div class='col-xs-12 video-item'>
<h4>".$video->title."</h4>
<div>Uploaded: ". $video->pubDate."</div>
<div><a href=".$video->link." target='_blank'>Open in Vimeo</a></div>
<div><p> ".$video->attributes('media', false)->thumbnail."</p></div>
<div><button type='button' class='btn btn-default' onclick='showVideo(this)'>View video</button></div>
<div class='hidden'>". $video->description."</div>
</div>";
		}
	}
?>

<?php echo file_get_contents( "templates/footer.php" ); ?>
