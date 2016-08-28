<title>Edit Users</title>
<br>
<div class="row center">
	<h4>Select a User</h4>
</div>
<div class="row">
	<div class="col s12 m10 l8 offset-m1 offset-l2">
		<div class="row">
			<?php foreach($users as $user){ ?>
			<div class="col s6 m6 l6">
				<input type="radio" value="<?php echo $user['id'];?>" name="user" id="user<?php echo $user['id']; ?>">
				<label for="user<?php echo $user['id']; ?>"><?php echo $user['first_name'].' '.$user['last_name']; ?></label>
			</div>
			<?php } ?>
		</div>
		<div class="row center">
			<button class="btn" onclick="edit()">Edit User</button>
		</div>
	</div>
</div>
<script type="text/javascript">
	function edit()
	{
		var value = $("input[name=user]:checked").val();
		window.location = "<?php echo base_url('auth/edit_user/'); ?>" + value;
	}
</script>