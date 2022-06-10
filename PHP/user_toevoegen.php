<?php
 
/*
* Write your logic to manage the data
* like storing data in database
*/
 
require_once("../includes/connect.php");
/**
* @var PDO $connect
*/

$sql = 'SELECT * FROM gebruikers WHERE email = :email';
$stmt = $connect->prepare($sql);
$stmt->bindParam(":email", $_POST["email"]);
$stmt->execute();
$result = $stmt->fetchAll(); 


$email_check = FALSE;

if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $email_check = TRUE;
}

if (count($result) == 0 && $email_check)
{
	$sql = 
'INSERT INTO gebruikers (voornaam, achternaam, email, wachtwoord, isAdmin)
VALUES (:voornaam, :achternaam, :email, :wachtwoord, 0)';
$stmt = $connect->prepare($sql);
$stmt->bindParam(":voornaam", $_POST["voornaam"]);
$stmt->bindParam(":wachtwoord", password_hash($_POST["wachtwoord"], PASSWORD_BCRYPT));
$stmt->bindParam(":achternaam", $_POST["achternaam"]);
$stmt->bindParam(":email", $_POST["email"]);
$result = $stmt->execute();
 
echo json_encode($result);
}

exit;
 
?>