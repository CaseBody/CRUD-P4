<!DOCTYPE html>
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
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	</head>

	<body>
		<main class="login_page create_account_page">
			<a class="logo" href="index.php"><img src="Assets/afbeeldingen/logo.png" alt="" /></a>
			<form action="">
				<p class="title">TRAVELEGY</p>

				<div class="label-input">
					<label for="">First name</label>
					<input type="text" name="" id="voornaam" placeholder="John" />
				</div>

				<div class="label-input">
					<label for="">Last name</label>
					<input type="text" name="" id="achternaam" placeholder="Doe" />
				</div>

				<div class="label-input">
					<label for="">Email</label>
					<input type="text" name="" id="email" placeholder="example@example.com" />
				</div>

				<div class="label-input">
					<label for="">Password</label>
					<input type="password" name="" id="wachtwoord" placeholder="password" />
				</div>

				<p class="error_code" id="error_code">
					Error Code
				</p>

				<input type="submit" id="submit" value="Create Account" />

				<div class="links">
					<a href="login.php" class="login_link">Already have an account?</a>
				</div>
			</form>
		</main>
	</body>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	<script src="js/create_account.js"></script>
</html>
