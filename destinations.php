<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Destinations</title>
		<link rel="stylesheet" href="CSS/styles.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
	</head>
	<body class="destinations_pagina">
		<div class="content">

			<?php 
				include_once "includes/header.php";
			?>
			
			<div class="top">
				<p class="destinations_title">Discover the Travelegy destinations</p>
				<div class="search_bar">
					<input type="text" placeholder="Search by name..." />
					<button>Search</button>
				</div>
			</div>

			<div class="categories">
				<div class="categorie">
					<p class="categorie_titel">Categorie naam</p>

					<div class="categorie_content" id="categorie_test">
						<div class="item">
							<img src="https://cdn.discordapp.com/attachments/968125920038776866/968125953651920926/pexels-photo-4388167.jpeg" alt="">
							<div class="bottom">
								<p class="title">Hotel Naam</p>
								<p class="locatie">Cairo, Egypt</p>
								<p class="prijs">Vanaf<span> € 90.00</span></p>
							</div>
						</div>

						<div class="item">
							<img src="https://cdn.discordapp.com/attachments/968125920038776866/968125953651920926/pexels-photo-4388167.jpeg" alt="">
							<div class="bottom">
								<p class="title">Hotel Naam</p>
								<p class="locatie">Cairo, Egypt</p>
								<p class="prijs">Vanaf<span> € 90.00</span></p>
							</div>
						</div>

						<div class="item">
							<img src="https://cdn.discordapp.com/attachments/968125920038776866/968125953651920926/pexels-photo-4388167.jpeg" alt="">
							<div class="bottom">
								<p class="title">Hotel Naam</p>
								<p class="locatie">Cairo, Egypt</p>
								<p class="prijs">Vanaf<span> € 90.00</span></p>
							</div>
						</div>

						<div class="item">
							<img src="https://cdn.discordapp.com/attachments/968125920038776866/968125953651920926/pexels-photo-4388167.jpeg" alt="">
							<div class="bottom">
								<p class="title">Hotel Naam</p>
								<p class="locatie">Cairo, Egypt</p>
								<p class="prijs">Vanaf<span> € 90.00</span></p>
							</div>
						</div>

						<div class="item">
							<img src="https://cdn.discordapp.com/attachments/968125920038776866/968125953651920926/pexels-photo-4388167.jpeg" alt="">
							<div class="bottom">
								<p class="title">Hotel Naam</p>
								<p class="locatie">Cairo, Egypt</p>
								<p class="prijs">Vanaf<span> € 90.00</span></p>
							</div>
						</div>

						<div class="item">
							<img src="https://cdn.discordapp.com/attachments/968125920038776866/968125953651920926/pexels-photo-4388167.jpeg" alt="">
							<div class="bottom">
								<p class="title">Hotel Naam</p>
								<p class="locatie">Cairo, Egypt</p>
								<p class="prijs">Vanaf<span> € 90.00</span></p>
							</div>
						</div>

						<div class="item">
							<img src="https://cdn.discordapp.com/attachments/968125920038776866/968125953651920926/pexels-photo-4388167.jpeg" alt="">
							<div class="bottom">
								<p class="title">Hotel Naam</p>
								<p class="locatie">Cairo, Egypt</p>
								<p class="prijs">Vanaf<span> € 90.00</span></p>
							</div>
						</div>

						<div class="item">
							<img src="https://cdn.discordapp.com/attachments/968125920038776866/968125953651920926/pexels-photo-4388167.jpeg" alt="">
							<div class="bottom">
								<p class="title">Hotel Naam</p>
								<p class="locatie">Cairo, Egypt</p>
								<p class="prijs">Vanaf<span> € 90.00</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php 
		include_once "includes/footer.php";
	?>
		</div>
	</body>
</html>

<script src="js/destinations.js"></script>
