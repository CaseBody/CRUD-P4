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
		require_once("includes/connect.php");

		$sql = 'SELECT * FROM reis ORDER BY rand()';
		$stmt = $connect->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();
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

			<div class="recommended" id="recommended">
				<div class="left">
					<?php $item = $result[0] ?>
					<div style="background-image: url('<?php echo $item['afbeelding'] ?>');" class="item">
							<p class="titel"><?php echo $item['naam']?></p>
							<p class="sub_titel"><?php echo $item['locatie']?></p>
							<p class="price">Now from € <?php echo $item['prijs']?></p>

					</div>
				</div>
				
				<?php $item = $result[1] ?>
				<div class="right">
					<div style="background-image: url('<?php echo $item['afbeelding'] ?>');" class="item">
						<p class="titel"><?php echo $item['naam']?></p>
						<p class="sub_titel"><?php echo $item['locatie']?></p>
						<p class="price">Now from € <?php echo $item['prijs']?></p>
					</div>
				<?php $item = $result[2] ?>
					<div style="background-image: url('<?php echo $item['afbeelding'] ?>');" class="item">
						<p class="titel"><?php echo $item['naam']?></p>
						<p class="sub_titel"><?php echo $item['locatie']?></p>
						<p class="price">Now from € <?php echo $item['prijs']?></p>
					</div>
				</div>
			</div>
		</main>
		<?php
      require_once 'includes/footer.php';
    ?>
	</body>
</html>
