<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css" />
    <title>TRAVELEGY - Admin Panel</title>
</head>

    <?php
        require_once("includes/connect.php");

		$sql = 'SELECT * FROM reis';
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
    ?>
<body>
    <main>
        <div class="container_admin">
            <p class="title">Welcome to TRAVELEGY - Admin Panel</p>

            <div class="all_data">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Naam</th>
                        <th>Locatie</th>
                        <th>Afbeelding</th>
                        <th>Prijs</th>
                        <th>Beschrijving</th>
                        <th class="th_actions">Actions</th>
                    </tr>
                    <tr>
                    <?php
                        foreach($result as $res){
                        ?>
                        <td><?php echo $res['id'] ?></td>
                        <td><?php echo $res['naam'] ?></td>
                        <td><?php echo $res['locatie'] ?></td>
                        <td><?php echo $res['afbeelding'] ?></td>
                        <td><?php echo $res['prijs'] ?></td>
                        <td class="td_beschrijving"><?php echo $res['beschrijving'] ?></td>
                        <td class="td_actions">
                            <a href="admin_bewerk.php?id=<?php echo $res['id'] ?>">
                                <img class="edit" src="Assets/afbeeldingen/edit.png" alt="edit">
                            </a>
                            <a href="admin_show.php?id=<?php echo $res['id'] ?>">
                                <img class="show" src="Assets/afbeeldingen/show.png" alt="show">
                            </a>
                            <a href="admin_create.php">
                                <img class="create" src="Assets/afbeeldingen/create.png" alt="create">
                            </a>
                            <a href="PHP/delete_item.php?id=<?php echo $res['id'] ?>">
                                <img class="delete" src="Assets/afbeeldingen/delete.png" alt="delete">
                            </a>
                        </td>
                    </tr>
                    <?php
                    }
                ?>
                </table>
            </div>
        </div>
    </main>
</body>
</html>