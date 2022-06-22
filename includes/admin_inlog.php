<?php

require_once("connect.php");

session_start(); 

if (!isset($_SESSION["loggedin"]))
{
    header("location: index.php");
    exit();
}

if ($_SESSION['isAdmin'] != '1')
{
    header("location: index.php");
    exit();
}

?>