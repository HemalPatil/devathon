<title>Conferences | NITW-</title>
<br>
<div class="row center">
	<h4>All Conferences</h4>
</div>
<div class="row">
	<?php foreach($conferences as $conference){ ?>
		<div class="col s12 m6 l4">
			<div class="card">
				<div class="card-content black-text">
					<span class="card-title black-text"><?php echo $conference['title']; ?></span>
					<p><?php echo $conference['description']; ?></p>
				</div>
				<div class="card-action black-text">
					<a href="<?php echo base_url('conference/show_conference/'.$conference['urlname']); ?>">Go to confernece</a>
				</div>
			</div>
		</div>
	<?php } ?>
</div>