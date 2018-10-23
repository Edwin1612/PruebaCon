<?php 
	include_once "header.php";
	$before_login=true;
	include_once "menu.php";
?>

<?php
	if($status=="before_submission" or $status=="failure")
	{
?>
<div class="container" align="center">
	<div class="col-md-5">
		<div class="col-md-12">
	<h3>Please fill up the following form to register yourself</h3>
	<form method="post">
		<fieldset>
			<legend>Registration Form</legend>
			<label for="name">Name</label>
			<div class="form-group">
				<input class="form-control" type="text" name="name" id="name" value="<?php if(isset($_REQUEST["name"])) {$_REQUEST["name"];} ?>">
				<font color="red"><?php echo $errors["name"]; ?></font>
			</div>
			<br>
			<div class="form-group">
				<label for="username">Username</label>
				<input class="form-control" type="text" name="username" id="username" value="<?php if(isset($_REQUEST["username"])) {$_REQUEST["username"];} ?>">
			</div>
			<font color="red"><?php echo $errors["username"]; ?></font>
			<br>
			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" name="password" id="password">
			</div>
			<font color="red"><?php echo $errors["password"]; ?></font>
			<br>
			<input class="form-control btn-success" type="hidden" name="page" value="register">
			<input class="form-control btn-success" type="hidden" name="caller" value="self">
			<input class="form-control btn-success" type="submit" value="Sign Up">
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
		<h3>Registration Successful</h3>
<?php
	}
?>

<?php
	include_once "footer.php";
?>
