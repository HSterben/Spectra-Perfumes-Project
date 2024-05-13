<?= $this->view('Shared/header'); ?>

	
	<div class='container'>
		<form method='post' action=''>
			<div class="form-group">
				<label><?= __('Username:')?><input type="text" class="form-control" name="username" placeholder="Jon" /></label>
			</div>
			<div class="form-group">
				<label><?= __('Password:')?><input type="password" class="form-control" name="password" placeholder="password" /></label>
			</div>

			<div class="form-group">
				<input type="submit" name="action" value="Register" /> 
				<a href='/User/login'><?= __('I have an account, bring me to the login page')?></a>
			</div>
		</form>
	</div>
	<?= $this->view('Shared/footer'); ?>