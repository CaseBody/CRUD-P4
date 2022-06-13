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

        $sql = 'SELECT * FROM opgeslagen_reizen 
        INNER JOIN reis on opgeslagen_reizen.reisid = reis.id
        WHERE opgeslagen_reizen.gebruikerid = :id';
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":id", $_SESSION["id"]);
        $stmt->execute();
        $result_opgeslagen = $stmt->fetchAll(); 
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
								<img src="Assets/afbeeldingen/placeholder.png" alt="placeholder" />
								<a href="" id="">Account</a>
							</div>
							<div class="link">
								<img src="Assets/afbeeldingen/placeholder.png" alt="placeholder" />
								<a href="" id="">Saved Destinations</a>
							</div>
							<div class="link">
								<img src="Assets/afbeeldingen/placeholder.png" alt="placeholder" />
								<a href="" id="">Booked Destinations</a>
							</div>
							<div class="link">
								<img src="Assets/afbeeldingen/placeholder.png" alt="placeholder" />
								<a href="" id="">Reviews</a>
							</div>
						</div>
					</div>

					<div class="right">
						<div class="account">
							<div class="cnt">
								<div class="acc_title">
									<p>Account Information</p>
								</div>

								<div class="inputs">
									<label class="acc_lbl" for="firstname">First Name</label>
									<input class="acc_inp" type="text" value="<?php echo $result_gebruiker['voornaam'] ?>" />

									<label class="acc_lbl" for="lastname">Last Name</label>
									<input class="acc_inp" type="text" value="<?php echo $result_gebruiker['achternaam'] ?>"/>

									<label class="acc_lbl" for="email">E-Mail</label>
									<input class="acc_inp" type="text" value="<?php echo $result_gebruiker['email'] ?>"/>
								</div>

								<button class="but_save" type="submit">Save</button>
							</div>
						</div>

						<div class="opgeslagen_reizen">
							<div class="cnt">
								<div class="opgesl_title">
									<p>Saved Destinations</p>
								</div>
								<div class="reizen">
                                    <?php 
                                    
                                    foreach ($result_opgeslagen as $opgeslagen)
                                    {
                                        ?>

                                        <div class="reis">
										    <img src="<?php echo $opgeslagen['afbeelding'] ?>" alt="placeholder" />
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
							<div class="cnt">
								<div class="geboekte_title">
									<p>Booked Destinations</p>
								</div>

								<div class="al_geboekte_reizen">
									<div class="reizen">
										<div class="reis">
											<img src="Assets/afbeeldingen/placeholder.png" alt="placeholder" />
											<p class="reis_hotel">Hotel Naam</p>
											<p class="reis_plaats">Plaats</p>
											<div class="rt_pr">
												<p class="rating">★★★★★</p>
												<p class="prijs">Vanaf € 90.00</p>
											</div>
										</div>

										<div class="reis">
											<img src="Assets/afbeeldingen/placeholder.png" alt="placeholder" />
											<p class="reis_hotel">Hotel Naam</p>
											<p class="reis_plaats">Plaats</p>
											<div class="rt_pr">
												<p class="rating">★★★★★</p>
												<p class="prijs">Vanaf € 90.00</p>
											</div>
										</div>

										<div class="reis">
											<img src="Assets/afbeeldingen/placeholder.png" alt="placeholder" />
											<p class="reis_hotel">Hotel Naam</p>
											<p class="reis_plaats">Plaats</p>
											<div class="rt_pr">
												<p class="rating">★★★★★</p>
												<p class="prijs">Vanaf € 90.00</p>
											</div>
										</div>

										<div class="reis">
											<img src="Assets/afbeeldingen/placeholder.png" alt="placeholder" />
											<p class="reis_hotel">Hotel Naam</p>
											<p class="reis_plaats">Plaats</p>
											<div class="rt_pr">
												<p class="rating">★★★★★</p>
												<p class="prijs">Vanaf € 90.00</p>
											</div>
										</div>

										<div class="reis">
											<img src="Assets/afbeeldingen/placeholder.png" alt="placeholder" />
											<p class="reis_hotel">Hotel Naam</p>
											<p class="reis_plaats">Plaats</p>
											<div class="rt_pr">
												<p class="rating">★★★★★</p>
												<p class="prijs">Vanaf € 90.00</p>
											</div>
										</div>

										<div class="reis">
											<img src="Assets/afbeeldingen/placeholder.png" alt="placeholder" />
											<p class="reis_hotel">Hotel Naam</p>
											<p class="reis_plaats">Plaats</p>
											<div class="rt_pr">
												<p class="rating">★★★★★</p>
												<p class="prijs">Vanaf € 90.00</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="reviews">
							<div class="cnt">
								<div class="review_title">
									<p>Reviews</p>
								</div>
								<div class="review_persoon">
									<p class="naam">gebruikersnaam</p>
									<p class="reisnaam">naam reis</p>
									<p class="rating">★★★★★</p>
									<p class="recensie">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ducimus voluptatibus at repellendus,
										tenetur et neque beatae libero impedit natus incidunt iusto aut quos itaque, maxime obcaecati, laudantium
										modi laborum! Ducimus repudiandae incidunt rerum aliquam accusamus nulla nihil voluptatum eveniet
										voluptas quo obcaecati sequi pariatur, alias voluptatibus est explicabo qui!
									</p>
								</div>

								<div class="review_persoon">
									<p class="naam">gebruikersnaam</p>
									<p class="reisnaam">naam reis</p>
									<p class="rating">★★★★★</p>
									<p class="recensie">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ducimus voluptatibus at repellendus,
										tenetur et neque beatae libero impedit natus incidunt iusto aut quos itaque, maxime obcaecati, laudantium
										modi laborum! Ducimus repudiandae incidunt rerum aliquam accusamus nulla nihil voluptatum eveniet
										voluptas quo obcaecati sequi pariatur, alias voluptatibus est explicabo qui!
									</p>
								</div>

								<div class="review_persoon">
									<p class="naam">gebruikersnaam</p>
									<p class="reisnaam">naam reis</p>
									<p class="rating">★★★★★</p>
									<p class="recensie">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ducimus voluptatibus at repellendus,
										tenetur et neque beatae libero impedit natus incidunt iusto aut quos itaque, maxime obcaecati, laudantium
										modi laborum! Ducimus repudiandae incidunt rerum aliquam accusamus nulla nihil voluptatum eveniet
										voluptas quo obcaecati sequi pariatur, alias voluptatibus est explicabo qui!
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</body>

    <script src="js/account.js"></script>
</html>
