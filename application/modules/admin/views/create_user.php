<title>Create User</title>
<br>
<div class="row center">
	<h3>Create User</h3>
</div>
<div class="row">
	<div class="col s12 m10 l8 offset-m1 offset-l2">
		<div class="row">
			<form class="col s12" action="<?php echo base_url('admin/create_user_stat')?>" method="post">
				<div class="row">
					<div class="input-field col s6 m6 l6">
						<input id="first_name" name="first_name" type="text" class="validate" required>
						<label for="first_name" class="active">First Name</label>
					</div>
					<div class="input-field col s6 m6 l6">
						<input id="last_name" name="last_name" type="text" class="validate" required>
						<label for="last_name">Last Name</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="email" name="email" type="email" class="validate" required>
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="mobile" name="mobile" type="tel" class="validate" required>
						<label for="mobile">Mobile</label>
					</div>
				</div>
				<button class="btn cyan waves-effect waves-light right" type="submit" name="action">Create User
					<i class="mdi-social-person-add right"></i>
				</button>
			</form>
		</div>
	</div>
</div>