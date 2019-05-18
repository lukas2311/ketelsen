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
		<h1>Kontakt</h1>		
			<p class="konttxt">Sie erreichen uns natürlich während der Öffnungszeiten in unserer Praxis, oder unter</p>
			<div id="nm">
				<li class="kontnm"><a href="tel:041073740224">Tel: 04107 37 40 224</a></li>
				<li class="kontnm">Fax: 04107 37 40 225</li>
				<li class="kontnm" id="lastnm"><a href="mailto:info@physio-siek.de">Mail: info@physio-siek.de</a></li>
			</div>	
		</div>		
	</main>

<!----------------------------------------------------------->		
		
		<?php 
			include($rel_path . "layout/footer.php");
		?>
	</body>	
</html>