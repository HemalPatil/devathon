<title>Approve Papers</title>
<br>
<?php if($unapproved_number === 0){ ?>
<div class="row">
	<div class="col s12 m12 l12 center">
		<h4 style="margin-top: 20px">No papers that require action</h4>
		<h6 style="margin-top: 20px">Go to All Papers or back to Home Page</h6>
	</div>
</div>
<?php }else{ ?>
<div class="row center">
	<h4 id="toptitle">Papers to be approved</h4>
</div>
<div class="row">
	<?php foreach($papers as $paper){ ?>
		<div class="col s12 l6 m6" id="unapproved<?php echo $paper['paper_id']; ?>">
			<div class="card">
				<div class="card-content">
					<div class="row">
						<span class="col s12 m12 l12 card-title black-text">
							<?php echo 'Approve Paper'; ?>
						</span>
					</div>
					<div class="row">
						<div class="col s3 m3 l3">Title</div>
						<div class="col s1 m1 l1">:</div>
						<div class="col s8 m8 l8"><?php echo $paper['title']?></div>
					</div>
					<div class="row">
						<div class="col s3 m3 l3">Description</div>
						<div class="col s1 m1 l1">:</div>
						<div class="col s8 m8 l8"><?php echo $paper['description']?></div>
					</div>
					<div class="row">
						<div class="col s3 m3 l3">Link</div>
						<div class="col s1 m1 l1">:</div>
						<div class="col s8 m8 l8"><a href="<?php echo base_url('/assets/papers/'.$paper['filename']); ?>">Paper</a></div>
					</div>
				</div>
				<div class="card-action">
					<div class="row right">
						<div class="col">
							<button class="btn green" onclick="takeAction('approve',<?php echo $paper['paper_id']; ?>)">Approve</button>
						</div>
						<div class="col">
							<button class="btn red" onclick="takeAction('reject',<?php echo $paper['paper_id']; ?>)">Reject</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
</div>
<script type="text/javascript">
	var request;
	var unapproved_count = <?php echo $unapproved_number; ?>;
	function takeAction(action, id)
	{
		if(request)
		{
			request.abort();
		}
		request=$.ajax({url:"<?php echo base_url('editors/approve_paper'); ?>",type:"post",data:'action='+action+'&id='+id});
		request.done(function (response, textStatus, jqXHR)
		{
			unapproved_div = document.getElementById('unapproved' + id);
			unapproved_div.parentNode.removeChild(unapproved_div);
			unapproved_count--;
			badge = document.getElementById('unapproved_badge');
			badge.innerHTML = unapproved_count;
			if(unapproved_count == 0)
			{
				badge.parentNode.removeChild(badge);
				document.getElementById('toptitle').innerHTML = 'No companies require action.';
			}
		});
		request.fail(function (jqXHR, textStatus, errorThrown)
		{
			alert(textStatus + ' ' + errorThrown);
		});
	}
</script>
<?php } ?>