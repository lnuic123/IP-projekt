<?php
session_start(); 
$n=0;
$con = mysqli_connect('localhost','root','','kladionica');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
$sql="SELECT * FROM korisnici";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
    if($_POST['username'] == $row['username'] && $_POST['psw'] == $row['password']){
		$_SESSION["loggedIn"] = "yes";
		$_SESSION["username"] = $_POST['username'];
		$_SESSION["balance"] = $row['balance'];
		$_SESSION['logintxt'] = "";
    	header( "Location: index.php" );
    }
    $n++;
}
if($n>0 and $_SESSION["loggedIn"] == "yes"){
	$_SESSION['logintxt'] = "";
	header( "Location: index.php" );

}
else if($n>0){
$_SESSION['logintxt'] = "Pogrešno korisničko ime ili lozinka";
header( "Location: prijava.php" );
}
?>