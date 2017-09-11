<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Kladionica</title>
	<link rel="stylesheet" type="text/css" href="css/nadoplata.css">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="jumbotron text-center">
		<div id="title">Druga sportska kladionica</div>
	</div>
	<?php
	session_start(); 

	if(!isset($_SESSION['loggedIn'])){
		$_SESSION['loggedIn']="no";
		$_SESSION['balance']= "0.00";
	}

	if($_SESSION["loggedIn"] == "yes") {
	echo "<nav class=\"navbar navbar-inverse navbar-static-top\" role=\"navigation\">
		<div class=\"container\" id=\"navcont\">
			<div class=\"navbar-header\">
				<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
					<span class=\"sr-only\">Toggle navigation</span>
					<span class=\"icon-bar\"></span>
					<span class=\"icon-bar\"></span>
					<span class=\"icon-bar\"></span>
					<span class=\"icon-bar\"></span>
				</button> 
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
				<ul class=\"nav navbar-nav\">
					<li><a href=\"index.php\">Početna</a></li>
					<li><a href=\"#\" class=\"not-active\">".$_SESSION['username']."</a></li>
					<li><a href=\"#\" class=\"not-active\">".$_SESSION['balance']." kn</a></li>
					<li><a href=\"nadoplata.php\">Uplata</a></li>
					<li><a href=\"logout.php\">Odjava</a></li>
				</ul>
			</div>
		</div>
	</nav>";
	 } else { 
	echo "<nav class=\"navbar navbar-inverse navbar-static-top\" role=\"navigation\">
		<div class=\"container\" id=\"navcont\">
			<div class=\"navbar-header\">
				<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
					<span class=\"sr-only\">Toggle navigation</span>
					<span class=\"icon-bar\"></span>
					<span class=\"icon-bar\"></span>
				</button> 
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
				<ul class=\"nav navbar-nav\">
					<li><a href=\"index.php\">Početna</a></li>
					<li><a href=\"reg.php\">Registracija</a></li>
					<li><a href=\"prijava.php\">Prijava</a></li>
				</ul>
			</div>
		</div>
	</nav>";
	}
	?>
	<form action="payment.php" method="post">
		<div class="container" style="height: 10px;">
			<label><b>Količina:</b></label><br>
			<input type="text" placeholder="Unesite svotu novca" name="payment" onfocus="deltextfield()" required>
			<div id="txtname" style="color: green;">
			<?php
			echo $_SESSION["payment"];
			?></div><br>

			<div class="clearfix">
				<button type="submit" class="signupbtn"">Uplata</button>
			</div>
		</div>
	</form>	

	<div class="jumbotron text-center" id="footer">
		<div id="title">Druga Sportska Kladionica © 2017. sva prava pridržana | Klađenje je dozvoljeno osobama starijima od 18 godina.</div>
	</div>
	<script type="text/javascript">
		function deltextfield() {
			document.getElementById('txtname').innerHTML = "";
		 } 
	</script>
	<script src="js/regscript.js"></script>
</body>
</html>