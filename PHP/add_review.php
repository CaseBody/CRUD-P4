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

    $sql = "SELECT * FROM recensies WHERE gebruikerid = :gebruikerid AND reisid = :reisid";

	$stmt = $connect->prepare($sql);
    $stmt->bindParam(":reisid", $_POST["id"]);
	$stmt->bindParam(":gebruikerid", $_SESSION["id"]);
	$stmt->execute();
	$result_recensies = $stmt->fetchAll();

    $sql = "SELECT * FROM boekingen WHERE gebruikerid = :gebruikerid AND reisid = :reisid";

	$stmt = $connect->prepare($sql);
    $stmt->bindParam(":reisid", $_POST["id"]);
	$stmt->bindParam(":gebruikerid", $_SESSION["id"]);
	$stmt->execute();
	$result_boeking = $stmt->fetchAll();

    if (count($result_recensies) != 0 or count($result_boeking) == 0)
    {
        echo 'fout';
        exit();
    }

	$sql = "INSERT INTO recensies (gebruikerid, reisid, beschrijving, sterren, isBevestigd)
    VALUES (:gebruikerid, :reisid, :beschrijving, :sterren, 0)";

	$stmt = $connect->prepare($sql);
    $stmt->bindParam(":reisid", $_POST["id"]);
    $stmt->bindParam(":beschrijving", $_POST["beschrijving"]);
    $stmt->bindParam(":sterren", $_POST["sterren"]);
	$stmt->bindParam(":gebruikerid", $_SESSION["id"]);
	$stmt->execute();
	$result = $stmt->fetchAll();

	//echo
	echo 'juist'; 

	exit;

?>