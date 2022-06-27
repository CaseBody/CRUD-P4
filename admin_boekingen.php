<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css" />
    <!-- icon page -->
    <link rel="icon" type="image/x-icon" href="Assets/afbeeldingen/logo.png" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet" />
    <title>Admin Bookings</title>
</head>
<body class="header_no_trans">
    <?php
    require_once 'includes/header.php';
    require_once "includes/connect.php";
    require_once "includes/admin_inlog.php";

    $sql = 'SELECT boekingen.id, gebruikers.voornaam, gebruikers.achternaam, reis.naam, reis.prijs
    FROM boekingen
    
    INNER JOIN gebruikers
    ON boekingen.gebruikerid = gebruikers.id
    
    INNER JOIN reis
    ON boekingen.reisid = reis.id';

    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    ?>

    <main class="admin_boekingen">
        <p class="titel">All booked destinations</p>
        <table>
            <tr>
                <td>BookingID</td>
                <td>User</td>
                <td>Destination</td>
                <td>Price</td>
            </tr>
            <?php foreach($result as $booking) {

            ?>
            <tr>
                <td><?php echo $booking['id'] ?></td>
                <td><?php echo $booking['voornaam'] . " " . $booking['achternaam'] ?></td>
                <td><?php echo $booking['naam'] ?></td>
                <td><?php echo $booking['prijs'] ?></td>
            </tr>

            <?php } ?>
        </table>
    </main>
</body>
</html>