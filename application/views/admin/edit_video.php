<h1><?php echo $title; ?></h1>

<p><?php echo anchor('/admin', 'Back to admin home');?></p>

<?php echo validation_errors(); ?>

<?php echo form_open('admin/edit_video/'.$video_item['slug']); ?>
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" class="form-control" name="title" required value="<?php echo $video_item['title']?>">
	</div>
	<div class="form-group">
		<label for="link">Link</label>
		<input type="text" class="form-control" name="link" value="<?php echo $video_item['link']?>">
	</div>
	<div class="form-group">
		<label for="text">Summary</label>
		<textarea type="text" class="form-control" name="text" required ><?php echo $video_item['text']?></textarea>
	</div>
	<div class="form-group">
		<label for="text">Price</label>
		<div class="input-group">
			<span class="input-group-addon">$</span>
			<input type="number" class="form-control" name="text" value="<?php echo $video_item['price']?>"></textarea>
		</div>
	</div>

	<button type="submit" name="submit" value="Save video item"class="btn btn-primary">Save</button>
</form>
