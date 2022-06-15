<?php

	//connect to database
	require_once("../includes/connect.php");
	/**
	* @var PDO $connect
	*/
    session_start(); 

	if (!isset($_SESSION["loggedin"]))
	{
        echo 'login_error';
		exit();
	}

	$sql = "UPDATE gebruikers
    SET voornaam = :voornaam, achternaam = :achternaam, email = :email
    WHERE id = :id";

	$stmt = $connect->prepare($sql);
    $stmt->bindParam(":id", $_SESSION["id"]);
	$stmt->bindParam(":voornaam", $_POST["voornaam"]);
	$stmt->bindParam(":achternaam", $_POST["achternaam"]);
    $stmt->bindParam(":email", $_POST["email"]);
	$stmt->execute();
	$result = $stmt->fetchAll();

	//echo
	echo 'Formulier verzonden'; 

	exit;

?>