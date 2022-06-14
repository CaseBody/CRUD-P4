<?php

	//connect to database
	require_once("../includes/connect.php");
	/**
	* @var PDO $connect
	*/

	$sql = 'INSERT INTO contact (first_name, last_name, email, tel, message)
	VALUES (:first_name, :last_name, :email, :tel, :message)';

	$stmt = $connect->prepare($sql);
	$stmt->bindParam(":first_name", $_POST["first_name"]);
	$stmt->bindParam(":last_name", $_POST["last_name"]);
    $stmt->bindParam(":email", $_POST["email"]);
	$stmt->bindParam(":tel", $_POST["tel"]);
	$stmt->bindParam(":message", $_POST["message"]);
	$stmt->execute();
	$result = $stmt->fetchAll();

	//echo
	echo 'Formulier verzonden'; 

	exit;

?>