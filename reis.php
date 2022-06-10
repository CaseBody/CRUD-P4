<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Reis</title>
		<link rel="stylesheet" href="CSS/styles.css" />
		<!-- fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet" />
	</head>
	<body class="reis_pagina header_no_trans">
		<?php 
			include_once "includes/header.php";
			require_once("includes/connect.php");

			if (!isset($_GET['id']))
			{
				header("Location: destinations.php");
				die();
			}

			$sql = 'SELECT * FROM reis WHERE reis.id = :id';
			$stmt = $connect->prepare($sql); $stmt->bindParam('id', $_GET['id']); $stmt->execute(); $result = $stmt->fetchAll(); $result
		= $result[0]; $sql = 'SELECT * FROM recensies INNER JOIN gebruikers ON recensies.gebruikerid=gebruikers.id WHERE reisid =
		:id'; $stmt = $connect->prepare($sql); $stmt->bindParam('id', $_GET['id']); $stmt->execute(); $result_recensies =
		$stmt->fetchAll(); 
		
		if (!isset($result))
			{
				header("Location: destinations.php");
				die();
			}
		
		?>
		<main>
			<div class="main_content">
				<div class="left">
					<img src="<?php echo $result['afbeelding'] ?>" alt="" />
				</div>
				<div class="right">
					<p class="title"><?php echo $result['naam'] ?></p>
					<p class="sub_title"><?php echo $result['locatie'] ?></p>
					<p class="rating">
						<?php
						if (count($result_recensies) >
						0) { $total = 0; foreach ($result_recensies as $recensie) { $total += (int)$recensie['sterren']; } $total =
						$total / count($result_recensies); for ($i = 0; $i < $total; $i++) { echo "★"; } } ?>
					</p>
					<div class="prijs-button">
						<p class="prijs">
							Now from
							<span
								>€
								<?php echo $result['prijs'] ?></span
							>
						</p>
						<button>Book Now</button>
					</div>
				</div>
			</div>

			<div class="tabs">
				<ul>
					<li id="beschrijving_button" class="selected">Description</li>
					<li id="recensies_button" <?php 
				if (count($result_recensies) == 0) { echo "style='display: none;'"; } ?>>Reviews</li>
				</ul>

				<div id="beschrijving" class="main_beschrijving">
					<?php echo $result['beschrijving'] ?>					
				</div>

				<div id="recensies" class="recensies">
					<?php 

						foreach ($result_recensies as $recensie) {
							?>
					<div class="recensie">
						<p class="gebruiker_sterren">
							<?php echo $recensie['voornaam'] ?>
							-
							<span
								><?php
								for ($i = 0; $i < $recensie['sterren']; $i++)
								{
									echo "★";
								} 
								?></span
							>
						</p>
						<p class="beschrijving"><?php echo $recensie['beschrijving'] ?></p>
					</div>
					<?php
						}

					?>
				</div>
			</div>

			<div class="secondary_content"></div>
		</main>
	</body>

	<script src="js/reis.js"></script>
</html>
