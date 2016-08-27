<title>Add Conference</title>
<br>
<div class="row center">
	<h3>Add Conference</h3>
</div>
<div class="row">
	<div class="col s12 m10 l8 offset-m1 offset-l2">
		<form id="conferenceform" method="post" action="<?php echo base_url('admin/add_conference')?>" onsubmit="return checkDates();">
			<div class="row">
				<div class="col s12 m12 l12 input-field">
					<input id="conference_title" name="conference_title" type="text" length="100" class="validate" required>
					<label for="conference_title">Title</label>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m12 l12 input-field">
					<input id="conference_url" name="conference_url" type="text" length="100" class="validate" required>
					<label for="conference_url">Conference Link</label>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m12 l12 input-field">
					<textarea id="conference_description" class="materialize-textarea" name="conference_description" form="conferenceform"></textarea>
					<label for="conference_description">Description</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6 m6 l6">
					<input id="conference_start" type="date" name="conference_start" class="datepicker" required>
					<label for="conference_start">Conference Start</label>
				</div>
				<div class="input-field col s6 m6 l6">
					<input id="conference_end" type="date" name="conference_end" class="datepicker" required>
					<label for="conference_end">Conference End</label>
				</div>
			</div>
			<div class="row center">
				<button type="Submit" class="btn">Add Conference</button>
			</div>
		</form>
	</div>
</div>
<?php if(isset($conference_added)){ ?>
<div class="modal center" id="added_banner">
	<div class="modal-content">
		<div class="row center">
			<h5>Conference <?php if(!$conference_added){echo 'not ';} ?>added</h5>
		</div>
		<div class="row center">
			<a href="<?php echo base_url('/admin/modify_conference'); ?>" class="btn">Assign Managers</a>
		</div>
	</div>
</div>
<script type="text/javascript">
	$("#added_banner").openModal();
</script>
<?php } ?>
<script type="text/javascript">
	function checkDates()
	{
		var conferenceStart = new Date($("#conference_start").val());
		var conferenceEnd = new Date($("#conference_end").val());
		var today = new Date();
		if(conferenceStart<today || conferenceEnd<today)
		{
			alert('Conference Start and Conference End should be after today');
			return false;
		}
		if(conferenceStart>conferenceEnd)
		{
			alert('Conference Start should be before Conference End');
			return false;
		}
		return true;
	}
</script>