<title>Modify Conference</title>
<br>
<div class="row center">
	<h3>Modify Conference</h3>
</div>
<?php
	$end_date = date('d M, Y', strtotime($conference['end_date']));
	$start_date = date('d M, Y', strtotime($conference['start_date']));
?>
<?php print_r($users); echo '<br>'; ?>
<?php print_r($managers); ?>
	<form id="conferencemodifyform" action="<?php echo base_url('admin/modify_conference')?>" method="post" onsubmit="return checkDates();">
		<div class="container" align="center" style="margin-left:10%; margin-right:10%; width:80%">
			<div class="input-field col l12 m12 s12">
				<input type="text" name="conference_title" id="conference_title" value="<?php echo $conference['title']; ?>">
				<label for="conference_title">Title</label>
			</div>
			<div class="input-field col l12 m12 s12">
				<input type="text" name="conference_url" id="conference_url" value="<?php echo $conference['urlname']; ?>">
				<label for="conference_url">URL</label>
			</div>
			<div class="input-field col l12 m12 s12">
				<input type="text" name="conference_description" id="conference_description" value="<?php echo $conference['description']; ?>">
				<label for="conference_description">Description</label>
			</div>
			<div class="row">
				<div class="input-field col l6 m6 s6">
					<input type="date" class="datepicker" name="conference_start" id="conference_start" value="<?php echo $start_date; ?>">
					<label for="conference_start">Start Date</label>
				</div>
				<div class="input-field col l6 m6 s6">
					<input type="date" class="datepicker" name="conference_end" id="conference_end" value="<?php echo $end_date; ?>">
					<label for="conference_end">End Date</label>
				</div>
			</div>
		</div>
	</form>
<div class="row center">
	<h4>Managers</h4>
</div>
<?php $half = count($users)/2; $index = 0; ?>
					<!--div class="col m6 l6 s6"style="margin-left: 10%">
						<input type="checkbox" class="filled-in" id="filled-in-box" />
						<label for="filled-in-box">Manager1</label>
					</div-->
<?php foreach($users as $user){ ?>
	<?php if($index == 0 || $index == $half)?>
<?php } ?>