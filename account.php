<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <!-- link css -->
    <link rel="stylesheet" href="CSS/styles.css" />
    <!-- icon page -->
    <link rel="icon" type="image/x-icon" href="Assets/afbeeldingen/logo.png"/>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
    <?php
        require_once 'includes/header.php';
    ?>
<body>
    <main>
        <div class="container_account">
            <div class="bottom">
                <div class="left">
                    <div class="nav_title">
                        <p>My Account</p>
                    </div>

                    <div class="nav">
                        <div class="link">
                            <img src="Assets/afbeeldingen/placeholder.png" alt="placeholder">
                            <a href="" id="">bookings</a>
                        </div>
                        <div class="link">
                            <img src="Assets/afbeeldingen/placeholder.png" alt="placeholder">
                            <a href="" id="">Opgeslagen Reizen</a>
                        </div>
                        <div class="link">
                            <img src="Assets/afbeeldingen/placeholder.png" alt="placeholder">
                            <a href="" id="">bookings</a>
                        </div>
                        <div class="link">
                            <img src="Assets/afbeeldingen/placeholder.png" alt="placeholder">
                            <a href="" id="">bookings</a>
                        </div>
                        <div class="link">
                            <img src="Assets/afbeeldingen/placeholder.png" alt="placeholder">
                            <a href="" id="">bookings</a>
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
                                <input class="acc_inp" type="text">

                                <label class="acc_lbl" for="lastname">Last Name</label>
                                <input class="acc_inp" type="text">

                                <label class="acc_lbl" for="email">E-Mail</label>
                                <input class="acc_inp" type="text" placeholder="example@example.com">

                                <label class="acc_lbl" for="birthday">Birth Date</label>
                                <input class="acc_inp" type="date">
                            </div>
                        </div>
                    </div>

                    <div class="opgeslagen_reizen">
                        <div class="cnt">
                            <div class="opgesl_title">
                                <p>Opgeslagen Reizen</p>
                            </div>
                            <div class="reizen">
                                <div class="reis">
                                    <img src="" alt="">
                                    <p></p>
                                    <p></p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>