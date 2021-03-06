<!DOCTYPE html>

<?php
	session_start(); 

	if (isset($_SESSION["loggedin"]))
	{
		header("location: account.php");
		exit();
	}
?>

<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Login</title>
		<!-- link css -->
		<link rel="stylesheet" href="CSS/styles.css" />
		<!-- icon page -->
    	<link rel="icon" type="image/x-icon" href="Assets/afbeeldingen/logo.png"/>
		<!-- fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet" />
	</head>

	<body>
		<main class="login_page">
			<a class="logo" href="index.php"><img src="Assets/afbeeldingen/logo.png" alt="" /></a>
			<form action="PHP/authenticate.php" method="post">
				<p class="title">TRAVELEGY</p>
				<div class="label-input">
					<label for="">Email</label>
					<input type="text" name="email" id="email" placeholder="example@example.com" />
				</div>

				<div class="label-input">
					<label for="">Password</label>
					<input type="password" name="wachtwoord" id="wachtwoord" placeholder="password" />
				</div>

				<input type="submit" value="Login" />

				<div class="links">
					<a href="contact.php" class="password_forgot">Forgot password?</a>
					<a href="create_account.php" class="create_account">Create account</a>
				</div>
			</form>
		</main>
	</body>
</html>
