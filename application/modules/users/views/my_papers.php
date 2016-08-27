<title>My Papers</title>
<br>
<div class="row center">
	<h4>My Papers</h4>
</div>
<?php if(count($mypapers)===0){ ?>
<div class="row">
	<div class="col s12 m12 l12 center">
		<h5 style="margin-top: 20px">No papers to show</h5>
		<h6 style="margin-top: 20px">Go to Upload Papers</h6>
	</div>
</div>
<?php } else { ?>
<div class="row">
	<div class="col s12 m10 l8 offset-l2 offset-m1">
		<?php foreach($mypapers as $mypaper){ ?>
			<div class="row">
				<div class="col s12 m12 l12">
					<a href="<?php echo base_url('assets/papers/'.$mypaper['filename']); ?>"><?php echo $mypaper['title']; ?></a>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
<?php } ?>