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
			<h1>Bildgalerie</h1>
			<!-- Slider Anfang -->
			    <div id="slider">
					<figure id="pictures">
						<img src="dateien/galerie/bild4.jpeg" alt="Bild vom Empfang">
						<img src="dateien/galerie/bild7.jpeg" alt="Bild vom Praxiseingang">
						<img src="dateien/galerie/bild8.jpeg" alt="Bild von Raum 1">
						<img src="dateien/galerie/bild5.jpeg" alt="Bild von Raum 2">
					</figure>
			    </div>
			<!-- Slider Ende -->
			<hr width="90%" color="grey" size="0.01"> 
			<div id="pic_container_1">
				<a class="apic" id="apic4" href="dateien/galerie/bild4.jpeg"><img id="pic_4" src="dateien/galerie/bild4.jpeg" alt="bildtrage"></a>
				<a class="apic" id="apic6" href="dateien/galerie/bild6.jpeg"><img id="pic_6" src="dateien/galerie/bild6.jpeg" alt="bildtrage"></a>
				<a class="apic" id="apic7" href="dateien/galerie/bild7.jpeg"><img id="pic_7" src="dateien/galerie/bild7.jpeg" alt="bildtrage"></a>				
				<a class="apic" id="apic1" href="dateien/galerie/bild1.jpeg"><img id="pic_1" src="dateien/galerie/bild1.jpeg" alt="bildtrage"></a>
				<a class="apic" id="apic8" href="dateien/galerie/bild8.jpeg"><img id="pic_8" src="dateien/galerie/bild8.jpeg" alt="bildtrage"></a>	
				<a class="apic" id="apic2" href="dateien/galerie/bild2.jpeg"><img id="pic_2" src="dateien/galerie/bild2.jpeg" alt="bildtrage"></a>
				<a class="apic" id="apic3" href="dateien/galerie/bild3.jpeg"><img id="pic_3" src="dateien/galerie/bild3.jpeg" alt="bildtrage"></a>					
				<a class="apic" id="apic5" href="dateien/galerie/bild5.jpeg"><img id="pic_5" src="dateien/galerie/bild5.jpeg" alt="bildtrage"></a>				
			</div>
		</div>	
	</main>


<!----------------------------------------------------------->		
		
		<?php 
			include($rel_path . "layout/footer.php");
		?>
	</body>	
</html>