<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kladionica</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
		$_SESSION['logintxt']= "";
		$_SESSION['payment']= "";
	}
	$_SESSION["payment"] = "";
	if($_SESSION["loggedIn"] == "yes") {
	echo "<nav class=\"navbar navbar-inverse navbar-static-top\" role=\"navigation\">
		<div class=\"container\">
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
		<div class=\"container\">
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
	

	<div class="container">
		<div class="row">
			<div class="col-sm-8" id="leftdiv">
				<table class="table table-condensed">
					<thead>
					<tr>
					<th>ID</th>
					<th>Vrijeme</th>
					<th>Španjolska 2. liga</th>
					<th>1</th>
					<th>X</th>
					<th>2</th>
					<th>1X</th>
					<th>X2</th>
					<th>12</th>
					</tr>
					</thead>
					<tbody>
					<tr><td>0</td><td>20:00</td> <td>Sevilla Atletico - Rayo Vallecano</td> <td class="matchlist">2.20</td><td class="matchlist">3.30</td><td class="matchlist">3.00</td><td class="matchlist">1.35</td><td class="matchlist">1.30</td><td class="matchlist">1.55</td></tr>
					<tr><td>1</td><td>19:30</td> <td>Levante UD - SD Huesca</td> <td class="matchlist">3.45</td><td class="matchlist">3.30</td><td class="matchlist">2.00</td><td class="matchlist">1.65</td><td class="matchlist">1.30</td><td class="matchlist">1.25</td></tr>
					<tr><td>2</td><td>19:30</td> <td>Alcorcon AD - CD Lugo </td><td class="matchlist">1.40</td><td class="matchlist">4.05</td><td class="matchlist">7.25</td><td class="matchlist">1.10</td><td class="matchlist">1.20</td><td class="matchlist">2.40</td></tr>
					<tr><td>3</td><td>19:30</td> <td>Gimnastic de Tarragona - Ucam Murcia</td> <td class="matchlist">2.15</td><td class="matchlist">3.15</td><td class="matchlist">3.20</td><td class="matchlist">1.30</td><td class="matchlist">1.30</td><td class="matchlist">1.60</td></tr>
					<tr><td>4</td><td>19:30</td> <td>Real Zaragoza - Tenerife CD</td> <td class="matchlist">3.15</td><td class="matchlist">3.15</td><td class="matchlist">2.20</td><td class="matchlist">1.55</td><td class="matchlist">1.30</td><td class="matchlist">1.30</td></tr>
					<tr><td>5</td><td>19:30</td> <td>Cordoba CF - Girona FC</td> <td class="matchlist">2.50</td><td class="matchlist">2.20</td><td class="matchlist">4.30</td><td class="matchlist">1.20</td><td class="matchlist">1.55</td><td class="matchlist">1.45</td></tr>
					<tr><td>6</td><td>19:30</td> <td>Elche CF - Real Oviedo</td> <td class="matchlist">5.25</td><td class="matchlist">3.80</td><td class="matchlist">1.60</td><td class="matchlist">2.10</td><td class="matchlist">1.22</td><td class="matchlist">1.15</td></tr>
					<tr><td>7</td><td>19:30</td> <td>Real Valladolid - Cadiz CF</td> <td class="matchlist">1.45</td><td class="matchlist">4.00</td><td class="matchlist">6.25</td><td class="matchlist">1.12</td><td class="matchlist">1.20</td><td class="matchlist">2.30</td></tr>
					<tr><td>8</td><td>19:30</td> <td>UD Almeria - CF Reus Deportiu</td> <td class="matchlist">1.30</td><td class="matchlist">4.55</td><td class="matchlist">9.50</td><td class="matchlist">1.07</td><td class="matchlist">1.16</td><td class="matchlist">2.80</td></tr>
					<tr><td>9</td><td>19:30</td> <td>RCD Mallorca - Getafe CF</td> <td class="matchlist">2.85</td><td class="matchlist">3.15</td><td class="matchlist">2.35</td><td class="matchlist">1.50</td><td class="matchlist">1.30</td><td class="matchlist">1.35</td></tr>
					<tr><td>10</td><td>17:00</td> <td>Numancia CD - CD Mirandes</td> <td class="matchlist">1.80</td><td class="matchlist">3.40</td><td class="matchlist">4.05</td><td class="matchlist">1.22</td><td class="matchlist">1.25</td><td class="matchlist">1.80</td></tr>
					</tbody>
				</table>
				<table class="table table-condensed">
					<thead>
					<tr>
					<th>ID</th>
					<th>Vrijeme</th>
					<th>Prijateljske međunarodne</th>
					<th>1</th>
					<th>X</th>
					<th>2</th>
					<th>1X</th>
					<th>X2</th>
					<th>12</th>
					</tr>
					</thead>
					<tbody>
					<tr><td>11</td><td>20:00</td> <td>Peru - Paraguay</td> <td class="matchlist">2.20</td><td class="matchlist">3.30</td><td class="matchlist">3.00</td><td class="matchlist">1.35</td><td class="matchlist">1.30</td><td class="matchlist">1.55</td></tr>
					<tr><td>12</td><td>19:30</td> <td>Venezuela - Ecuador</td> <td class="matchlist">3.45</td><td class="matchlist">3.30</td><td class="matchlist">2.00</td><td class="matchlist">1.65</td><td class="matchlist">1.30</td><td class="matchlist">1.25</td></tr>
					<tr><td>13</td><td>19:30</td> <td>Argentina - Brazil</td><td class="matchlist">1.40</td><td class="matchlist">4.05</td><td class="matchlist">7.25</td><td class="matchlist">1.10</td><td class="matchlist">1.20</td><td class="matchlist">2.40</td></tr>
					<tr><td>14</td><td>19:30</td> <td>Russia - Chile</td> <td class="matchlist">2.15</td><td class="matchlist">3.15</td><td class="matchlist">3.20</td><td class="matchlist">1.30</td><td class="matchlist">1.30</td><td class="matchlist">1.60</td></tr>
					<tr><td>15</td><td>20:00</td> <td>Grenada - Bermuda</td> <td class="matchlist">2.20</td><td class="matchlist">3.30</td><td class="matchlist">3.00</td><td class="matchlist">1.35</td><td class="matchlist">1.30</td><td class="matchlist">1.55</td></tr>
					<tr><td>16</td><td>19:30</td> <td>Belarus - New Zealand</td> <td class="matchlist">3.45</td><td class="matchlist">3.30</td><td class="matchlist">2.00</td><td class="matchlist">1.65</td><td class="matchlist">1.30</td><td class="matchlist">1.25</td></tr>
					<tr><td>17</td><td>19:30</td> <td>Latvia - Estonia</td><td class="matchlist">1.40</td><td class="matchlist">4.05</td><td class="matchlist">7.25</td><td class="matchlist">1.10</td><td class="matchlist">1.20</td><td class="matchlist">2.40</td></tr>
					<tr><td>18</td><td>19:30</td> <td>Australia - Brazil</td> <td class="matchlist">2.15</td><td class="matchlist">3.15</td><td class="matchlist">3.20</td><td class="matchlist">1.30</td><td class="matchlist">1.30</td><td class="matchlist">1.60</td></tr>
					</tbody>
				</table>
				<table class="table table-condensed">
					<thead>
					<tr>
					<th>ID</th>
					<th>Vrijeme</th>
					<th>Španjolska 2. liga B</th>
					<th>1</th>
					<th>X</th>
					<th>2</th>
					<th>1X</th>
					<th>X2</th>
					<th>12</th>
					</tr>
					</thead>
					<tbody>
					<tr><td>19</td><td>20:00</td> <td>Barcelona B FC - FC Cartagena</td> <td class="matchlist">1.20</td><td class="matchlist">3.30</td><td class="matchlist">3.00</td><td class="matchlist">1.35</td><td class="matchlist">1.30</td><td class="matchlist">1.55</td></tr>
					<tr><td>20</td><td>19:30</td> <td>Albacete Balompie - CD Atletico Baleares</td> <td class="matchlist">3.45</td><td class="matchlist">3.30</td><td class="matchlist">2.00</td><td class="matchlist">1.65</td><td class="matchlist">1.30</td><td class="matchlist">1.25</td></tr>
					<tr><td>21</td><td>19:30</td> <td>Racing Santander - CF Villanovense</td><td class="matchlist">1.40</td><td class="matchlist">4.05</td><td class="matchlist">7.25</td><td class="matchlist">1.10</td><td class="matchlist">1.20</td><td class="matchlist">2.40</td></tr>
					<tr><td>22</td><td>19:30</td> <td>Real Murcia CF - Valencia CF Mestalla</td> <td class="matchlist">2.15</td><td class="matchlist">3.15</td><td class="matchlist">3.20</td><td class="matchlist">1.30</td><td class="matchlist">1.30</td><td class="matchlist">1.60</td></tr>
					</tbody>
				</table>
				<table class="table table-condensed">
					<thead>
					<tr>
					<th>ID</th>
					<th>Vrijeme</th>
					<th>Španjolska 2. liga</th>
					<th>1</th>
					<th>X</th>
					<th>2</th>
					<th>1X</th>
					<th>X2</th>
					<th>12</th>
					</tr>
					</thead>
					<tbody>
					<tr><td>23</td><td>20:00</td> <td>Sevilla Atletico - Rayo Vallecano</td> <td class="matchlist">2.20</td><td class="matchlist">3.30</td><td class="matchlist">3.00</td><td class="matchlist">1.35</td><td class="matchlist">1.30</td><td class="matchlist">1.55</td></tr>
					<tr><td>24</td><td>19:30</td> <td>Levante UD - SD Huesca</td> <td class="matchlist">3.45</td><td class="matchlist">3.30</td><td class="matchlist">2.00</td><td class="matchlist">1.65</td><td class="matchlist">1.30</td><td class="matchlist">1.25</td></tr>
					<tr><td>25</td><td>19:30</td> <td>Alcorcon AD - CD Lugo </td><td class="matchlist">1.40</td><td class="matchlist">4.05</td><td class="matchlist">7.25</td><td class="matchlist">1.10</td><td class="matchlist">1.20</td><td class="matchlist">2.40</td></tr>
					<tr><td>26</td><td>19:30</td> <td>Gimnastic de Tarragona - Ucam Murcia</td> <td class="matchlist">2.15</td><td class="matchlist">3.15</td><td class="matchlist">3.20</td><td class="matchlist">1.30</td><td class="matchlist">1.30</td><td class="matchlist">1.60</td></tr>
					<tr><td>27</td><td>19:30</td> <td>Real Zaragoza - Tenerife CD</td> <td class="matchlist">3.15</td><td class="matchlist">3.15</td><td class="matchlist">2.20</td><td class="matchlist">1.55</td><td class="matchlist">1.30</td><td class="matchlist">1.30</td></tr>
					<tr><td>28</td><td>19:30</td> <td>Cordoba CF - Girona FC</td> <td class="matchlist">2.50</td><td class="matchlist">2.20</td><td class="matchlist">4.30</td><td class="matchlist">1.20</td><td class="matchlist">1.55</td><td class="matchlist">1.45</td></tr>
					<tr><td>29</td><td>19:30</td> <td>Elche CF - Real Oviedo</td> <td class="matchlist">5.25</td><td class="matchlist">3.80</td><td class="matchlist">1.60</td><td class="matchlist">2.10</td><td class="matchlist">1.22</td><td class="matchlist">1.15</td></tr>
					<tr><td>30</td><td>19:30</td> <td>Real Valladolid - Cadiz CF</td> <td class="matchlist">1.45</td><td class="matchlist">4.00</td><td class="matchlist">6.25</td><td class="matchlist">1.12</td><td class="matchlist">1.20</td><td class="matchlist">2.30</td></tr>
					<tr><td>31</td><td>19:30</td> <td>UD Almeria - CF Reus Deportiu</td> <td class="matchlist">1.30</td><td class="matchlist">4.55</td><td class="matchlist">9.50</td><td class="matchlist">1.07</td><td class="matchlist">1.16</td><td class="matchlist">2.80</td></tr>
					<tr><td>32</td><td>19:30</td> <td>RCD Mallorca - Getafe CF</td> <td class="matchlist">2.85</td><td class="matchlist">3.15</td><td class="matchlist">2.35</td><td class="matchlist">1.50</td><td class="matchlist">1.30</td><td class="matchlist">1.35</td></tr>
					<tr><td>33</td><td>17:00</td> <td>Numancia CD - CD Mirandes</td> <td class="matchlist">1.80</td><td class="matchlist">3.40</td><td class="matchlist">4.05</td><td class="matchlist">1.22</td><td class="matchlist">1.25</td><td class="matchlist">1.80</td></tr>
					</tbody>
				</table>
			</div>

			<div class="col-sm-4" id="rightdiv">
				<div id="FixedDiv" class="flex-container">
					<!-- Picked match list div -->
			<?php
			if($_SESSION["loggedIn"] == "yes") {
				echo "<div id=\"table-wrapper\">
					  <div id=\"table-scroll\">
					  <table class=\"table table-condensed\" id=\"matchlisttablebody\">
					</table>  </div>
					</div>
					<div id=\"lefttext\" style=\"color: #aaaaaa; text-align: center; font-size: 1.5em;\">Krenite sa odabirom</div>
					<form action=\"ticketpay.php\" method=\"post\">
						<div class=\"container\" style=\"height: 160px;flex: 1;\">
							<label><b>Ulog:</b></label><br>
							<input type=\"text\" placeholder=\"Unesite ulog\" name=\"payment\" id=\"ulogtxt\" required>
							<div id=\"koeftext\" style=\"margin-top : 5px \">Koef: 0</div>
							<div id=\"wintext\">Dobitak: 0 kn</div>
							<div class=\"clearfix\">
								<button type=\"submit\" class=\"signupbtn\"\">Uplata</button>
							</div>
						</div>
					</form>";
			} 
			else{ 
				echo "<div id=\"table-wrapper\">
					  <div id=\"table-scroll\">
					  <table class=\"table table-condensed\" id=\"matchlisttablebody\">
					</table>  </div>
					</div>
					<div id=\"lefttext\" style=\"color: #aaaaaa; text-align: center; font-size: 1.5em;\">Krenite sa odabirom</div><br>
					<div class=\"container\" style=\"height: 160px;flex: 1;\">
						<a href=\"prijava.php\" style=\"color: black; text-align: center; font-size: 1.5em; margin-left:20px;\"><b>Prijavite se za uplatu</b></a>
					</div>";
			}
			?>
					

				</div>
			</div>
		</div>
	</div>
	<div class="jumbotron text-center" id="footer">
		<div id="title">Druga Sportska Kladionica © 2017. sva prava pridržana | Klađenje je dozvoljeno osobama starijima od 18 godina.</div>
	</div>

	<script src="js/mainscript.js"></script>
</body>
</html>
