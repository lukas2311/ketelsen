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
		<h1>Öffnungszeiten</h1>
			<p class="maintxt" id="firsttxt">Wir sind flexibel in der Terminvergabe, sprechen Sie uns gerne an!</p>
			<p class="maintxt">Sie bekommen bei uns Termine von Montag bis Freitag in der Zeit von 07:25 - 20:00</p>
			<p class="maintxt" id="lasttxt">Sollten wir uns allerdings grade in einer Behandlung befinden, wäre es schön, wenn Sie sich einen Moment gedulden würden. Sonst nehmen Sie auch gerne telefonisch Kontakt mit uns auf oder hinterlassen eine kleine Nachricht auf den kleinen Zetteln am Stehtisch. Sie erreichen uns unter <a id="telnummer" href="tel:041073740224">04107 37 40 224</a> oder unter <a id="mailadr" href="mailto:info@physio-siek.de">info@physio-siek.de. </a>Ein Anrufbeantworter zeichnet Ihren Anruf gerne auf. Unter Angabe Ihrer Telefonnummer melden wir uns schnellstmöglich zurück!</p>
		</div>
	</main>


<!----------------------------------------------------------->		
		
		<?php 
			include($rel_path . "layout/footer.php");
		?>
	</body>	
</html>