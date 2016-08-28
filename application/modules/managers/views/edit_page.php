<title>Edit Page</title>
<br>
<div class="row center">
	<h3>Edit Page</h3>
</div>
<div class="row">
	<div class="col s12 m10 l8 offset-m1 offset-l2">
		<form id="conferenceform" method="post" action="<?php echo base_url('managers/update_page')?>">
			<div class="row">
				<div class="input-field col s12">
					<select name="page_conference" class="browser-default">
						<option value="" disabled selected>Choose Page</option>
						<?php foreach ($my_pages as $my_page) { ?>
						<option value="<?php echo $my_page['page_id'];?>"><?php echo $my_page['title'];?></option>
						<?php }?>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m12 l12 input-field">
					<input id="page_title" name="page_title" type="text" length="100" value="<?php echo $my_page['title'];?>" class="validate" editable="false">
					<label for="page_title">Title</label>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m12 l12 input-field">
					<textarea name="page_description" id="page_description" value="<?php echo $my_page['description'];?>" class="materialize-textarea"></textarea>
					<label for="page_description">Page Description</label>
				</div>
			</div>
			<div class="row center">
				<button type="Submit" class="btn" onsubmit="add()">Edit Page</button>
			</div>
		</form>
	</div>
</div>

<?php if(isset($page_added)){ ?>
<div class="modal center" id="added_banner">
	<div class="modal-content">
		<div class="row center">
			<h5>Page <?php if(!$page_added){echo 'not ';} ?> edited</h5>
		</div>
	</div>
</div>
<script type="text/javascript">
	$("#added_banner").openModal();
</script>
<?php } ?>