<?php 
	include_once "header.php";
	if($logged_in)
	{
		$after_login=true;
		include_once "menu.php";
?>

<?php
		if($status=="before_submission" or $status=="failure")
		{
?>
	<h3>Please fill up the following form to add new book</h3>
	<div class="container" align="center">
	<div class="col-md-5">
		<div class="col-md-12">
	<form method="post">
		<fieldset>
			<legend>Book Add Form</legend>
			<div class="form-group">
				<label for="title">Title</label>
				<input class="form-control" type="text" name="title" id="title" value="<?php if(isset($_REQUEST["title"])) {$_REQUEST["title"];}  ?>">
			</div>
			<font color="red"><?php echo $errors["title"]; ?></font>
			<br>
			<div class="form-group">
				<label for="author">Author</label>
				<input class="form-control" type="text" name="author" id="author" value="<?php if(isset($_REQUEST["autor"])) {$_REQUEST["autor"];}  ?>">
			</div>
			<font color="red"><?php echo $errors["author"]; ?></font>
			<br>
			<div class="form-group">
				<label for="description">Description</label>
				<input class="form-control" type="description" name="description" id="description" value="<?php  if(isset($_REQUEST["description"])) {$_REQUEST["description"];} ?>">
			</div>
			<font color="red"><?php echo $errors["description"]; ?></font>
			<br>
			<input class="form-control btn-success" type="hidden" name="page" value="book_add">
			<input class="form-control btn-success" type="hidden" name="caller" value="self">
			<input class="form-control btn-success" type="submit" value="Save">
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
		<h3>Book Saved</h3>
<?php
		}
	}
	else
	{
		$before_login=true;
		include_once "menu.php";
?>
<h3>Invalid Login!!! Try Again.</h3>
<?php
	}
	include_once "footer.php";
?>
