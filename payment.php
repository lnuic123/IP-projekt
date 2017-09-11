<?php
session_start(); 
$conn = new mysqli("localhost", "root", "", "kladionica");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sum = floatval($_SESSION["balance"]) + $_POST["payment"];
$sql = "UPDATE korisnici SET balance=".$sum." WHERE username='".$_SESSION["username"]."'";
$_SESSION["balance"] = $sum;
if ($conn->query($sql) === TRUE) {
    $_SESSION["payment"] = "Uspješno uplaćeno";
    header( "Location: nadoplata.php" );
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?>