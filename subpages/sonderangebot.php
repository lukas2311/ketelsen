<!doctype html>
<html>
	<head>
		<?php
			$rel_path = "../";
			$page_title = "Startseite";
			include($rel_path . "layout/head.php")
		?>
	</head>
	<body>
		<?php 
			$rel_path = "../";
			include($rel_path . "layout/header.php");
		?>
<!----------------------------------------------------------->
	<!-- CONTENT HERE -->
	<main>	
		<div id="mainst">
			<h1>Sonderangebote</h1>
			<div id="sondercontainer">
				<div id="textcont1">
				<p class="maintxt" id="toptxt">Verwöhnen Sie sich selbst und nutzen Sie unser beliebtes Angebot:</p>
				<p class="maintxt">Sie kaufen ein Gutscheinheft über 6 Massagen, bezahlen aber nur 5 </p>
				</div>
				<img id="sonderimg" src="dateien/sonderangebote/image1.png" alt="Bild von einem Sonderangebot-Gutschein">	
			</div>
			<div id="gutschcontainer">
				<img id="gutschimg" alt="Bild von einem Geschenkgutschein" src="dateien/sonderangebote/image2.png">
				<div>
					<h3>Geschenkgutscheine</h3>				
					<p id="gutschtxt">Verschenken Sie eine klassische Massage, Wellness, Hot Stone oder Fußreflexzonenmassage zum Geburtstag oder für einen besonderen Anlass.</p>
				</div>
			</div>	
			<h2>Firmenangebote</h2>
				<p class="angebottxt">Wie wäre es denn mal mit einer etwas anderen Aufmerksamkeit für Ihre Mitarbeiter? Oder einem großartigen Weihnachtsgeschenk?</p>
				<p class="angebottxt">Wir kommen zu Ihnen in die Firma (ab 5 Personen) und massieren Sie vor Ort, oder aber auch nach Terminabsprache in der Praxis.</p>
				<p class="angebottxt" id="lasttxt">Preise hier nach Absprache.</p>
		</div>		
	</main>


<!----------------------------------------------------------->		
		
		<?php 
			include($rel_path . "layout/footer.php");
		?>
	</body>	
</html>