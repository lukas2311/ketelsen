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
			<h1>Karriere</h1>
			<h2>Stellenangebote:</h2>
			<p class="allgtxt">Sie möchten Ihren Beruf gerne in einem sympatischen und professionellen Team ausüben? Dann sind Sie bei uns richtig! Derzeit suchen wir:</p>
			<div id="stelle">
				<h3>Physiotherapeut (m/w)</h3>
				<p class="headtxt">Ihre Aufgaben</p>
				<ul class="list1">
					<li>Manuelle Therapie oder</li>
					<li>Bobath/PNF oder</li>
					<li>Lymphdrainage oder</li>
					<li>KG Gerät</li>
				</ul>
				<p class="headtxt">Ihr Profil</p>
				<ul class="list1">
					<li>abgeschlossene Berufsausbildung als Physiotherapeut/in</li>
					<li>ganzheitliches Denken</li>
					<li>Teamgeist, Engagement, selbstständiges und eigenverantwortliches Denken</li>
					<li>PKW-Führerschein</li>
				</ul>
				<p class="headtxt">Was wir bieten</p>
				<ul class="list1">
					<li>eine anspruchsvolle und attraktive Tätigkeit</li>
					<li>ein angenehmes Arbeitsklima</li>
					<li>eine leistungsgerechte Dotierung</li>
					<li>Fortbildungen</li>
				</ul>
				<p class="allgtxt">Sie fühlen sich angesprochen? Dann schicken Sie bitte Ihre vollständigen Bewerbungsunterlagen an:</p>
				<ul id="kontaktdt">
					<li>Praxis für Physiotherapie</li>
					<li>z.H. Steffi Ketelsen</li>
					<li>Hauptstraße 47</li>
					<li>22962 Siek</li>
				</ul>
			</div>
		</div> 
	</main>


<!----------------------------------------------------------->		
		
		<?php 
			include($rel_path . "layout/footer.php");
		?>
	</body>	
</html>