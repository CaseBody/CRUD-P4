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

	$sql = "DELETE FROM recensies
    WHERE id = :id AND gebruikerid = :userid";

	$stmt = $connect->prepare($sql);
    $stmt->bindParam(":id", $_POST["id"]);
	$stmt->bindParam(":userid", $_SESSION["id"]);
	$stmt->execute();
	$result = $stmt->fetchAll();

	//echo
	echo 'juist'; 

	exit;

?>