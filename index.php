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
			<img id="mainpic" alt="Bild von Steffi Ketelsen" src="<dateien/bilder/indexpct.png">
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
       
		<div id="fuscontainer">
			<div id="fuslogo">
				<img id="logofus" alt="Bitte laden Sie die Seite erneut!" src="dateien/bilder/ketelsen fuslogo .png">
				<p id="logotxt">Wer loslässt, hat die Hände frei.</p>
			</div>
			<div id="fusdaten">
				<h5>Anschrift und Kontakt</h5>
				<p id="adresse">Hauptstraße 47</p>
				<p id="plzort">22962 Siek</p>
				<p id="tel">Tel. 04107 / 37 40 224</p>
				<p id="fax">Fax. 04107 / 37 49 225</p>
				<p id="email">info@physio-siek.de</p>
			</div>
			<div id="fuszeiten">
				<h5>Terminzeiten</h5>
				<p>Montag: 07:25-20:00</p>
				<p>Dienstag: 07:25-20:00</p>
				<p>Mittwoch: 07:25-20:00</p>
				<p>Donnerstag 07:25-20:00</p>
				<p>Freitag: 07:25-20:00</p>
			</div>
		</div>
		<div id="divhaftung">
			<ul id="haftung">
				<li class="haft"><a id="aimpressumfoot" href="impressum.html">Impressum &#124; </a></li>
				<li class="haft"><a id="adatenschutzfoot" href="datenschutz.html">Datenschutz &#124; </a></li>
				<li class="haft"><a id="akontaktfoot" href="kontakt.html">Kontakt &#124; </a></li>
				<li class="haft"><a id="asitemap" href="sitemap.html">Sitemap &#124; </a></li>
				<li class="haft"><a id="akarriere" href="karriere.html">Karriere</a></li>
			</ul>
			<p id="copyright">Copyright &copy; 2018</p>
		</div>
	</main>


<!----------------------------------------------------------->		
		<?php 
			include("layout/footer.php");
		?>
	</body>	
</html>