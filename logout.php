<?php
session_start(); 
$_SESSION["loggedIn"] = "no";
header( "Location: index.php" );
?>