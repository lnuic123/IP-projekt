<?php
session_start(); 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kladionica";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO korisnici (username, email, password)
VALUES ('".$_POST['username']."', '".$_POST['email']."', '".$_POST['psw']."')";

if ($conn->query($sql) === TRUE) {
	$_SESSION["loggedIn"] = "yes";
	$_SESSION['balance']= "0.00";
	$_SESSION["username"] = $_POST['username'];
    header( "Location: index.php" );
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>