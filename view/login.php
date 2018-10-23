<?php 
	include_once "header.php";
	$before_login=true;
	include_once "menu.php";
?>

<?php
	if($status=="before_submission" or $status=="failure")
	{
?>
	<h3>Please fill up the following form to login to your account</h3>
	<div class="container" align="center">
	<div class="col-md-5">
		<div class="col-md-12">
	<form method="post">
		<fieldset>
			<legend>Login Form</legend>
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
			<input class="form-control btn-success" type="hidden" name="page" value="login">
			<input class="form-control btn-success" type="hidden" name="caller" value="self">
			<input class="form-control btn-success" type="submit" value="Sign In">
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
		<form method="post">
			<input type="hidden" name="username" id="username" value="<?php echo $_REQUEST["username"]; ?>">
			<input type="hidden" name="password" id="password" value="<?php echo $_REQUEST["password"]; ?>">
			<input type="hidden" name="page" value="home">
		</form>
		<script>
			document.forms[0].submit();
		</script>
<?php
	}
?>

<?php
	include_once "footer.php";
?>
