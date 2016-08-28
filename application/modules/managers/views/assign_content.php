<title>Assign Content</title>
<br>
<div class="row center">
	<h4>Assign Content to Pages</h4>
</div>
<div class="row">
	<div class="col s12 m10 l8 offset-m1 offset-l2">
		<form method="post" action="<?php echo base_url('managers/assign_content')?>">
			<div class="row">
				<div class="input-field col s12 m12 l12">
					<select name="page" class="browser-default">
						<option value="" disabled selected>Choose Page</option>
						<?php foreach ($pages as $page) { ?>
						<option value="<?php echo $page['page_id'];?>"><?php echo $page['title'];?></option>
						<?php }?>
					</select>
				</div>
			</div>
			<div class="row">
				<?php foreach($contents as $content){ ?>
					<div class="col s12 m6 l6">
						<input id="content<?php echo $content['content_id']; ?>" name="assigned_contents[]" type="checkbox" class="filled-in" value="<?php echo $content['content_id']; ?>">
						<label for="content<?php echo $content['content_id']; ?>"><?php echo $content['title']; ?></label>
					</div>
				<?php } ?>
			</div>
			<div class="row center">
				<button type="submit" class="btn">Assign</button>
			</div>
		</form>
	</div>
</div>