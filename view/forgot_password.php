<?php 
	include_once "header.php";
	$before_login=true;
	include_once "menu.php";
?>

<?php
	if($status=="before_submission" or $status=="failure")
	{
?>
	<h3>Please fill up the following form to retrieve password of your account</h3>
	<div class="container" align="center">
	<div class="col-md-5">
		<div class="col-md-12">
	<form method="post">
		<fieldset>
			<legend>Forgot Password Form</legend>
			<div class="form-group">
				<label for="username">Username</label>
				<input class="form-control" type="text" name="username" id="username" value="<?php if(isset($_REQUEST["username"])) {$_REQUEST["username"];} ?>">
			</div>
			<font color="red"><?php echo $errors["username"]; ?></font>
			<br>
			<input class="form-control btn-success" type="hidden" name="page" value="forgot_password">
			<input class="form-control btn-success" type="hidden" name="caller" value="self">
			<input class="form-control btn-success" type="submit" value="Retrieve Password">
		</fieldset>
	</form>
	</div>
	</div>
</div>
<?php
	}
	else
	{
?>
		<h3>Please check your mail for new password</h3>
<?php
	}
?>

<?php
	include_once "footer.php";
?>
