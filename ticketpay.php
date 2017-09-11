<?php
session_start();
$_SESSION['balance'] -= $_POST["payment"];

$conn = new mysqli('localhost','root','','kladionica');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE korisnici SET balance='".$_SESSION['balance']."' WHERE username='username1'";

if ($conn->query($sql) === TRUE) {
	header( "Location: index.php" );
} else {
    echo "Error updating record: " . $conn->error;
}

?>