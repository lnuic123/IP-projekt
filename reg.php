<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Kladionica</title>
	<link rel="stylesheet" type="text/css" href="css/reg-style.css">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="jumbotron text-center">
		<div id="title">Druga sportska kladionica</div>
	</div>
	<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
		<div class="container" id="navcont">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button> 
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Početna</a></li>
					<li><a href="reg.php">Registracija</a></li>
					<li><a href="prijava.php">Prijava</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<form action="sendnew.php" method="post">
		<div class="container">
			<label><b>Korisničko ime</b></label><br>
			<input type="text" placeholder="Unesite korisničko ime" name="username" onfocusout="usernamecheck(value)" required>
			<div id="txtname" style="float: right;padding-right: 45%;padding-top: 1%;"><b></b></div><br>

			<label><b>Email</b></label><br>
			<input type="email" placeholder="Unesite email" name="email" onfocusout="emailcheck(value)" required>
			<div id="txtemail" style="float: right;padding-right: 45%;padding-top: 1%;"><b> </b></div><br>

			<label><b>Lozinka</b></label><br>
			<input type="password" placeholder="Unesite lozinku" name="psw" id="psw" required><br>

			<label><b>Ponovite lozinku</b></label><br>
			<input type="password" placeholder="Ponovite lozinku" name="psw-repeat" onfocusout="passwordcheck(value)" required>
			<div id="textpwd" style="float: right;padding-right: 45%;padding-top: 1%;"><b></b></div><br>
			<p>By creating an account you agree to our <a href="#">Terms and Privacy</a>.</p><br>

			<div class="clearfix">
				<button type="button"  class="cancelbtn" onclick="location.href='index.php'";">Povratak</button>
				<button type="submit" class="signupbtn"">Registriraj</button>
			</div>
		</div>
	</form>	

	<div class="jumbotron text-center" id="footer">
		<div id="title">Druga Sportska Kladionica © 2017. sva prava pridržana | Klađenje je dozvoljeno osobama starijima od 18 godina.</div>
	</div>
	<script src="js/regscript.js"></script>
</body>
</html>