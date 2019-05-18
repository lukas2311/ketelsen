<!doctype html>
<html>
	<head>
		<?php
			$rel_path = "";
			$page_title = "Startseite";
			include("layout/head.php");
		?>
	</head>
	<body>
		<?php 
			include("layout/header.php");
		?>
<!----------------------------------------------------------->
	<!-- CONTENT HERE -->
	<main>	
		<h1>Herzlich Willkommen</h1>
		<div id="maincontainer">		
			<img id="mainpic" alt="Bild von Steffi Ketelsen" src="<?php echo($rel_path); ?>data/images/indexpct.png">
			<div>				
				<p id="willkommentext">...auf der neuen Seite von Physio-Siek!<br><br>Ich habe mir im Januar 2018 hier im alten Bäcker, neben der Traube, einen Traum erfüllt und möchte Sie in den ganz neu gestalteten Räumen herzlich begrüßen. Auf den folgenden Seiten möchte ich Ihnen einen kleinen Einblick in meine Praxis geben, Sie darüber informieren, was wir alles leisten und immer mal wieder mit neuen Angeboten überraschen.<br>Es gibt nichts, was es nicht gibt, bitte scheuen Sie sich nicht mich anzusprechen, persönlich, am Telefon oder per Mail.<br><br><br>Viel Spaß beim Stöbern und bis bald<br><br>Ihre Steffi Ketelsen</p>	
			</div>	
		</div>
		<h2>Leistungen</h2>
        <div id="leistungencontainer">			
			<div id="leistungenlinks">
				<li>&#10004 Krankengymnastik</li>
				<li>&#10004 Man. Lymphdrainage</li>
				<li>&#10004 Klassische Massage</li>
				<li>&#10004 Hausbesuche</li>
			</div>
			<div id="leistungenrechts">
				<li>&#10004 KG Neuro</li>
				<li>&#10004 Kinesio Tape</li>
				<li>&#10004 Palliativ</li>
				<li>&#10004 <a id="mehrleistungena" href="angebot.html">mehr...</a></li>
			</div>			
		</div>		
    </main>
<!----------------------------------------------------------->		
		<?php 
			include("layout/footer.php");
		?>
	</body>	
</html>