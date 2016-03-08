<h1><?php echo $title; ?></h1>

<?php foreach ($videos as $video_item): ?>

	<a href="<?php echo site_url('videos/'.$video_item['slug']); ?>"><h3><?php echo $video_item['title']; ?></h3></a>
	<div class="main">
		<?php echo $video_item['text']; ?>
	</div>

<?php endforeach;?>
