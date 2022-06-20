<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css" />
    <!-- icon page -->
    <link rel="icon" type="image/x-icon" href="Assets/afbeeldingen/.png" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet" />
    <title>Review Page</title>
</head>

    <?php
		require_once "includes/connect.php";

		$sql = 'SELECT * FROM recensies, gebruikers';
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
                        <?php echo $recensie['voornaam']?>
                        -
                        <span>
                            <?php
                            for ($i = 0; $i < $recensie['sterren'], $i++;)
                            {
                                echo "★";
                            }
                            ?></span>
                    </p>
                    <p class="beschrijving">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque iste incidunt voluptate error id, quas ratione, vitae dolores consectetur consequatur adipisci earum corporis, neque repudiandae! Nulla enim sed ipsum consequuntur itaque a assumenda veritatis delectus aliquid commodi blanditiis quo placeat, odio vitae amet? Ducimus distinctio molestias asperiores labore reprehenderit omnis.
                    </p>
                    <?php
                    }
                ?>
				</div>
            </div>
        </div>
    </main>
</body>
</html>