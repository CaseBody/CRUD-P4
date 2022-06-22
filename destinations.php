<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Destinations</title>
		<!-- link css -->
		<link rel="stylesheet" href="CSS/styles.css" />
		<!-- icon page -->
	    <link rel="icon" type="image/x-icon" href="Assets/afbeeldingen/logo.png"/>
		<!-- fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	</head>
	<body class="destinations_pagina">
		<div class="content">

			<?php 
				include_once "includes/header.php";
				require_once("includes/connect.php");

				$sql = 'SELECT * FROM reis';
				$stmt = $connect->prepare($sql);
				$stmt->execute();
				$result = $stmt->fetchAll();

				session_start(); 

				if (isset($_SESSION["loggedin"]))
				{
					$sql = 'SELECT * FROM opgeslagen_reizen 
					WHERE opgeslagen_reizen.gebruikerid = :id';
	
					$stmt = $connect->prepare($sql);
					$stmt->bindParam(":id", $_SESSION["id"]);
					$stmt->execute();
					$result_opgeslagen = $stmt->fetchAll(); 
				}
			?>
			
			<div class="top">
				<p class="destinations_title">Discover the Travelegy destinations</p>
				<div class="search_bar">
					<input type="text" id="search_bar" placeholder="Search by name..." />
					<button id="search_button">Search</button>
				</div>
			</div>

			<div class="categories">
				<div class="categorie">
					<div class="categorie_content" id="categorie_content">
						<?php 
							foreach ($result as $reis) {

								?>
								<div class="item" onclick="window.location='<?php echo 'reis.php?id=' . $reis['id'] ?>'">
								<?php 
								if (isset($_SESSION['loggedin']))
								{
									$has_liked = false;

									foreach ($result_opgeslagen as $opgeslagen)
									{
										if ($opgeslagen['reisid'] == $reis['id'])
										{
											$has_liked = true;
										}
									}

									if ($has_liked)
									{
										?>
										<img src="Assets/afbeeldingen/heart_unsave.png" onclick="toggleLike(event, <?php echo 'this, ' . $reis['id'] . ', ' . $_SESSION['id'] ?>)" class="save_heart" id="save_heart" alt="">

										<?php
									}
									else
									{
										?>
										<img src="Assets/afbeeldingen/heart_save.png" onclick="toggleLike(event, <?php echo 'this, ' . $reis['id'] . ', ' . $_SESSION['id'] ?>)" class="save_heart" id="save_heart" alt="">
										<?php										
									}
								}
								?>
								<img src="<?php echo $reis['afbeelding'] ?>" alt="">
								<div class="bottom">
									<p class="title"><?php echo $reis['naam'] ?></p>
									<p class="locatie"><?php echo $reis['locatie'] ?></p>
									<p class="prijs">From<span> € <?php echo $reis['prijs'] ?></span></p>
								</div>
						</div>
								<?php
							}
						?>
					</div>
				</div>
			</div>

			<?php 
		include_once "includes/footer.php";
	?>
		</div>
	</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="js/destinations.js"></script>
