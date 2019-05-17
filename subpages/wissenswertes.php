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
			<h1>Wissenswertes von A bis Z</h1>
			<div id="introtxt">
				<p class="txt1" id="pintrotxt">Bereits vor Ihrem ersten Praxisbesuch helfen wir Ihnen bei den wichtigsten Fragen, die es rund um Ihre Therapie zu klären gilt. Im Folgenden finden Sie Wissenswertes von A bis Z zu unserer Praxis und zum Therapieverlauf.</p>
			</div>				
			<div id="bringtxt">
				<h4>Ersttermin: Was Sie mitbringen sollten</h4>
				<p class="txt2" id="mitbringentxt">Idealerweise bringen Sie sportliche und bequeme Kleidung und ein Handtuch mit. An die aktuelle Heilmittelverordnung Ihres Arztes für physiotherapeutische Behandlungen sollten Sie ebenso denken wie an eventuell vorhandene Röntgenaufnahmen und ggf. einen Arztbericht.</p>
			</div>
			<div id="verordnung">
				<h3>Heilmittelverordnung: Wie lange ist meine Heilmittelverordnung gültig?</h3>
				<p class="txt1" id="verordnungtxt">Die Verordnung ist 14 Tage nach Ausstellungsdatum des Arztes gültig.</p>
				<p class="txt1" id="verordnungtxt2">Sollte der Behandlungstermin später erfolgen, bestätigen Sie diese Änderung jeweils mit Praxisstempel, Datum und Unterschrift des Arztes, um die Gültigkeit der Verordnung zu gewährleisten.</p>
			</div>
			<div id="rezept">
				<h4>Rezeptgebühr</h4>
				<p class="txt2" id="rezepttxt">Bitte begleichen Sie die Rezeptgebühr zum Beginn der Behandlung. Sollten Sie von der Rezeptgebühr befreit sein, bitten wir um Vorlage einer Befreiungskarte.</p>
			</div>
			<div id="termin">
				<h3>Terminveränderungen</h3>
				<p class="txt1" id="termintxt">Terminabsagen bitte spätestens 24 Stunden vorher. Terminänderungen für KGG Gerät möglichst eine Woche vorher, damit die 3er Gruppen zusammengestellt werden können.</p>
			</div>
		</div>	
	</main>


<!----------------------------------------------------------->		
		
		<?php 
			include($rel_path . "layout/footer.php");
		?>
	</body>	
</html>