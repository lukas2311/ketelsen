	<header>		
		<a id="homelogo" href="index.php"><img id="logo" src="<?php echo($rel_path); ?>data/images/ketelsen logo.png" alt="Bitte laden Sie die Seite erneut!"></a>
		<a id="homelogomobile" href="index.php"><img id="logomobile" src="<?php echo($rel_path); ?>data/images/ketelsen invert.png" alt="Bitte laden Sie die Seite erneut!"></a>
		<nav role="navigation" id="burgermenu"> 			
			<div id="menuToggle">
   				<input type="checkbox" />
    			<span></span>	
    			<span></span>	
    			<span></span>    
    			<ul id="menu">
        			<a class="undln" href="index.php"><li>Home</li></a>        			
					<div class="dropdown">
						<a class="undln"><li class="drop" id="dropopu">Unser Team &#8227</li></a>
		      			<div class="dropdown-content">
                        	<a class="droppoint" href="<?php echo($rel_path); ?> subpages/ueberuns.php">Über Uns</a>                        	
                        	<a class="droppoint" href="<?php echo($rel_path); ?> subpages/karriere.php">Karriere</a>
               			</div>
					</div>		
					<div class="dropdown">
						<a class="undln"><li class="drop" id="dropopl">Unsere Leistungen &#8227</li></a>
		      			<div class="dropdown-content">
                        	<a class="droppoint" href="<?php echo($rel_path); ?> subpages/angebot.php">Leistungen</a> 
                        	<a class="droppoint" href="">Kurse</a>
							<a class="droppoint" href="<?php echo($rel_path); ?> subpages/preise.php">Preise</a>
                        	<a class="droppoint" href="<?php echo($rel_path); ?> subpages/sonderangebote.php">Sonderangebote</a>
               			</div>
					</div>					
					<div class="dropdown">
        				<a class="undln"><li class="drop" id="dropopup">Unsere Praxis &#8227</li></a>
			 			<div class="dropdown-content">
                        	<a class="droppoint" href="<?php echo($rel_path); ?> subpages/anfahrt.php">Anfahrt</a>
                        	<a class="droppoint" href="<?php echo($rel_path); ?> subpages/oeffnungszeiten.php">Öffnungszeiten</a>
                        	<a class="droppoint" href="<?php echo($rel_path); ?> subpages/bildgalerie.php">Bildergalerie</a>							  
                       		<a class="droppoint" href="<?php echo($rel_path); ?> subpages/wissenswertes.php">Wissenswertes</a>
                		</div>
					</div>		
        			<a href="kontakt.php"><li>Kontakt</li></a>		
					<div class="dropdown">
        				<a><li class="drop" id="dropops">Sonstiges &#8227</li></a>
						<div class="dropdown-content">
                        	<a class="droppoint" href="<?php echo($rel_path); ?> subpages/datenschutz.php">Datenschutz</a>
					  		<a class="droppoint" href="<?php echo($rel_path); ?> subpages/sitemap.php">Sitemap</a>
							<a class="droppoint" href="<?php echo($rel_path); ?> subpages/impressum.php">Impressum</a>
               			</div>
					</div>
   				</ul>
  			</div>
		</nav>  	
<!-- Bürgermenu Ende -->		
<!-- Normales Menü Anfang -->		
		<div class="normnav">
		<ul id="navigation">
			<li><a href="index.php" id="ahome">Home</a></li>
			<div class="dropdown">
            <li><a href="" id="aueberuns">Unser Team &#8227 </a></li>
                  <div class="dropdown-content">
                        <a class="droppoint" href="<?php echo($rel_path); ?> subpages/ueberuns.php">Über Uns</a>
					  <hr class="menutrennung" width="80%">                  
                        <a class="droppoint" href="<?php echo($rel_path); ?> subpages/karriere.php">Karriere</a>
                </div>
            </div>				
			<div class="dropdown">
            <li><a href="" id="aleistungen">Unsere Leistungen &#8227 </a></li>
                  <div class="dropdown-content">
                        <a class="droppoint" href="<?php echo($rel_path); ?> subpages/angebot.php">Leistungen</a>
					  <hr class="menutrennung" width="80%">
					  	<a class="droppoint" href="<?php echo($rel_path); ?> subpages/preise.php">Preise</a>
					  <hr class="menutrennung" width="80%">                  
                        <a class="droppoint" href="<?php echo($rel_path); ?> subpages/sonderangebote.php">Sonderangebote</a>					   
                </div>
            </div>	
			<div class="dropdown">
            <li><a href="" id="apraxis">Unsere Praxis &#8227</a></li>
                  <div class="dropdown-content">
                        <a class="droppoint" href="<?php echo($rel_path); ?> subpages/anfahrt.php">Anfahrt</a>
					  <hr class="menutrennung" width="80%">
                        <a class="droppoint" href="<?php echo($rel_path); ?> subpages/oeffnungszeiten.php">Öffnungszeiten</a>
					  <hr class="menutrennung" width="80%">
                        <a class="droppoint" href="<?php echo($rel_path); ?> subpages/bildgalerie.php">Bildergalerie</a>
					  <hr class="menutrennung" width="80%">
                        <a class="droppoint" href="<?php echo($rel_path); ?> subpages/wissenswertes.php">Wissenswertes</a>
                </div>
            </div>			
			<li><a href="<?php echo($rel_path); ?> subpages/kontakt.php" id="akontakt">Kontakt</a></li>
			<div class="dropdown">
            <li><a href="" id="aimpressum">Sonstiges &#8227</a></li>
                  <div class="dropdown-content">
                        <a class="droppoint" href="<?php echo($rel_path); ?> subpages/datenschutz.php">Datenschutz</a>
					  <hr class="menutrennung" width="80%">
					  	<a class="droppoint" href="<?php echo($rel_path); ?> subpages/sitemap.php">Sitemap</a>
					  <hr class="menutrennung" width="80%">
					  	<a class="droppoint" href="<?php echo($rel_path); ?> subpages/impressum.php">Impressum</a>
                </div>
            </div>
			<div id="facebooklogo">
				<a id="afacebook" href="https://www.facebook.com/Physio-Siek-135176237270403/?pnref=about.work"><img id="facebook" src="<?php echo($rel_path);?>data/images/facebook.png" alt="Bitte laden sie die Seite erneut!"></a>
			</div>	
		</ul>
		</div>	
		<hr id="headerline"> 
	</header> <!-- Kopfzeile Ende -->