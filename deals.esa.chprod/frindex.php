<!DOCTYPE HTML>
<html>
<head>
<title>ESA-Deal-Rechner</title>
<!-- Allgemeine Links und Scripts -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/print.css">
<link rel="stylesheet" href="css/screen.css">
<script src="https://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
function chkFormularsmart () {
  if (document.formularsmart.smartinputde.value == "") {
    alert("Entrer un montant d'investissement s'il vous plaît!");
    document.formularsmart.smartinputde.focus();
    return false;
  }
  if (document.formularsmart.smartinputde.value < 2000) {
    alert("Le montant d'investissement doit être plus élevé que 1'999 CHF!");
    document.formularsmart.smartinputde.focus();
    return false;
  }
  if (document.formularsmart.smartinputde.value > 20000) {
    alert("Le montant d'investissement doit être plus profond que 20'001 CHF!");
    document.formularsmart.smartinputde.focus();
    return false;
  }
}
function chkFormularsmart2 () {
	if (document.formularsmart2.smartinputde2.value == "") {
    alert("Entrer une chiffre s'il vous plaît!");
    document.formularsmart2.smartinputde2.focus();
    return false;
  }
  if (document.formularsmart2.smartinputde2.value < 16334) {
    alert("La chiffre d'affaires doit être plus élevé que 16'333 CHF!");
    document.formularsmart2.smartinputde2.focus();
    return false;
  }
  if (document.formularsmart2.smartinputde2.value > 65000) {
    alert("La chiffre d'affaires doit être plus profond que 65'001 CHF!");
    document.formularsmart2.smartinputde2.focus();
    return false;
  }
}
function chkFormularpneu () {
  if (document.formularpneu.pneuinputde.value == "") {
    alert("Entrer un montant d'investissement s'il vous plaît!");
    document.formularpneu.pneuinputde.focus();
    return false;
  }
  if (document.formularpneu.pneuinputde.value < 2000) {
    alert("Le montant d'investissement doit être plus élevé que 1'999 CHF!");
    document.formularpneu.pneuinputde.focus();
    return false;
  }
  if (document.formularpneu.pneuinputde.value > 20000) {
    alert("Le montant d'investissement doit être plus profond que 20'001 CHF!");
    document.formularpneu.pneuinputde.focus();
    return false;
  }
}
function chkFormularpneu2 () {
	if (document.formularpneu2.pneuinputde2.value == "") {
    alert("Entrer une chiffre s'il vous plaît!");
    document.formularpneu2.pneuinputde2.focus();
    return false;
  }
  if (document.formularpneu2.pneuinputde2.value < 18000) {
    alert("La chiffre d'affaires doit être plus élevé que 17'999 CHF!");
    document.formularpneu2.pneuinputde2.focus();
    return false;
  }
  if (document.formularpneu2.pneuinputde2.value > 70201) {
    alert("La chiffre d'affaires doit être plus profond que 70'201 CHF!");
    document.formularpneu2.pneuinputde2.focus();
    return false;
  }
}
function chkFormularlegarage () {
    if (document.formularlegarage.legarageinputde.value == "") {
    alert("Entrer un montant d'investissement s'il vous plaît!");
    document.formularlegarage.legarageinputde.focus();
    return false;
  }
  if (document.formularlegarage.legarageinputde.value < 3600) {
    alert("Le montant d'investissement doit être plus élevé que 3'599 CHF!");
    document.formularlegarage.legarageinputde.focus();
    return false;
  }
  if (document.formularlegarage.legarageinputde.value > 505001) {
    alert("Le montant d'investissement doit être plus profond que 50'499!");
    document.formularlegarage.legarageinputde.focus();
    return false;
  }
}
function chkFormularlegarage2 () {
	if (document.formularlegarage2.legarageinputde2.value == "") {
    alert("Entrer une chiffre s'il vous plaît!");
    document.formularlegarage2.legarageinputde2.focus();
    return false;
  }
  if (document.formularlegarage2.legarageinputde2.value < 30000) {
    alert("La chiffre d'affaires doit être plus élevé que 29'999 CHF!");
    document.formularlegarage2.legarageinputde2.focus();
    return false;
  }
  if (document.formularlegarage2.legarageinputde2.value > 80000) {
    alert("La chiffre d'affaires doit être plus profond que 80'001 CHF!");
    document.formularlegarage2.legarageinputde2.focus();
    return false;
  }
}
function chkFormularlegaragenew () {
    if (document.formularlegaragenew.legaragenewinputde.value == "") {
    alert("Entrer un montant d'investissement s'il vous plaît!");
    document.formularlegaragenew.legaragenewinputde.focus();
    return false;
  }
  if (document.formularlegaragenew.legaragenewinputde.value < 2000) {
    alert("Le montant d'investissement doit être plus élevé que 1'999 CHF!");
    document.formularlegaragenew.legaragenewinputde.focus();
    return false;
  }
  if (document.formularlegaragenew.legaragenewinputde.value > 20000) {
    alert("Le montant d'investissement doit être plus profond que 20'001 CHF!");
    document.formularlegaragenew.legaragenewinputde.focus();
    return false;
  }
}
function chkFormularlegaragenew2 () {
	if (document.formularlegaragenew2.legaragenewinputde2.value == "") {
    alert("Entrer une chiffre s'il vous plaît!");
    document.formularlegaragenew2.legaragenewinputde2.focus();
    return false;
  }
  if (document.formularlegaragenew2.legaragenewinputde2.value < 36000) {
    alert("La chiffre d'affaires doit être plus élevé que 35'999 CHF!");
    document.formularlegaragenew2.legaragenewinputde2.focus();
    return false;
  }
  if (document.formularlegaragenew2.legaragenewinputde2.value > 96000) {
    alert("La chiffre d'affaires doit être plus profond que 96'001 CHF!");
    document.formularlegaragenew2.legaragenewinputde2.focus();
    return false;
  }
}
</script>
</head>
<body>
	<div class="container">
		<!-- Tabpanel für Sprachenauswahl -->
		<div role="tabpanel">
			  	  <div class="container-fluid">
				    <div class="navbar-header">
				      <a class="navbar-brand">
				        <img class="brand" alt="Brand" src="images/logo_fr.jpg">
				      </a>
				    </div>
				  </div>
			  <!-- Nav tabs für Sprachenauswahl -->
            <!--
			  <ul class="nav nav-tabs navbar-right" id="sprache">
			  	<li role="presentation"><a href="itindex.php">IT</a></li>
			  	<li role="presentation" class="active"><a href="frindex.php">FR</a></li>
			    <li role="presentation"><a href="index.php" aria-controls="de">DE</a></li>		    
			  </ul>
			  -->
            <ul class="nav nav-tabs navbar-right" id="sprache">
                <li role="presentation"><a href="?l=it">IT</a></li>
                <li role="presentation" class="active"><a href="?l=fr">FR</a></li>
                <li role="presentation"><a href="?l=de" aria-controls="de">DE</a></li>
            </ul>

			  <!-- Inhalt des Deutschen Tabs -->
			  <div class="tab-content">
			    <div role="tabpanel" class="tab-pane fade in active" id="de">
			    	<div class="jumbotron">
			
						<div role="tabpanel">

						  <!-- Nav tabs für Dealauswahl -->
						  <ul class="nav nav-tabs2" role="tablist" id="deals">
						    <li role="presentation" class="active"><a href="#smartde" aria-controls="smartde" role="tab" data-toggle="tab">SD</a></li>
						    <li role="presentation"><a href="#pneude" aria-controls="pneude" role="tab" data-toggle="tab">PD</a></li>
						    <li role="presentation"><a href="#legaragede" aria-controls="legaragede" role="tab" data-toggle="tab">RD</a></li>
						    <li role="presentation"><a href="#legaragenewde" aria-controls="legaragenewde" role="tab" data-toggle="tab">LGD</a></li>
						  </ul>

						  <!-- Inhalt Smart Deal Deutsch -->
						  <div class="tab-content">
						    <div role="tabpanel" class="tab-pane active" id="smartde">
						    	<br />
								<div class="panel-group" id="accordion">
							        <div class="panel panel-warning">
							          <div class="panel-heading">
							            <h4 class="panel-title">
							              <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Calculer chiffre d'affaires</a>
							            </h4>
							          </div>
							          <div id="collapse1" class="panel-collapse collapse">
							            <div class="panel-body">
									    	<form name="formularsmart" action="#smartde" role="form" method="post" onsubmit="return chkFormularsmart()">
											  <div class="form-group">
											    <label for="exampleInputInvestition1">Montant de l'investissement Net CHF</label>
											    <input type="number" class="form-control formsmart" id="exampleInputInvestition1" name="smartinputde" placeholder="Montant de l'investissement Net CHF">
											  	<label for="exampleInputKunde1">Client</label>
											    <input type="text" class="form-control formsmart" id="exampleInputKunde1" name="smartkunde" placeholder="Client">
											    <label for="exampleInputGebietsleiter1">Responsable régional</label>
											    <input type="text" class="form-control formsmart" id="exampleInputGebietsleiter1" name="smartgebl" placeholder="Responsable régional">
											    <label for="exampleInputAngebot1">Description de l'offre</label>
											    <input type="text" class="form-control formsmart" id="exampleInputAngebot1" name="smartangebot" placeholder="Description de l'offre">
											  </div>
											  <button type="submit" class="btn btn-warning">Calculer chiffre d'affaires</button>
											</form>
											</div>
								          </div>
								        </div>
								        <div class="panel panel-warning">
								          <div class="panel-heading">
								            <h4 class="panel-title">
								              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Calculer montant de l'investissement Net</a>
								            </h4>
								          </div>
								          <div id="collapse2" class="panel-collapse collapse">
								            <div class="panel-body">
								            <form name="formularsmart2" action="#smartde" role="form" method="post" onsubmit="return chkFormularsmart2()">
											  <div class="form-group">
											    <label for="exampleInputUmsatz1">Chiffre d'affaires CHF par an</label>
											    <input type="number" class="form-control formsmart" id="exampleInputUmsatz1" name="smartinputde2" placeholder="Chiffre d'affaires CHF par an">
											  </div>
											  <button type="submit" class="btn btn-warning">Calculer montant de l'investissement Net</button>
											</form>
										</div>
								      </div>
									</div>
								</div> 
								<br />
								<?php
								error_reporting(0);
								    $smartinputde = $_POST["smartinputde"];
								    $smartkunde = $_POST["smartkunde"];
								    $smartgebl = $_POST["smartgebl"];
								    $smartangebot = $_POST["smartangebot"];
											$row = 1;
											if (($handle = fopen("smart.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
											    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
											        // Berechnung die ein Resultat ergibt...
											        // prüfen des resultates
											        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
											        if ( $data[0] <= $smartinputde and $data[1] > $smartinputde ) {
											        	echo	"<br />
											        				<h3>Offre Smart Deal (" . $smartangebot . ")</h3>
											        				<h4 class='screenhide'>" . $smartkunde . "</h4>
											        				<br />
											        				<table class='table'>
														        		<tr>
														        			<th>Montant de l'investissement</th>
														        			<td class='spr'>" . number_format ($smartinputde, 0, '.', "'") . "</td>
														        		</tr>
														        		<tr>
																	    	<th>Chiffre d'affaires</th>
																	    	<td class='spr'>" . number_format ($data[2], 0, '.', "'") . "</td>
																	    </tr>
																    </table>
																    <table class='table'>
																	    <tr>
																	    	<th></th>
																	    	<th class='spr'><br />Par an</th>
																	    	<th class='spr'><br />Par mois</th>
																	    </tr>
														        		<tr>
																	    	<th>1 année</th>
																	    	<td class='spr'>" . number_format ($data[3] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[3] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>2 ans</th>
																	    	<td class='spr'>" . number_format ($data[4] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[4] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>3 ans</th>
																	    	<td class='spr'>" . number_format ($data[5] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[5] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>4 ans</th>
																	    	<td class='spr'>" . number_format ($data[6] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[6] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>5 ans</th>
																	    	<td class='spr'>" . number_format ($data[7] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[7] / 12, 0, '.', "'") . "</td>
																	  	</tr>
																	</table>
																<button type='submit' class='btn btn-warning' onClick='javascript:window.print()'>Imprimer</button>
																<br /><h4 class='screenhide'>" . $smartgebl . "</h4>
																<br /><br /><div class ='signatur'></div>";
											            break;
											        	}
											        $row++;
											    	}
											//  File bitte schliessen...    	
										    fclose($handle);
											}
										// nur weiter wenn auch ein gültiges Result aus File...
								?>
								<?php
								$smartinputde2 = $_POST["smartinputde2"];
								$smartkunde2 = $_POST["smartkunde2"];
								$smartgebl2 = $_POST["smartgebl2"];
								if (isset($smartinputde2)) {
								error_reporting(0);
											$row = 1;
											$file=file("smart.csv");
											if (33000 <= $smartinputde2 and $smartinputde2 < 62001){
												if (($handle = fopen("smart.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $smartinputde2 and $smartinputde2 > 0 ) {
												        		echo	"<br />
													        				<table class='table'>
																        		<tr>
																        			<th>Chiffre d'affaires CHF par an</th>
																        			<td class='spr'>" . number_format ($smartinputde2, 0, '.', "'") . "</td>
																        		</tr>
																        	</table>
																        	<table class='table'>
																        		<tr>
																			    	<th>Montant de l'investissement durée</th>
																			    	<th>1 année</th>
																			    	<td class='spr'> " .number_format ($file[$row -2], 0, '.', "'") . " - " .number_format ($file[$row -1], 0, '.', "'") . "</td>
																			    </tr>
																		    ";
															    break;
														}
														$row++;
													}
													//  File bitte schliessen...    	
													fclose($handle);
												}
											} else{
												echo	"<br />
													    <table class='table'>
														  	<tr>
														  		<th>Chiffre d'affaires CHF par an</th>
														  		<td class='spr'>" . number_format ($smartinputde2, 0, '.', "'") . "</td>
														  	</tr>
														</table>
														<table class='table'>
														  	<tr>
														 		<th>Montant de l'investissement durée</th>
														 		<th>1 année</th>
														 		<td class='spr'>0</td>
														 	</tr>
														";
											}
											$smartinputde2 = $smartinputde2 * 2;
											$row = 1;
											$file=file("smart.csv");

											if (33000 <= $smartinputde2 and $smartinputde2 < 123001){
												if (($handle = fopen("smart.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $smartinputde2 and $smartinputde2 > 0) {
												        		echo	"	
																        <tr>
																			<th></th>
																			<th>2 ans</th>
																			<td class='spr'> " .number_format ($file[$row -2], 0, '.', "'") . " - " .number_format ($file[$row -1], 0, '.', "'") . "</td>
																		</tr>
																		    ";
															    break;
														}
														$row++;
													}
													//  File bitte schliessen...    	
													fclose($handle);
												}
											} else{
												echo	"	
														<tr>
														   	<th></th>
														  	<th>2 ans</th>
														 	<td class='spr'>0</td>
														</tr>
														";
											}
											$smartinputde2 = $smartinputde2 / 2 * 3;
											$row = 1;
											$file=file("smart.csv");

											if (49000 <= $smartinputde2 and $smartinputde2 < 195001){
												if (($handle = fopen("smart.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $smartinputde2 and $smartinputde2 > 0) {
												        		echo	"	
																        		<tr>
																			    	<th></th>
																			    	<th>3 ans</th>
																			    	<td class='spr'> " .number_format ($file[$row -2], 0, '.', "'") . " - " .number_format ($file[$row -1], 0, '.', "'") . "</td>
																			    </tr>
																		    ";
															    break;
														}
														$row++;
													}
													//  File bitte schliessen...    	
													fclose($handle);
												}
											} else{
												echo	"	
														<tr>
														   	<th></th>
														  	<th>3 ans</th>
														 	<td class='spr'>0</td>
														</tr>
														";
											}
												$smartinputde2 = $smartinputde2 / 3 * 4;
												$row = 1;
												$file=file("smart.csv");

											if (68000 <= $smartinputde2 and $smartinputde2 < 259001){
												if (($handle = fopen("smart.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $smartinputde2 and $smartinputde2 > 0) {
												        		echo	"	
																        		<tr>
																			    	<th></th>
																			    	<th>4 ans</th>
																			    	<td class='spr'> " .number_format ($file[$row -2], 0, '.', "'") . " - " .number_format ($file[$row -1], 0, '.', "'") . "</td>
																			    </tr>
																		    ";
															    break;
														}
														$row++;
													}
													//  File bitte schliessen...    	
													fclose($handle);
												}
											} else{
												echo	"	
														<tr>
														   	<th></th>
														  	<th>4 ans</th>
														 	<td class='spr'>0</td>
														</tr>
														";
											}
											$smartinputde2 = $smartinputde2 / 4 * 5;
											$row = 1;
											$file=file("smart.csv");

											if (90000 <= $smartinputde2 and $smartinputde2 < 315001){
												if (($handle = fopen("smart.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $smartinputde2 and $smartinputde2 > 0) {
												        		echo	"	
																        		<tr>
																			    	<th></th>
																			    	<th>5 ans</th>
																			    	<td class='spr'> " .number_format ($file[$row -2], 0, '.', "'") . " - " .number_format ($file[$row -1], 0, '.', "'") . "</td>
																			    </tr>
																		    </table>";
															    break;
														}
														$row++;
													}
													//  File bitte schliessen...    	
													fclose($handle);
												}
											} else{
												echo	"	
														<tr>
														   	<th></th>
														  	<th>5 ans</th>
														 	<td class='spr'>0</td>
														</tr>
														</table>";
											}
										}
							?>						
							</div>
							<!-- Inhalt Pneu Deal Deutsch -->
						    <div role="tabpanel" class="tab-pane" id="pneude">
						    	<br />
								<div class="panel-group" id="accordion2">
							        <div class="panel panel-default">
							          <div class="panel-heading">
							            <h4 class="panel-title">
							              <a data-toggle="collapse" data-parent="#accordion2" href="#collapse3">Calculer chiffre d'affaires</a>
							            </h4>
							          </div>
							          <div id="collapse3" class="panel-collapse collapse">
							            <div class="panel-body">
									    	<form name="formularpneu" action="#pneude" role="form" method="post" onsubmit="return chkFormularpneu()">
											  <div class="form-group">
											    <label for="exampleInputInvestition2">Montant de l'investissement Net CHF</label>
											    <input type="number" class="form-control formpneu" id="exampleInputInvestition2" name="pneuinputde" placeholder="Montant de l'investissement Net CHF">
											  	<label for="exampleInputKunde3">Client</label>
											    <input type="text" class="form-control formpneu" id="exampleInputKunde3" name="pneukunde" placeholder="Client">
											    <label for="exampleInputGebietsleiter3">Responsable régional</label>
											    <input type="text" class="form-control formpneu" id="exampleInputGebietsleiter3" name="pneugebl" placeholder="Responsable régional">
											    <label for="exampleInputAngebot2">Description de l'offre</label>
											    <input type="text" class="form-control formpneu" id="exampleInputAngebot2" name="pneuangebot" placeholder="Description de l'offre">
											  </div>
											  <button type="submit" class="btn btn-default">Calculer chiffre d'affaires</button>
											</form>
											</div>
								          </div>
								        </div>
								        <div class="panel panel-default">
								          <div class="panel-heading">
								            <h4 class="panel-title">
								              <a data-toggle="collapse" data-parent="#accordion2" href="#collapse4">Calculer montant de l'investissement Net</a>
								            </h4>
								          </div>
								          <div id="collapse4" class="panel-collapse collapse">
								            <div class="panel-body">
								            <form name="formularpneu2" action="#pneude" role="form" method="post" onsubmit="return chkFormularpneu2()">
											  <div class="form-group">
											    <label for="exampleInputUmsatz2">Chiffre d'affaires CHF par an</label>
											    <input type="number" class="form-control formpneu" id="exampleInputUmsatz2" name="pneuinputde2" placeholder="Chiffre d'affaires CHF par an">
											  </div>
											  <button type="submit" class="btn btn-default">Calculer montant de l'investissement Net</button>
											</form>
										</div>
								      </div>
									</div>
								</div> 
								<br />
								<?php
								error_reporting(0);
								    $pneuinputde = $_POST["pneuinputde"];
								    $pneukunde = $_POST["pneukunde"];
								    $pneugebl = $_POST["pneugebl"];
								    $pneuangebot = $_POST["pneuangebot"];
											$row = 1;
											if (($handle = fopen("pneu.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
											    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
											        // Berechnung die ein Resultat ergibt...
											        // prüfen des resultates
											        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
											        if ( $data[0] <= $pneuinputde and $data[1] > $pneuinputde ) {
											        	echo	"<br />
											        				<h3>Offre Pneu Deal (" . $pneuangebot . ")</h3>
											        				<h4 class='screenhide'>" . $pneukunde . "</h4>
											        				<br />
											        				<table class='table'>
														        		<tr>
														        			<th>Montant de l'investissement</th>
														        			<td class='spr'>" . number_format ($pneuinputde, 0, '.', "'") . "</td>
														        		</tr>
														        		<tr>
																	    	<th>Chiffre d'affaires</th>
																	    	<td class='spr'>" . number_format ($data[2], 0, '.', "'") . "</td>
																	    </tr>
																    </table>
																    <table class='table'>
																	    <tr>
																	    	<th></th>
																	    	<th class='spr'><br />Par an</th>
																	    	<th class='spr'><br />Par mois</th>
																	    </tr>
														        		<tr>
																	    	<th>1 année</th>
																	    	<td class='spr'>" . number_format ($data[3] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[3] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>2 ans</th>
																	    	<td class='spr'>" . number_format ($data[4] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[4] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>3 ans</th>
																	    	<td class='spr'>" . number_format ($data[5] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[5] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>4 ans</th>
																	    	<td class='spr'>" . number_format ($data[6] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[6] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>5 ans</th>
																	    	<td class='spr'>" . number_format ($data[7] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[7] / 12, 0, '.', "'") . "</td>
																	  	</tr>
																	</table>
																<button type='submit' class='btn btn-default' onClick='javascript:window.print()'>Imprimer</button>
																<br /><h4 class='screenhide'>" . $pneugebl . "</h4>
																<br /><br /><div class ='signatur'></div>";
											            break;
											        	}
											        $row++;
											    	}
											//  File bitte schliessen...    	
										    fclose($handle);
											}
										// nur weiter wenn auch ein gültiges Result aus File...
								?>
								<?php
								$pneuinputde2 = $_POST["pneuinputde2"];
								$pneukunde2 = $_POST["pneukunde2"];
								$pneugebl2 = $_POST["pneugebl2"];
								if (isset($pneuinputde2)) {
								error_reporting(0);
											$row = 1;
											$file=file("pneu.csv");
											if (36000 <= $pneuinputde2 and $pneuinputde2 < 69001){
												if (($handle = fopen("pneu.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $pneuinputde2 and $pneuinputde2 > 0 ) {
												        		echo	"<br />
													        				<table class='table'>
																        		<tr>
																        			<th>Chiffre d'affaires CHF par an</th>
																        			<td class='spr'>" . number_format ($pneuinputde2, 0, '.', "'") . "</td>
																        		</tr>
																        	</table>
																        	<table class='table'>
																        		<tr>
																			    	<th>Montant de l'investissement durée</th>
																			    	<th>1 année</th>
																			    	<td class='spr'> " .number_format ($file[$row -2], 0, '.', "'") . " - " .number_format ($file[$row -1], 0, '.', "'") . "</td>
																			    </tr>
																		    ";
															    break;
														}
														$row++;
													}
													//  File bitte schliessen...    	
													fclose($handle);
												}
											} else{
												echo	"<br />
													    <table class='table'>
														  	<tr>
														  		<th>Chiffre d'affaires CHF par an</th>
														  		<td class='spr'>" . number_format ($pneuinputde2, 0, '.', "'") . "</td>
														  	</tr>
														</table>
														<table class='table'>
														  	<tr>
														 		<th>Montant de l'investissement durée</th>
														 		<th>1 année</th>
														 		<td class='spr'>0</td>
														 	</tr>
														";
											}
											$pneuinputde2 = $pneuinputde2 * 2;
											$row = 1;
											$file=file("pneu.csv");

											if (36000 <= $pneuinputde2 and $pneuinputde2 < 138001){
												if (($handle = fopen("pneu.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $pneuinputde2 and $pneuinputde2 > 0) {
												        		echo	"	
																        <tr>
																			<th></th>
																			<th>2 ans</th>
																			<td class='spr'> " .number_format ($file[$row -2], 0, '.', "'") . " - " .number_format ($file[$row -1], 0, '.', "'") . "</td>
																		</tr>
																		    ";
															    break;
														}
														$row++;
													}
													//  File bitte schliessen...    	
													fclose($handle);
												}
											} else{
												echo	"	
														<tr>
														   	<th></th>
														  	<th>2 ans</th>
														 	<td class='spr'>0</td>
														</tr>
														";
											}
											$pneuinputde2 = $pneuinputde2 / 2 * 3;
											$row = 1;
											$file=file("pneu.csv");

											if (55000 <= $pneuinputde2 and $pneuinputde2 < 209001){
												if (($handle = fopen("pneu.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $pneuinputde2 and $pneuinputde2 > 0) {
												        		echo	"	
																        		<tr>
																			    	<th></th>
																			    	<th>3 ans</th>
																			    	<td class='spr'> " .number_format ($file[$row -2], 0, '.', "'") . " - " .number_format ($file[$row -1], 0, '.', "'") . "</td>
																			    </tr>
																		    ";
															    break;
														}
														$row++;
													}
													//  File bitte schliessen...    	
													fclose($handle);
												}
											} else{
												echo	"	
														<tr>
														   	<th></th>
														  	<th>3 ans</th>
														 	<td class='spr'>0</td>
														</tr>
														";
											}
												$pneuinputde2 = $pneuinputde2 / 3 * 4;
												$row = 1;
												$file=file("pneu.csv");

											if (76000 <= $pneuinputde2 and $pneuinputde2 < 279001){
												if (($handle = fopen("pneu.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $pneuinputde2 and $pneuinputde2 > 0) {
												        		echo	"	
																        		<tr>
																			    	<th></th>
																			    	<th>4 ans</th>
																			    	<td class='spr'> " .number_format ($file[$row -2], 0, '.', "'") . " - " .number_format ($file[$row -1], 0, '.', "'") . "</td>
																			    </tr>
																		    ";
															    break;
														}
														$row++;
													}
													//  File bitte schliessen...    	
													fclose($handle);
												}
											} else{
												echo	"	
														<tr>
														   	<th></th>
														  	<th>4 ans</th>
														 	<td class='spr'>0</td>
														</tr>
														";
											}
											$pneuinputde2 = $pneuinputde2 / 4 * 5;
											$row = 1;
											$file=file("pneu.csv");

											if (102000 <= $pneuinputde2 and $pneuinputde2 < 351001){
												if (($handle = fopen("pneu.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $pneuinputde2 and $pneuinputde2 > 0) {
												        		echo	"	
																        		<tr>
																			    	<th></th>
																			    	<th>5 ans</th>
																			    	<td class='spr'> " .number_format ($file[$row -2], 0, '.', "'") . " - " .number_format ($file[$row -1], 0, '.', "'") . "</td>
																			    </tr>
																		    </table>";
															    break;
														}
														$row++;
													}
													//  File bitte schliessen...    	
													fclose($handle);
												}
											} else{
												echo	"	
														<tr>
														   	<th></th>
														  	<th>5 ans</th>
														 	<td class='spr'>0</td>
														</tr>
														</table>";
											}
										}
							?>							
							</div>
							<!-- Inhalt REBRANDING Deal Deutsch -->
						    <div role="tabpanel" class="tab-pane" id="legaragede">
						    	<br />
						    	<div class="panel-group" id="accordion3">
							        <div class="panel panel-primary">
							          <div class="panel-heading">
							            <h4 class="panel-title">
							              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse5">Calculer chiffre d'affaires</a>
							            </h4>
							          </div>
							          <div id="collapse5" class="panel-collapse collapse">
							            <div class="panel-body">
									    	<form name="formularlegarage" action="#legaragede" role="form" method="post" onsubmit="return chkFormularlegarage()">
											  <div class="form-group">
											    <label for="exampleInputInvestition3">Montant de l'investissement Net CHF</label>
											    <input type="number" class="form-control formlegarage" id="exampleInputInvestition3" name="legarageinputde" placeholder="Montant de l'investissement Net CHF">
											  	<label for="exampleInputKunde5">Client</label>
											    <input type="text" class="form-control formlegarage" id="exampleInputKunde5" name="legaragekunde" placeholder="Client">
											    <label for="exampleInputGebietsleiter5">Responsable régional</label>
											    <input type="text" class="form-control formlegarage" id="exampleInputGebietsleiter5" name="legaragegebl" placeholder="Responsable régional">
											    <label for="exampleInputAngebot3">Description de l'offre</label>
											    <input type="text" class="form-control formlegarage" id="exampleInputAngebot3" name="legarageangebot" placeholder="Description de l'offre">
											  </div>
											  <button type="submit" class="btn btn-primary">Calculer chiffre d'affaires</button>
											</form>
											</div>
								          </div>
								        </div>
								        <div class="panel panel-primary">
								          <div class="panel-heading">
								            <h4 class="panel-title">
								              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse6">Calculer montant de l'investissement Net</a>
								            </h4>
								          </div>
								          <div id="collapse6" class="panel-collapse collapse">
								            <div class="panel-body">
								            <form name="formularlegarage2" action="#legaragede" role="form" method="post" onsubmit="return chkFormularlegarage2()">
											  <div class="form-group">
											    <label for="exampleInputUmsatz3">Chiffre d'affaires CHF par an</label>
											    <input type="number" class="form-control formlegarage" id="exampleInputUmsatz3" name="legarageinputde2" placeholder="Chiffre d'affaires CHF par an">
											  </div>
											  <button type="submit" class="btn btn-primary">Calculer montant de l'investissement Net</button>
											</form>
										</div>
								      </div>
									</div>
								</div> 
								<br />
								<?php
								error_reporting(0);
								    $legarageinputde = $_POST["legarageinputde"];
								    $legaragekunde = $_POST["legaragekunde"];
								    $legaragegebl = $_POST["legaragegebl"];
								    $legarageangebot = $_POST["legarageangebot"];
											$row = 1;
											if (($handle = fopen("legarage.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
											    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
											        // Berechnung die ein Resultat ergibt...
											        // prüfen des resultates
											        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
											        if ( $data[0] <= $legarageinputde and $data[1] > $legarageinputde ) {
											        	echo	"<br />
											        				<h3>Offre REBRANDING Deal (" . $legarageangebot . ")</h3>
											        				<h4 class='screenhide'>" . $legaragekunde . "</h4>
											        				<br />
											        				<table class='table'>
														        		<tr>
														        			<th>Montant de l'investissement</th>
														        			<td class='spr'>" . number_format ($legarageinputde, 0, '.', "'") . "</td>
														        		</tr>
														        		<tr>
																	    	<th>Chiffre d'affaires</th>
																	    	<td class='spr'>" . number_format ($data[2], 0, '.', "'") . "</td>
																	    </tr>
																    </table>
																    <table class='table'>
																	    <tr>
																	    	<th></th>
																	    	<th class='spr'><br />Par an</th>
																	    	<th class='spr'><br />Par mois</th>
																	    </tr>
														        		<tr>
																	    	<th>1 année</th>
																	    	<td class='spr'>" . number_format ($data[3] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[3] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>2 ans</th>
																	    	<td class='spr'>" . number_format ($data[4] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[4] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>3 ans</th>
																	    	<td class='spr'>" . number_format ($data[5] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[5] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>4 ans</th>
																	    	<td class='spr'>" . number_format ($data[6] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[6] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>5 ans</th>
																	    	<td class='spr'>" . number_format ($data[7] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[7] / 12, 0, '.', "'") . "</td>
																	  	</tr>
																	</table>
																<button type='submit' class='btn btn-primary' onClick='javascript:window.print()'>Imprimer</button>
																<br /><h4 class='screenhide'>" . $legaragegebl . "</h4>
																<br /><br /><div class ='signatur'></div>";
											            break;
											        	}
											        $row++;
											    	}
											//  File bitte schliessen...    	
										    fclose($handle);
											}
										// nur weiter wenn auch ein gültiges Result aus File...
								?>
								<?php
								$legarageinputde2 = $_POST["legarageinputde2"];
								$legaragekunde2 = $_POST["legaragekunde2"];
								$legaragegebl2 = $_POST["legaragegebl2"];
								if (isset($legarageinputde2)) {
								error_reporting(0);
											$row = 1;
											$file=file("legarage.csv");
											if (40000 <= $legarageinputde2 and $legarageinputde2 < 80001){
												if (($handle = fopen("legarage.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $legarageinputde2 and $legarageinputde2 > 0 ) {
												        		echo	"<br />
													        				<table class='table'>
																        		<tr>
																        			<th>Chiffre d'affaires CHF par an</th>
																        			<td class='spr'>" . number_format ($legarageinputde2, 0, '.', "'") . "</td>
																        		</tr>
																        	</table>
																        	<table class='table'>
																        		<tr>
																			    	<th>Montant de l'investissement durée</th>
																			    	<th>1 année</th>
																			    	<td class='spr'> " .number_format ($file[$row -2], 0, '.', "'") . " - " .number_format ($file[$row -1], 0, '.', "'") . "</td>
																			    </tr>
																		    ";
															    break;
														}
														$row++;
													}
													//  File bitte schliessen...    	
													fclose($handle);
												}
											} else{
												echo	"<br />
													    <table class='table'>
														  	<tr>
														  		<th>Chiffre d'affaires CHF par an</th>
														  		<td class='spr'>" . number_format ($legarageinputde2, 0, '.', "'") . "</td>
														  	</tr>
														</table>
														<table class='table'>
														  	<tr>
														 		<th>Montant de l'investissement durée</th>
														 		<th>1 année</th>
														 		<td class='spr'>0</td>
														 	</tr>
														";
											}
											$legarageinputde2 = $legarageinputde2 * 2;
											$row = 1;
											$file=file("legarage.csv");

											if (60000 <= $legarageinputde2 and $legarageinputde2 < 160001){
												if (($handle = fopen("legarage.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $legarageinputde2 and $legarageinputde2 > 0) {
												        		echo	"	
																        <tr>
																			<th></th>
																			<th>2 ans</th>
																			<td class='spr'> " .number_format ($file[$row -2], 0, '.', "'") . " - " .number_format ($file[$row -1], 0, '.', "'") . "</td>
																		</tr>
																		    ";
															    break;
														}
														$row++;
													}
													//  File bitte schliessen...    	
													fclose($handle);
												}
											} else{
												echo	"	
														<tr>
														   	<th></th>
														  	<th>2 ans</th>
														 	<td class='spr'>0</td>
														</tr>
														";
											}
											$legarageinputde2 = $legarageinputde2 / 2 * 3;
											$row = 1;
											$file=file("legarage.csv");

											if (92000 <= $legarageinputde2 and $legarageinputde2 < 240001){
												if (($handle = fopen("legarage.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $legarageinputde2 and $legarageinputde2 > 0) {
												        		echo	"	
																        		<tr>
																			    	<th></th>
																			    	<th>3 ans</th>
																			    	<td class='spr'> " .number_format ($file[$row -2], 0, '.', "'") . " - " .number_format ($file[$row -1], 0, '.', "'") . "</td>
																			    </tr>
																		    ";
															    break;
														}
														$row++;
													}
													//  File bitte schliessen...    	
													fclose($handle);
												}
											} else{
												echo	"	
														<tr>
														   	<th></th>
														  	<th>3 ans</th>
														 	<td class='spr'>0</td>
														</tr>
														";
											}
												$legarageinputde2 = $legarageinputde2 / 3 * 4;
												$row = 1;
												$file=file("legarage.csv");

											if (120000 <= $legarageinputde2 and $legarageinputde2 < 320001){
												if (($handle = fopen("legarage.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $legarageinputde2 and $legarageinputde2 > 0) {
												        		echo	"	
																        		<tr>
																			    	<th></th>
																			    	<th>4 ans</th>
																			    	<td class='spr'> " .number_format ($file[$row -2], 0, '.', "'") . " - " .number_format ($file[$row -1], 0, '.', "'") . "</td>
																			    </tr>
																		    ";
															    break;
														}
														$row++;
													}
													//  File bitte schliessen...    	
													fclose($handle);
												}
											} else{
												echo	"	
														<tr>
														   	<th></th>
														  	<th>4 ans</th>
														 	<td class='spr'>0</td>
														</tr>
														";
											}
											$legarageinputde2 = $legarageinputde2 / 4 * 5;
											$row = 1;
											$file=file("legarage.csv");

											if (150000 <= $legarageinputde2 and $legarageinputde2 < 390001){
												if (($handle = fopen("legarage.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $legarageinputde2 and $legarageinputde2 > 0) {
												        		echo	"	
																        		<tr>
																			    	<th></th>
																			    	<th>5 ans</th>
																			    	<td class='spr'> " .number_format ($file[$row -2], 0, '.', "'") . " - " .number_format ($file[$row -1], 0, '.', "'") . "</td>
																			    </tr>
																		    </table>";
															    break;
														}
														$row++;
													}
													//  File bitte schliessen...    	
													fclose($handle);
												}
											} else{
												echo	"	
														<tr>
														   	<th></th>
														  	<th>5 ans</th>
														 	<td class='spr'>0</td>
														</tr>
														</table>";
											}
										}
							?>						
							</div>
							<!-- Inhalt le GARAGE Deal Französisch -->
						    <div role="tabpanel" class="tab-pane" id="legaragenewde">
						    	<br />
						    	<div class="panel-group" id="accordion4">
							        <div class="panel panel-success">
							          <div class="panel-heading">
							            <h4 class="panel-title">
							              <a data-toggle="collapse" data-parent="#accordion4" href="#collapse7">Calculer chiffre d'affaires</a>
							            </h4>
							          </div>
							          <div id="collapse7" class="panel-collapse collapse">
							            <div class="panel-body">
									    	<form name="formularlegaragenew" action="#legaragenewde" role="form" method="post" onsubmit="return chkFormularlegaragenew()">
											  <div class="form-group">
											    <label for="exampleInputInvestition4">Montant de l'investissement Net CHF</label>
											    <input type="number" class="form-control formlegaragenew" id="exampleInputInvestition4" name="legaragenewinputde" placeholder="Montant de l'investissement Net CHF">
											  	<label for="exampleInputKunde7">Client</label>
											    <input type="text" class="form-control formlegaragenew" id="exampleInputKunde7" name="legaragenewkunde" placeholder="Client">
											    <label for="exampleInputGebietsleiter7">Responsable régional</label>
											    <input type="text" class="form-control formlegaragenew" id="exampleInputGebietsleiter7" name="legaragenewgebl" placeholder="Responsable régional">
											    <label for="exampleInputAngebot4">Description de l'offre</label>
											    <input type="text" class="form-control formlegaragenew" id="exampleInputAngebot4" name="legaragenewangebot" placeholder="Description de l'offre">
											  </div>
											  <button type="submit" class="btn btn-success">Calculer chiffre d'affaires</button>
											</form>
											</div>
								          </div>
								        </div>
								        <div class="panel panel-success">
								          <div class="panel-heading">
								            <h4 class="panel-title">
								              <a data-toggle="collapse" data-parent="#accordion4" href="#collapse8">Calculer montant de l'investissement Net</a>
								            </h4>
								          </div>
								          <div id="collapse8" class="panel-collapse collapse">
								            <div class="panel-body">
								            <form name="formularlegaragenew2" action="#legaragenewde" role="form" method="post" onsubmit="return chkFormularlegaragenew2()">
											  <div class="form-group">
											    <label for="exampleInputUmsatz4">Chiffre d'affaires CHF par an</label>
											    <input type="number" class="form-control formlegaragenew" id="exampleInputUmsatz3" name="legaragenewinputde2" placeholder="Chiffre d'affaires CHF par an">
											  </div>
											  <button type="submit" class="btn btn-success">Calculer montant de l'investissement Net</button>
											</form>
										</div>
								      </div>
									</div>
								</div> 
								<br />
								<?php
								error_reporting(0);
								    $legaragenewinputde = $_POST["legaragenewinputde"];
								    $legaragenewkunde = $_POST["legaragenewkunde"];
								    $legaragenewgebl = $_POST["legaragenewgebl"];
								    $legaragenewangebot = $_POST["legaragenewangebot"];
											$row = 1;
											if (($handle = fopen("legaragenew.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
											    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
											        // Berechnung die ein Resultat ergibt...
											        // prüfen des resultates
											        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
											        if ( $data[0] <= $legaragenewinputde and $data[1] > $legaragenewinputde ) {
											        	echo	"<br />
											        				<h3>Offre leGARAGE Deal (" . $legaragenewangebot . ")</h3>
											        				<h4 class='screenhide'>" . $legaragenewkunde . "</h4>
											        				<br />
											        				<table class='table'>
														        		<tr>
														        			<th>Montant de l'investissement</th>
														        			<td class='spr'>" . number_format ($legaragenewinputde, 0, '.', "'") . "</td>
														        		</tr>
														        		<tr>
																	    	<th>Chiffre d'affaires</th>
																	    	<td class='spr'>" . number_format ($data[2], 0, '.', "'") . "</td>
																	    </tr>
																    </table>
																    <table class='table'>
																	    <tr>
																	    	<th></th>
																	    	<th class='spr'><br />Par an</th>
																	    	<th class='spr'><br />Par mois</th>
																	    </tr>
														        		<tr>
																	    	<th>1 année</th>
																	    	<td class='spr'>" . number_format ($data[3] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[3] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>2 ans</th>
																	    	<td class='spr'>" . number_format ($data[4] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[4] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>3 ans</th>
																	    	<td class='spr'>" . number_format ($data[5] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[5] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>4 ans</th>
																	    	<td class='spr'>" . number_format ($data[6] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[6] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>5 ans</th>
																	    	<td class='spr'>" . number_format ($data[7] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[7] / 12, 0, '.', "'") . "</td>
																	  	</tr>
																	</table>
																<button type='submit' class='btn btn-success' onClick='javascript:window.print()'>Imprimer</button>
																<br /><h4 class='screenhide'>" . $legaragenewgebl . "</h4>
																<br /><br /><div class ='signatur'></div>";
											            break;
											        	}
											        $row++;
											    	}
											//  File bitte schliessen...    	
										    fclose($handle);
											}
										// nur weiter wenn auch ein gültiges Result aus File...
								?>
								<?php
								$legaragenewinputde2 = $_POST["legaragenewinputde2"];
								$legaragenewkunde2 = $_POST["legaragenewkunde2"];
								$legaragenewgebl2 = $_POST["legaragenewgebl2"];
								if (isset($legaragenewinputde2)) {
								error_reporting(0);
											$row = 1;
											$file=file("legaragenew.csv");
											if (48000 <= $legaragenewinputde2 and $legaragenewinputde2 < 96001){
												if (($handle = fopen("legaragenew.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $legaragenewinputde2 and $legaragenewinputde2 > 0 ) {
												        		echo	"<br />
													        				<table class='table'>
																        		<tr>
																        			<th>Chiffre d'affaires CHF par an</th>
																        			<td class='spr'>" . number_format ($legaragenewinputde2, 0, '.', "'") . "</td>
																        		</tr>
																        	</table>
																        	<table class='table'>
																        		<tr>
																			    	<th>Montant de l'investissement durée</th>
																			    	<th>1 année</th>
																			    	<td class='spr'> " .number_format ($file[$row -2], 0, '.', "'") . " - " .number_format ($file[$row -1], 0, '.', "'") . "</td>
																			    </tr>
																		    ";
															    break;
														}
														$row++;
													}
													//  File bitte schliessen...    	
													fclose($handle);
												}
											} else{
												echo	"<br />
													    <table class='table'>
														  	<tr>
														  		<th>Chiffre d'affaires CHF par an</th>
														  		<td class='spr'>" . number_format ($legaragenewinputde2, 0, '.', "'") . "</td>
														  	</tr>
														</table>
														<table class='table'>
														  	<tr>
														 		<th>Montant de l'investissement durée</th>
														 		<th>1 année</th>
														 		<td class='spr'>0</td>
														 	</tr>
														";
											}
											$legaragenewinputde2 = $legaragenewinputde2 * 2;
											$row = 1;
											$file=file("legaragenew.csv");

											if (72000 <= $legaragenewinputde2 and $legaragenewinputde2 < 192001){
												if (($handle = fopen("legaragenew.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $legaragenewinputde2 and $legaragenewinputde2 > 0) {
												        		echo	"	
																        <tr>
																			<th></th>
																			<th>2 ans</th>
																			<td class='spr'> " .number_format ($file[$row -2], 0, '.', "'") . " - " .number_format ($file[$row -1], 0, '.', "'") . "</td>
																		</tr>
																		    ";
															    break;
														}
														$row++;
													}
													//  File bitte schliessen...    	
													fclose($handle);
												}
											} else{
												echo	"	
														<tr>
														   	<th></th>
														  	<th>2 ans</th>
														 	<td class='spr'>0</td>
														</tr>
														";
											}
											$legaragenewinputde2 = $legaragenewinputde2 / 2 * 3;
											$row = 1;
											$file=file("legaragenew.csv");

											if (110400 <= $legaragenewinputde2 and $legaragenewinputde2 < 288001){
												if (($handle = fopen("legaragenew.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $legaragenewinputde2 and $legaragenewinputde2 > 0) {
												        		echo	"	
																        		<tr>
																			    	<th></th>
																			    	<th>3 ans</th>
																			    	<td class='spr'> " .number_format ($file[$row -2], 0, '.', "'") . " - " .number_format ($file[$row -1], 0, '.', "'") . "</td>
																			    </tr>
																		    ";
															    break;
														}
														$row++;
													}
													//  File bitte schliessen...    	
													fclose($handle);
												}
											} else{
												echo	"	
														<tr>
														   	<th></th>
														  	<th>3 ans</th>
														 	<td class='spr'>0</td>
														</tr>
														";
											}
												$legaragenewinputde2 = $legaragenewinputde2 / 3 * 4;
												$row = 1;
												$file=file("legaragenew.csv");

											if (144000 <= $legaragenewinputde2 and $legaragenewinputde2 < 384001){
												if (($handle = fopen("legaragenew.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $legaragenewinputde2 and $legaragenewinputde2 > 0) {
												        		echo	"	
																        		<tr>
																			    	<th></th>
																			    	<th>4 ans</th>
																			    	<td class='spr'> " .number_format ($file[$row -2], 0, '.', "'") . " - " .number_format ($file[$row -1], 0, '.', "'") . "</td>
																			    </tr>
																		    ";
															    break;
														}
														$row++;
													}
													//  File bitte schliessen...    	
													fclose($handle);
												}
											} else{
												echo	"	
														<tr>
														   	<th></th>
														  	<th>4 ans</th>
														 	<td class='spr'>0</td>
														</tr>
														";
											}
											$legaragenewinputde2 = $legaragenewinputde2 / 4 * 5;
											$row = 1;
											$file=file("legaragenew.csv");

											if (180000 <= $legaragenewinputde2 and $legaragenewinputde2 < 468001){
												if (($handle = fopen("legaragenew.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $legaragenewinputde2 and $legaragenewinputde2 > 0) {
												        		echo	"	
																        		<tr>
																			    	<th></th>
																			    	<th>5 ans</th>
																			    	<td class='spr'> " .number_format ($file[$row -2], 0, '.', "'") . " - " .number_format ($file[$row -1], 0, '.', "'") . "</td>
																			    </tr>
																		    </table>";
															    break;
														}
														$row++;
													}
													//  File bitte schliessen...    	
													fclose($handle);
												}
											} else{
												echo	"	
														<tr>
														   	<th></th>
														  	<th>5 ans</th>
														 	<td class='spr'>0</td>
														</tr>
														</table>";
											}
										}
							?>			
							</div>
						  </div>

						</div>
					</div>
				</div>
			  </div>
			  <!-- Bei Refresh der Seite aktuelles Tab beibehalten -->
			  	<script>
				//Tabs beibehalten

				    $('#deals a').click(function (e) {
				        e.preventDefault();
				        $(this).tab('show');
				    });

				    // Aktuelles Tab merken
				    $("ul.nav-tabs2 > li > a").on("shown.bs.tab", function (e) {
				        var id = $(e.target).attr("href").substr(1);
				        window.location.hash = id;
				    });

				    // Gemerktes Tab öffnen
				    var hash = window.location.hash;
				    $('#deals a[href="' + hash + '"]').tab('show');
				</script>
			</div>
	</div>
	<div class="footer">

    <div class="container">
        <p class="footer-brand">

            © ESA 2014

        </p>
    </div>
</div>
</body>
</html>