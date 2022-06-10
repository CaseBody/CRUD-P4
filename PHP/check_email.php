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

if (count($result) == 0 and $email_check)
{
    echo "juist";
}
else
{
    echo "fout";
}


exit;
 
?>