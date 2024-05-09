<?= $this->view('Shared/header', ['title'=>'Check 2FA']); ?>

<form method="post" action="">
<label>2FA code:<input type="text" name="totp" 
/></label>
<input type="submit" name="action" value="Verify code" />
</form>

<?= $this->view('Shared/footer'); ?>