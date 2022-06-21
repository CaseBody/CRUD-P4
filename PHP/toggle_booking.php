<?php  
/*
* Write your logic to manage the data
* like storing data in database
*/
 
require_once("../includes/connect.php");
/**
* @var PDO $connect
*/

session_start(); 

if (!isset($_SESSION["loggedin"]))
{
    exit();
}

$sql = 'SELECT * FROM boekingen WHERE gebruikerid = :userid';
$stmt = $connect->prepare($sql);
$stmt->bindParam(":userid", $_POST["gebruikerid"]);
$stmt->execute();
$liked_boekingen = $stmt->fetchAll(); 

$has_liked = false;

foreach ($liked_boekingen as $boeking)
{
    if ($boeking['reisid'] == $_POST['id'])
    {
        $has_liked = true;
    }
}

if ($has_liked)
{
    $sql = 'DELETE FROM boekingen WHERE reisid = :id AND gebruikerid = :gebruikerid';
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":id", $_POST["id"]);
    $stmt->bindParam(":gebruikerid", $_POST["gebruikerid"]);
    $result = $stmt->execute();

    echo $result;
}
else
{
    $sql = 'INSERT INTO boekingen (gebruikerid, reisid)
    VALUES (:gebruikerid, :reisid)';
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":gebruikerid", $_POST["gebruikerid"]);
    $stmt->bindParam(":reisid", $_POST["id"]);
    $result = $stmt->execute();

    echo $result;
}


?>