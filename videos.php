<?php echo file_get_contents( "templates/header.php" ); ?>

<div class="row">
	<div class="col-xs-12">
		<h1>My Recent Videos</h1>
	</div>
</div>
<div class="row" id="search-form-container">
	<div class="col-xs-12">
		<form onsubmit="openVimeoSearch()" id="search-form">
			<div class="input-group">
				<input class="form-control" type="text" id="search-field">
				<span class="input-group-btn">
					<button class="btn btn-primary" type="submit">Search Vimeo</button>
				</span>
			</div>
		</form>
	</div>
</div>


<div class="row video-list">



<?php	
	$xml=simplexml_load_file("rss.xml") or die("Error: Cannot create object");
	
	// echo "<p>" . $xml->channel->title . "</p>";
	// echo "<p>" . $xml->channel->image->url . "</p>";
	// echo "<a href='" . "'>click here</a>";

	foreach($xml->channel->children() as $video) {
		if ($video->guid != "") {

			$thumbnail = $video->children('media', true)->content->thumbnail;

			// parse video id from GUID
			$clipStringIndex = strpos($video->guid, "clip");

			// add button to show video if ID found, else blank button
			$showVideoButtonHTML = "";
			if ($clipStringIndex > -1) {
				$videoId = substr($video->guid, $clipStringIndex + 4);
				$showVideoButtonHTML = "<button type='button' class='btn btn-default' onclick='showVideo(" . $videoId . ")'>View video</button>";
			} else {
				$showVideoButtonHTML = "<button type='button' class='btn btn-warning' onclick='alert('Video not found')' disabled>Video not found</button>";
			}
			echo "
<div class='col-md-6 video-item'>
	<div class='row'>
		<div class='col-xs-4'>
			<img class='img-responsive img-thumbnail' src='" . $thumbnail->attributes()["url"] . "'>
		</div>
		<div class='col-xs-8'>
			<h4><a target='_blank' href='" . $video->link . "'>" . $video->title . "</a></h4>
			<div>Uploaded: " . $video->pubDate . "</div>
			<div>" . $showVideoButtonHTML . "</div>
		</div>
	</div>

</div>";
		}
	}
?>

</div>

<div id="embedded-video-container" onclick="hideVideo();">
	<iframe class="embed-responsive-item" width="640" height="484" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
	</iframe>
</div>

<?php echo file_get_contents( "templates/footer.php" ); ?>
