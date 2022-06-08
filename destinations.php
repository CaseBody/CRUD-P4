<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Destinations</title>
		<link rel="stylesheet" href="CSS/styles.css" />
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
					<div class="categorie_content" id="categorie_test">
						<?php 
							foreach ($result as $reis) {

								?>
								<div class="item" onclick="window.location='<?php echo 'reis.php?id=' . $reis['id'] ?>'">
								<img src="<?php echo $reis['afbeelding'] ?>" alt="">
								<p class="reis_id" style="display: none;"><?php echo $reis['id'] ?></p>
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

<script src="js/destinations.js"></script>
