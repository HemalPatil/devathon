<title>Add Content</title>
<br>
<div class="row center">
	<h3>Add Content</h3>
</div>
<div class="row">
	<div class="col s12 m10 l8 offset-m1 offset-l2">
		<form id="conferenceform" method="post" action="<?php echo base_url('managers/add_content')?>">
			<div class="row">
				<div class="col s12 m12 l12 input-field">
					<input id="content_title" name="content_title" type="text" length="100" class="validate" required>
					<label for="content_title">Title</label>
				</div>
			</div>
			<script type="text/javascript" src="<?php echo base_url('assets/scripts/tinymce/js/tinymce/tinymce.min.js'); ?>"></script>
			<script type="text/javascript">
				tinymce.init({
				selector: "textarea.tinymce"
				})
			</script>
			<div class="row">
				<div class="col s12 m12 l12 input-field">
					<h6>Content</h6>
					<textarea class="tinymce" name="content" id="content"></textarea>
				</div>
			</div>
			<div class="row center">
				<button type="Submit" class="btn">Add Content</button>
			</div>
		</form>
	</div>
</div>
<?php if(isset($content_added)){ ?>
<div class="modal center" id="added_banner">
	<div class="modal-content">
		<div class="row center">
			<h5>Content <?php if(!$conference_added){echo 'not ';} ?> added</h5>
		</div>
	</div>
</div>
<script type="text/javascript">
	$("#added_banner").openModal();
</script>
<?php } ?>