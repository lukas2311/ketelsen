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
		<h1>Sitemap</h1>
			<ol class="stmapol"><a class="asitemp" href="index.html">Home</a></ol>
			<ol class="stmapol"><a class="asitemp" href="ueberuns.html">Über uns</a></ol>
			<ol class="stmapol"><a class="asitemp">Leistungen &#8227</a></ol>
				<li class="stmapli"><a class="asitemp" href="angebot.html">Angebot</a></li>				
				<li class="stmapli"><a class="asitemp" href="sonderangebote.html">Sonderangebote</a></li>
			<ol class="stmapol"><a class="asitemp">Unsere Praxis &#8227</a></ol>
				<li class="stmapli"><a class="asitemp" href="anfahrt.html">Anfahrt</a></li>
				<li class="stmapli"><a class="asitemp" href="oeffnungszeiten.html">Öffnungszeiten</a></li>
				<li class="stmapli"><a class="asitemp" href="bildgalerie.html">Bildgalerie</a></li>
			<ol class="stmapol"><a class="asitemp" href="kontakt.html">Kontakt</a></ol>
			<ol class="stmapol"><a class="asitemp">Sonstiges &#8227</a></ol>
				<li class="stmapli"><a class="asitemp" href="datenschutz.html">Datenschutz</a></li>			
				<li class="stmapli"><a class="asitemp" href="sitemap.html">Sitemap</a></li>
				<li class="stmapli"><a class="asitemp" href="impressum.html">Impressum</a></li>
		</div>
	</main>


<!----------------------------------------------------------->		
		
		<?php 
			include($rel_path . "layout/footer.php");
		?>
	</body>	
</html>