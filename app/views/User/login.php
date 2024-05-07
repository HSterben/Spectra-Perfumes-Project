<?= $this->view('Shared/header'); ?>

	<div class='container'>
		<form method='post' action=''>
			<div class="form-group">
				<label>Username:<input type="text" class="form-control" name="username" placeholder="Jon" /></label>
			</div>
			<div class="form-group">
				<label>Password:<input type="password" class="form-control" name="password" placeholder="password" /></label>
			</div>

			<div class="form-group">
				<input type="submit" name="action" value="Login" /> 
			</div>
		</form>
	</div>

<?= $this->view('Shared/footer'); ?>