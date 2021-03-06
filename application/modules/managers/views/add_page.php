<title>Add Page</title>
<br>
<div class="row center">
	<h3>Add Page</h3>
</div>
<div class="row">
	<div class="col s12 m10 l8 offset-m1 offset-l2">
		<form id="conferenceform" method="post" action="<?php echo base_url('managers/add_page')?>">
			<div class="row">
			  <div class="input-field col s12">
    			<select name="page_conference" class="browser-default">
      				<option value="" disabled selected>Choose Conference</option>
      				<?php foreach ($my_conferences as $my_conference) { ?>
						<option value="<?php echo $my_conference['conference_id'];?>"><?php echo $my_conference['title'];?></option>
    				<?php 	}?>
    			</select>
    		 </div>
			</div>
			<div class="row">
				<div class="col s12 m12 l12 input-field">
					<input id="page_title" name="page_title" type="text" length="100" class="validate" required>
					<label for="page_title">Title</label>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m12 l12 input-field">
					<textarea name="page_description" id="page_description" class="materialize-textarea"></textarea>
					<label for="page_description">Page Description</label>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m12 l12 center">
					<h5>Editors</h5>
				</div>
			</div>
			<?php $index = 1; ?>
			<div class="row">
				<?php foreach($editors as $editor){ ?>
					<div class="col s6 m6 l6">
						<input id="user<?php echo $index; ?>" type="checkbox" class="filled-in" name="page_editors[]" value="<?php echo $editor['id']; ?>">
						<label for="user<?php echo $index; ?>"><?php echo $editor['first_name'].' '.$editor['last_name']; ?></label>
					</div>
				<?php $index++;} ?>
			</div>
			<div class="row center">
				<button type="Submit" class="btn" onsubmit="add()">Add Page</button>
			</div>
		</form>
	</div>
</div>

<?php if(isset($page_added)){ ?>
<div class="modal center" id="added_banner">
	<div class="modal-content">
		<div class="row center">
			<h5>Page <?php if(!$page_added){echo 'not ';} ?> added</h5>
		</div>
	</div>
</div>
<script type="text/javascript">
	$("#added_banner").openModal();
</script>
<?php } ?>