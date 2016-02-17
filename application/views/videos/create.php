<h1><?php echo $title; ?></h1>

<?php echo validation_errors(); ?>

<?php echo form_open('videos/create'); ?>
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" class="form-control" id="title" placeholder="Video title">
	</div>
	<div class="form-group">
		<label for="link">Link</label>
		<input type="text" class="form-control" id="link" placeholder="https://player.vimeo.com/video/9153533">
	</div>
	<div class="form-group">
		<label for="text">Summary</label>
		<textarea type="text" class="form-control" id="text" placeholder="Enter summary for video"></textarea>
	</div>

	<button type="submit" name="submit" value="Create video item"class="btn btn-primary">Submit</button>
</form>
