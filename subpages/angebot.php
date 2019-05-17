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
			<h1>Leistungen</h1>			
			<div class="container">
				<h3>Physiotherapie/Krankengymnastik (KG)</h3>
				<div id="physiocontainer">
					<div>
						<p class="summtxt">Die Physiotherapie verfolgt das Ziel, die gestörte Beweglichkeit und Funktionsstörungen zu verbessern oder wiederherzustellen.</p>							
					</div>
					<img id="physioimg" src="dateien/angebotbilder/IMG_4436.jpg" alt="Bild von Physiotherapie">
				</div>	
			</div>	
			<div class="container">
				<h3>PNF</h3>
				<p class="summtxt">trainiert viele Muskeln gleichzeitig und wird idealerweise viel in der Neurotherapie z.B. nach Schlaganfällen angewandt.</p>
			</div>
			<div class="container">
				<h3>Kieferbehandlung bei CMC</h3>
				<p class="summtxt">Schmerztherapie bei Fehlregulation des Kiefergelenks</p>
			</div>	
			<div class="container">
				<h3>Manuelle Lymphdrainage</h3>
				<div id="manncontainer">
					<p class="summtxt">Ziel ist es, die reduzierte Pumpfunktion im Gefäßsystem zu unterstützen. In erster Linie dient die manuelle Lymphdrainage der Entlastung von geschwollenem Gewebe. Diese Therapie darf nur von extra ausgebildeten Therapeuten durchgeführt werden und benötigt eine ärtztliche Verordnung über 30, 45 oder 60 min.</p>					
				</div>	
			</div>
			<div class="container">
				<h3>Wärmetherapie</h3>
				<p class="summtxt">Naturfango/Wärmepackung, Heiße Rolle oder Rotlicht</p>
			</div>	
			<div class="container">
				<h3>Kältetherapie</h3>
				<p class="summtxt">Behandlung mit lokaler intensiver Kälte in Form von tiefgekühlten Eis/Gelbeuteln oder direkter Abreibung (Eismassage, Eiseinreibung) zur Schmerzlinderung, Muskeltonusregulation und Minderung einer Schwellung, Reizung und Entzündung</p>
			</div>	
			<div class="container">
				<h3>Kinesio Tape/Medi-Taping</h3>
				<div id="kincontainer">
					<p class="summtxt">Die Anlage von elastischen, medikamentfreien Tapes zur Normalisierung der Spannung der Muskulatur</p>
					<img id="kinimg" src="dateien/angebotbilder/IMG_2396.jpg" alt="bild vom kinesio-taping">
				</div>	
			</div>
			<div class="container">
				<h3>Palliative Versorgung</h3>
				<p class="summtxt">Massagen bei Verdauungsstörungen angewandt. Die Lymphdrainage führen wir durch, um den Druck zu nehmen. Individuell wird geschaut, wie geht es dem Patienten heute, wie können wir heute helfen. Hier ist ein enges Zusammenarbeiten mit Pflege und Ärzten besonders wichtig.</p>
			</div>
			<div class="container">
				<h3>Hausbehandlung</h3>
				<p class="summtxt">Können Sie nicht mehr zu uns kommen so sind wir bemüht, zu Ihnen nach Hause zu kommen. Dies bedarf einer individuellen Planung, bitte sprechen Sie uns an!</p>
			</div>
			<div class="container">
				<h3>Massageangebot</h3>
				<div id="masscontainer">
					<div>
					<ul>
						<li class="summtxt">klassische Massage (KMT)</li>
						<li class="summtxt">Bindegewebsmassage</li>
						<li class="summtxt">Fußreflexzonenmassage</li>
						<li class="summtxt">Hot Stone</li>
						<li class="summtxt">verschiedene Öle</li>
					</ul>							
					</div>						
				</div>
			</div>	
		</div>
	</main>


<!----------------------------------------------------------->		
		
		<?php 
			include($rel_path . "layout/footer.php");
		?>
	</body>	
</html>