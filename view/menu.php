<?php
	if(isset($before_login))
	{
	?>

	<nav class="navbar navbar-expand navbar-light" style="background-color: #e3f2fd;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php?page=index">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=register">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=forgot_password">Password</a>
        </li>
      </ul>
    </div>
  </nav><br>
	<?php
		}
		else if($after_login)
		{
	?>

	<nav class="navbar navbar-expand navbar-light" style="background-color: #e3f2fd;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php?page=home">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=profile">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=book_add">Add Book</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="index.php?page=book_list">List Book</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=logout">Logou</a>
        </li>
      </ul>
    </div>
  </nav><br>
<?php
	}
?>
