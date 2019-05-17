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
			<h1>Preise</h1>
			<div class="prizepnt" id="krankengym">
				<h2>Krankengymnastik</h2>
				<li class="mainpnt">25 Minuten: 26€</li>
			</div>
			<div class="prizepnt" id="taping">
				<h2>Physiotaping incl. Streifen</h2>
				<li class="mainpnt">20 Minuten: 30€</li>
				<li class="mainpnt">Tape Steifen während der Behandlung/Stück: 2€</li>
			</div>
			<div class="prizepnt" id="massage">
				<h2>Massage</h2>
				<li class="mainpnt">20-25 Minuten: 24€</li>
			</div>
			<div class="prizepnt" id="sechsfünf">
				<h2>6er Karte für 5 bezahlen</h2>
				<li class="mainpnt">120€</li>
			</div>
			<div class="prizepnt" id="hotstone">
				<h2>Hot Stone Massage</h2>				
				<li class="mainpnt">50 Minuten: 55€</li>
			</div>
			<div class="prizepnt" id="waerme">
				<h2>Wärme/Moorpackung</h2>
				<li class="mainpnt">25 Minuten: 14€</li>
			</div>
			<div class="prizepnt" id="fusreflex">
				<h2>Fußreflexzonen Massage</h2>
				<li class="mainpnt">20 Minuten: 25€</li>
			</div>
			<div class="prizepnt" id="bindegewebs">
				<h2>Bindegewebsmassage</h2>
				<li class="mainpnt">20 Minuten: 20€</li>
			</div>
			<div class="prizepnt" id="lymphdrain">
				<h2>Lymphdrainage</h2>
				<li class="mainpnt">25 Minuten: 25€</li>
				<li class="mainpnt">50 Minuten: 45€</li>
			</div>
			<div class="prizepnt" id="hausbesuch">
				<h2>Hausbesuch incl. km.</h2>
				<li class="mainpnt">pro: 15€</li>
			</div>
			<div class="prizepnt" id="theraband">
				<h2>Theraband</h2>
				<li class="mainpnt">Stück: 10€</li>
			</div>			
		</div>
	</main>


<!----------------------------------------------------------->		
		
		<?php 
			include($rel_path . "layout/footer.php");
		?>
	</body>	
</html>