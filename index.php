<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>startpagina</title>
		<!-- link css -->
		<link rel="stylesheet" href="CSS/styles.css" />
		<!-- icon page -->
		<link rel="icon" type="image/x-icon" href="Assets/afbeeldingen/.png" />
		<!-- fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet" />
	</head>

	<?php
    require_once 'includes/header.php';
  ?>

	<body>
		<main class="home">
			<div class="container_startpage">
				<h2>Welcome to TRAVELEGY</h2>
			</div>

			<div class="search">
				<p class="titel">Search</p>
				<p class="sub_titel">Search for your dream Travelegy vacation.</p>

				<div class="search_bar">
					<input type="text" placeholder="Search by name..." />
					<button>Search</button>
				</div>
			</div>

			<div class="recommended">
				<div class="left">
					<div class="item">
						<p class="titel">Hotel Naam</p>
						<p class="sub_titel">Cairo, Egypt</p>
						<p class="price">Now from $ 90.00</p>
					</div>
				</div>

				<div class="right">
					<div class="item">
						<p class="titel">Hotel Naam</p>
						<p class="sub_titel">Cairo, Egypt</p>
						<p class="price">Now from $ 90.00</p>
					</div>

					<div class="item">
						<p class="titel">Hotel Naam</p>
						<p class="sub_titel">Cairo, Egypt</p>
						<p class="price">Now from $ 90.00</p>
					</div>
				</div>
			</div>
		</main>
		<?php
      require_once 'includes/footer.php';
    ?>
	</body>
</html>
