<title>Upload Paper</title>
<br>
<div class="row center">
	<h4>Upload Paper</h4>
</div>
<div class="row">
	<div class="col s12 m10 l8 offset-l2 offset-m1">
		<form method="post" action="<?php echo base_url('users/upload_paper'); ?>" enctype="multipart/form-data" accept-charset="utf-8">
		<div class="row">
			<div class="col s12 m12 l12">
				<label for="conference_id">Conference</label>
				<select id="conference_id" name="conference_id" class="browser-default validate" required>
					<?php foreach($conferences as $conference){ ?>
						<option value="<?php echo $conference['conference_id'];?>"><?php echo $conference['title'];?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12 m12 l12">
				<input id="paper_title" type="text" length="100" name="paper_title" class="validate" required>
				<label for="paper_title">Paper Title</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12 m12 l12">
				<textarea id="paper_desc" name="paper_desc" class="materialize-textarea"></textarea>
				<label for="paper_desc">Paper Description</label>
			</div>
		</div>
		<div class="row">
			<div class="col s12 m12 l12 file-field input-field">
				<div class="btn">
					<span>File</span>
					<input type="file" name="paper_file" required>
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text" placeholder="Paper file">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<section>
					<h5>Instructions for uploading papers :</h5>
					<ol>
						<li>Only .pdf files accepted</li>
					</ol>
				</section>
			</div>
		</div>
		<div class="row center">
			<button type="Submit" class="btn">Upload Paper</button>
		</div>
		</form>
	</div>
</div>
<?php if(isset($uploaded)){ ?>
<div class="modal center" id="added_banner">
	<div class="modal-content">
		<h5>Paper <?php if(!$uploaded){echo 'not ';} ?>uploaded</h5>
	</div>
</div>
<script type="text/javascript">
	$("#added_banner").openModal();
</script>
<?php } ?>