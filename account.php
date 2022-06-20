<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Account</title>
		<!-- link css -->
		<link rel="stylesheet" href="CSS/styles.css" />
		<!-- icon page -->
		<link rel="icon" type="image/x-icon" href="Assets/afbeeldingen/logo.png" />
		<!-- fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet" />
	</head>
	<?php
        require_once("includes/connect.php");

        session_start(); 

        if (!isset($_SESSION["loggedin"]))
        {
            header("location: login.php");
            exit();
        }

        $sql = 'SELECT * FROM gebruikers WHERE id = :id';
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":id", $_SESSION["id"]);
        $stmt->execute();
        $result_gebruiker = $stmt->fetchAll(); 

        $result_gebruiker = $result_gebruiker[0];

        $sql = 'SELECT opgeslagen_reizen.gebruikerid, opgeslagen_reizen.reisid, reis.id, reis.naam, reis.locatie, reis.afbeelding, reis.prijs, reis.beschrijving  FROM opgeslagen_reizen 
        INNER JOIN reis on opgeslagen_reizen.reisid = reis.id
        WHERE opgeslagen_reizen.gebruikerid = :id';
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":id", $_SESSION["id"]);
        $stmt->execute();
        $result_opgeslagen = $stmt->fetchAll(); 

		$sql = 'SELECT * FROM boekingen 
        INNER JOIN reis on boekingen.reisid = reis.id
        WHERE boekingen.gebruikerid = :id';
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":id", $_SESSION["id"]);
        $stmt->execute();
        $result_boekingen = $stmt->fetchAll(); 

		$sql = 'SELECT recensies.id, recensies.gebruikerid, recensies.reisid, recensies.beschrijving, recensies.sterren, gebruikers.voornaam, reis.naam FROM recensies 
		INNER JOIN gebruikers ON recensies.gebruikerid=gebruikers.id
		INNER JOIN reis ON recensies.reisid=reis.id 
		WHERE recensies.gebruikerid = :id'; 
		$stmt = $connect->prepare($sql); 
		$stmt->bindParam('id', $_SESSION['id']); 
		$stmt->execute(); 
		$result_recensies =	$stmt->fetchAll(); 
    ?>
	<body>
		<main class="header_no_trans">
            <?php 
                    require_once 'includes/header.php';

            ?>

			<div class="container_account">
				<div class="bottom">
					<div class="left">
						<div class="nav_title">
							<p>My Account</p>
						</div>

						<div class="nav">
							<div class="link">
								<img src="Assets/afbeeldingen/account.png" alt="placeholder" />
								<p href="" id="nav_account">Account</p>
							</div>
							<div class="link">
								<img src="Assets/afbeeldingen/heart.png" alt="placeholder" />
								<p href="" id="nav_saved">Saved Destinations</p>
							</div>
							<div class="link">
								<img src="Assets/afbeeldingen/dollar.png" alt="placeholder" />
								<p href="" id="nav_booked">Booked Destinations</p>
							</div>
							<div class="link">
								<img src="Assets/afbeeldingen/star.png" alt="placeholder" />
								<p href="" id="nav_review">Reviews</p>
							</div>
						</div>
					</div>

					<div class="right">
						<div class="account">
							<div class="cnt" id="account">
								<div class="acc_title">
									<p>Account Information</p>
								</div>

								<div class="inputs">
									<label class="acc_lbl" for="firstname">First Name</label>
									<input class="acc_inp" id="first_name" type="text" value="<?php echo $result_gebruiker['voornaam'] ?>" />

									<label class="acc_lbl" for="lastname">Last Name</label>
									<input class="acc_inp" id="last_name" type="text" value="<?php echo $result_gebruiker['achternaam'] ?>"/>

									<label class="acc_lbl" for="email">E-Mail</label>
									<input class="acc_inp" id="email" type="text" value="<?php echo $result_gebruiker['email'] ?>"/>

									<label class="acc_lbl" style="display: none;" id="account_status_text">Status Text</label>
								</div>

								<button class="but_save" id="account_save" type="submit">Save</button>
							</div>
						</div>

						<div class="opgeslagen_reizen">
							<div class="cnt" id="saved">
								<div class="opgesl_title">
									<p>Saved Destinations</p>
								</div>
								<div class="reizen">
                                    <?php 
                                    
                                    foreach ($result_opgeslagen as $opgeslagen)
                                    {
                                        ?>

                                        <div class="reis"  onclick="window.location='<?php echo 'reis.php?id=' . $opgeslagen['id'] ?>'">
											<img src="Assets/afbeeldingen/heart_unsave.png" onclick="removeLike(<?php echo 'event, this, ' . $opgeslagen['id'] . ', ' . $_SESSION['id'] ?>)" class="save_heart" id="save_heart" alt="">
										    <img class="afbeelding" src="<?php echo $opgeslagen['afbeelding'] ?>" alt="placeholder" />
										    <p class="reis_hotel"><?php echo $opgeslagen['naam'] ?></p>
										    <p class="reis_plaats"><?php echo $opgeslagen['locatie'] ?></p>
										    <div class="rt_pr">
											    <p class="prijs">From € <?php echo $opgeslagen['prijs'] ?></p>
										    </div>
									    </div>

                                        <?php

                                    }

                                    ?>
								</div>
							</div>
						</div>

						<div class="geboekte_reizen">
							<div class="cnt" id="booked">
								<div class="geboekte_title">
									<p>Booked Destinations</p>
								</div>

								<div class="al_geboekte_reizen">
									<div class="reizen">
									<?php 
                                    
                                    foreach ($result_boekingen as $opgeslagen)
                                    {
                                        ?>

                                        <div class="reis" onclick="window.location='<?php echo 'reis.php?id=' . $opgeslagen['id'] ?>'">
										    <img class="afbeelding" src="<?php echo $opgeslagen['afbeelding'] ?>" alt="placeholder" />
										    <p class="reis_hotel"><?php echo $opgeslagen['naam'] ?></p>
										    <p class="reis_plaats"><?php echo $opgeslagen['locatie'] ?></p>
										    <div class="rt_pr">
											    <p class="prijs">From € <?php echo $opgeslagen['prijs'] ?></p>
										    </div>
									    </div>

                                        <?php

                                    }

                                    ?>
									</div>
								</div>
							</div>
						</div>

						<div class="reviews">
							<div class="cnt" id="review">
								<div class="review_title">
									<p>Reviews</p>
								</div>
								<?php 
                                    
                                    foreach ($result_recensies as $opgeslagen)
                                    {
                                        ?>

										<div class="review_persoon">	
											<img src="Assets/afbeeldingen/delete_icon.png" onclick="removeReview(this, <?php echo $opgeslagen['id'] ?>)" class="delete_icon" id="delete_icon" alt="">	
											<p class="naam"><?php echo $opgeslagen['voornaam'] ?></p>
											<p class="reisnaam"><?php echo $opgeslagen['naam'] ?></p>
											<p class="rating"> <?php
												for ($i = 0; $i < $opgeslagen['sterren']; $i++)
												{
													echo "★";
												} 
												?></p>
											<p class="recensie">
												<?php echo $opgeslagen['beschrijving'] ?>
											</p>
										</div>

                                        <?php

                                    }

                                    ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</body>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="js/account.js"></script>
</html>
