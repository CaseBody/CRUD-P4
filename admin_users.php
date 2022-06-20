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
    <title>Users</title>
</head>
    <?php
        require_once 'includes/header.php';
        require_once "includes/connect.php";

		$sql = 'SELECT * FROM gebruikers';
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
    ?>
<body>
    <main>
        <div class="container_users">
            <p class="user_titel">Users</p>
            <!-- <p>Alle gebruikers zijn Admin!</p> -->
            <div class="users">
                <div class="user_data">
                    <table class="table">
                        <tr>
                            <th>Email</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Make Admin</th>
                        </tr>
                        <tr>
                        <?php
                            foreach($result as $user){
                            ?>
                            <td><?php echo $user['email'] ?></td>
                            <td><?php echo $user['voornaam'] ?></td>
                            <td><?php echo $user['achternaam'] ?></td>
                            <td><input type="checkbox"></td>
                        </tr>
                        <?php
                        }
                    ?>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>
</html>