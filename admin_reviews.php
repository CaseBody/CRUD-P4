<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="CSS/styles.css" />
		<!-- icon page -->
		<link rel="icon" type="image/x-icon" href="Assets/afbeeldingen/logo.png" />
		<!-- fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet" />
		<title>Review Page</title>
	</head>

	<?php
		require_once "includes/connect.php";
        require_once("includes/admin_inlog.php");
        
        $sql = 'SELECT recensies.id, recensies.beschrijving, recensies.sterren, recensies.isbevestigd, gebruikers.voornaam FROM recensies 
        INNER JOIN gebruikers ON recensies.gebruikerid=gebruikers.id 
        WHERE recensies.isbevestigd = 0'; 
        $stmt = $connect->prepare($sql); 
        $stmt->execute();
		$result = $stmt->fetchAll(); 
        ?>

	<body class="header_no_trans">
		<?php
        require_once 'includes/header.php';
    ?>
		<main>
			<div class="container_reviews">
				<div class="all_reviews">
					<?php
                    foreach($result as $recensie){
                ?>
					<div class="recensie">
						<p class="naam_sterren">
							<span><?php echo $recensie['id'] ?></span>
							-
							<?php echo ' ' . $recensie['voornaam']?>
							-
							<?php
                            for ($i = 0; $i < $recensie['sterren']; $i++)
                            {
                                echo "★";
                            } 
                        ?>
						</p>
						<div class="beschrijving">
							<p><?php echo $recensie['beschrijving'] ?></p>
							<div class="yes_no">
								<img class="img" src="Assets/afbeeldingen/check.png" alt="accept" />
								<img class="img" src="Assets/afbeeldingen/red-cross.png" alt="decline" />
							</div>
						</div>
                    </div>
						<?php
                    }
                ?>
				</div>
			</div>
		</main>
	</body>
	<script 
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous">
    </script>
    <script src="js/reviews.js"></script>
</html>
