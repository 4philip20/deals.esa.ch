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
    alert("Si prega di inserire un importo d'investimento!");
    document.formularsmart.smartinputde.focus();
    return false;
  }
  if (document.formularsmart.smartinputde.value < 2000) {
    alert("L'importo d'investimento deve essere supera a 1'999 CHF!");
    document.formularsmart.smartinputde.focus();
    return false;
  }
  if (document.formularsmart.smartinputde.value > 20000) {
    alert("L'importo d'investimento deve essere più profondo di 20'001 CHF!");
    document.formularsmart.smartinputde.focus();
    return false;
  }
}
function chkFormularsmart2 () {
	if (document.formularsmart2.smartinputde2.value == "") {
    alert("Si prega di inserire un fatturato target!");
    document.formularsmart2.smartinputde2.focus();
    return false;
  }
  if (document.formularsmart2.smartinputde2.value < 16334) {
    alert("Il fatturato target deve essere supera a 16'333 CHF!");
    document.formularsmart2.smartinputde2.focus();
    return false;
  }
  if (document.formularsmart2.smartinputde2.value > 65000) {
    alert("Il fatturato target deve essere più profondo di 65'001 CHF!");
    document.formularsmart2.smartinputde2.focus();
    return false;
  }
}
function chkFormularpneu () {
  if (document.formularpneu.pneuinputde.value == "") {
    alert("Si prega di inserire un importo d'investimento!");
    document.formularpneu.pneuinputde.focus();
    return false;
  }
  if (document.formularpneu.pneuinputde.value < 2000) {
    alert("L'importo d'investimento deve essere supera a 1'999 CHF!");
    document.formularpneu.pneuinputde.focus();
    return false;
  }
  if (document.formularpneu.pneuinputde.value > 20000) {
    alert("L'importo d'investimento deve essere più profondo di 20'001 CHF!");
    document.formularpneu.pneuinputde.focus();
    return false;
  }
}
function chkFormularpneu2 () {
	if (document.formularpneu2.pneuinputde2.value == "") {
    alert("Si prega di inserire un fatturato target!");
    document.formularpneu2.pneuinputde2.focus();
    return false;
  }
  if (document.formularpneu2.pneuinputde2.value < 18000) {
    alert("Il fatturato target deve essere supera a 17'999 CHF!");
    document.formularpneu2.pneuinputde2.focus();
    return false;
  }
  if (document.formularpneu2.pneuinputde2.value > 70201) {
    alert("Il fatturato target deve essere più profondo di 70'201 CHF!");
    document.formularpneu2.pneuinputde2.focus();
    return false;
  }
}
function chkFormularlegarage () {
    if (document.formularlegarage.legarageinputde.value == "") {
    alert("Si prega di inserire un importo d'investimento!");
    document.formularlegarage.legarageinputde.focus();
    return false;
  }
  if (document.formularlegarage.legarageinputde.value < 3600) {
    alert("L'importo d'investimento deve essere supera a 3'599 CHF!");
    document.formularlegarage.legarageinputde.focus();
    return false;
  }
  if (document.formularlegarage.legarageinputde.value > 505001) {
    alert("L'importo d'investimento deve essere più profondo di 50'001 CHF!");
    document.formularlegarage.legarageinputde.focus();
    return false;
  }
}
function chkFormularlegarage2 () {
	if (document.formularlegarage2.legarageinputde2.value == "") {
    alert("Si prega di inserire un fatturato target!");
    document.formularlegarage2.legarageinputde2.focus();
    return false;
  }
  if (document.formularlegarage2.legarageinputde2.value < 30000) {
    alert("Il fatturato target deve essere supera a 29'999 CHF!");
    document.formularlegarage2.legarageinputde2.focus();
    return false;
  }
  if (document.formularlegarage2.legarageinputde2.value > 80000) {
    alert("Il fatturato target deve essere più profondo di 80'001 CHF!");
    document.formularlegarage2.legarageinputde2.focus();
    return false;
  }
}
function chkFormularlegaragenew () {
    if (document.formularlegaragenew.legaragenewinputde.value == "") {
    alert("Si prega di inserire un importo d'investimento!");
    document.formularlegaragenew.legaragenewinputde.focus();
    return false;
  }
  if (document.formularlegaragenew.legaragenewinputde.value < 2000) {
    alert("L'importo d'investimento deve essere supera a 1'999 CHF!");
    document.formularlegaragenew.legaragenewinputde.focus();
    return false;
  }
  if (document.formularlegaragenew.legaragenewinputde.value > 20000) {
    alert("L'importo d'investimento deve essere più profondo di 20'001 CHF!");
    document.formularlegaragenew.legaragenewinputde.focus();
    return false;
  }
}
function chkFormularlegaragenew2 () {
	if (document.formularlegaragenew2.legaragenewinputde2.value == "") {
    alert("Si prega di inserire un fatturato target!");
    document.formularlegaragenew2.legaragenewinputde2.focus();
    return false;
  }
  if (document.formularlegaragenew2.legaragenewinputde2.value < 36000) {
    alert("Il fatturato target deve essere supera a 35'999 CHF!");
    document.formularlegaragenew2.legaragenewinputde2.focus();
    return false;
  }
  if (document.formularlegaragenew2.legaragenewinputde2.value > 96000) {
    alert("Il fatturato target deve essere più profondo di 96'001 CHF!");
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
				        <img class="brand" alt="Brand" src="images/logo_it.jpg">
				      </a>
				    </div>
				  </div>
			  <!-- Nav tabs für Sprachenauswahl -->
			  <ul class="nav nav-tabs navbar-right" id="sprache">
			    <li role="presentation" class="active"><a href="itindex.php">IT</a></li>
			    <li role="presentation"><a href="frindex.php">FR</a></li>
			    <li role="presentation"><a href="index.php" aria-controls="de">DE</a></li>
			  </ul>
z
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
							              <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Calcolare fatturato target</a>
							            </h4>
							          </div>
							          <div id="collapse1" class="panel-collapse collapse">
							            <div class="panel-body">
									    	<form name="formularsmart" action="#smartde" role="form" method="post" onsubmit="return chkFormularsmart()">
											  <div class="form-group">
											    <label for="exampleInputInvestition1">Importo d'investimento netto CHF</label>
											    <input type="number" class="form-control formsmart" id="exampleInputInvestition1" name="smartinputde" placeholder="Importo d'investimento netto CHF">
											  	<label for="exampleInputKunde1">Cliente</label>
											    <input type="text" class="form-control formsmart" id="exampleInputKunde1" name="smartkunde" placeholder="Cliente">
											    <label for="exampleInputGebietsleiter1">Responsiblili regionali</label>
											    <input type="text" class="form-control formsmart" id="exampleInputGebietsleiter1" name="smartgebl" placeholder="Responsiblili regionali">
											    <label for="exampleInputAngebot1">Descrizione dell'offerta</label>
											    <input type="text" class="form-control formsmart" id="exampleInputAngebot1" name="smartangebot" placeholder="Descrizione dell'offerta">
											  </div>
											  <button type="submit" class="btn btn-warning">Calcolare fatturato target</button>
											</form>
											</div>
								          </div>
								        </div>
								        <div class="panel panel-warning">
								          <div class="panel-heading">
								            <h4 class="panel-title">
								              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Calcolare importo d'investimento</a>
								            </h4>
								          </div>
								          <div id="collapse2" class="panel-collapse collapse">
								            <div class="panel-body">
								            <form name="formularsmart2" action="#smartde" role="form" method="post" onsubmit="return chkFormularsmart2()">
											  <div class="form-group">
											    <label for="exampleInputUmsatz1">Fatturato target CHF per anno</label>
											    <input type="number" class="form-control formsmart" id="exampleInputUmsatz1" name="smartinputde2" placeholder="Fatturato target CHF per anno">
											  </div>
											  <button type="submit" class="btn btn-warning">Calcolare importo d'investimento</button>
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
											        				<h3>Offerta Smart Deal (" . $smartangebot . ")</h3>
											        				<h4 class='screenhide'>" . $smartkunde . "</h4>
											        				<br />
											        				<table class='table'>
														        		<tr>
														        			<th>Importo d'investimento</th>
														        			<td class='spr'>" . number_format ($smartinputde, 0, '.', "'") . "</td>
														        		</tr>
														        		<tr>
																	    	<th>Fatturato target totale CHF</th>
																	    	<td class='spr'>" . number_format ($data[2], 0, '.', "'") . "</td>
																	    </tr>
																    </table>
																    <table class='table'>
																	    <tr>
																	    	<th></th>
																	    	<th class='spr'><br />Per anno</th>
																	    	<th class='spr'><br />Per mese</th>
																	    </tr>
														        		<tr>
																	    	<th>1 anno</th>
																	    	<td class='spr'>" . number_format ($data[3] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[3] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>2 anni</th>
																	    	<td class='spr'>" . number_format ($data[4] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[4] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>3 anni</th>
																	    	<td class='spr'>" . number_format ($data[5] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[5] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>4 anni</th>
																	    	<td class='spr'>" . number_format ($data[6] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[6] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>5 anni</th>
																	    	<td class='spr'>" . number_format ($data[7] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[7] / 12, 0, '.', "'") . "</td>
																	  	</tr>
																	</table>
																<button type='submit' class='btn btn-warning' onClick='javascript:window.print()'>Stampare</button>
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
																        			<th>Fatturato target CHF per anno</th>
																        			<td class='spr'>" . number_format ($smartinputde2, 0, '.', "'") . "</td>
																        		</tr>
																        	</table>
																        	<table class='table'>
																        		<tr>
																			    	<th>Importo d'investimento durata</th>
																			    	<th>1 anno</th>
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
														  		<th>Fatturato target CHF per anno</th>
														  		<td class='spr'>" . number_format ($smartinputde2, 0, '.', "'") . "</td>
														  	</tr>
														</table>
														<table class='table'>
														  	<tr>
														 		<th>Investitionsbetrag Laufzeit</th>
														 		<th>1 anno</th>
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
																			<th>2 anni</th>
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
														  	<th>2 anni</th>
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
																			    	<th>3 anni</th>
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
														  	<th>3 anni</th>
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
																			    	<th>4 anni</th>
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
														  	<th>4 anni</th>
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
																			    	<th>5 anni</th>
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
														  	<th>5 anni</th>
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
							              <a data-toggle="collapse" data-parent="#accordion2" href="#collapse3">Calcolare fatturato target</a>
							            </h4>
							          </div>
							          <div id="collapse3" class="panel-collapse collapse">
							            <div class="panel-body">
									    	<form name="formularpneu" action="#pneude" role="form" method="post" onsubmit="return chkFormularpneu()">
											  <div class="form-group">
											    <label for="exampleInputInvestition2">Importo d'investimento netto CHF</label>
											    <input type="number" class="form-control formpneu" id="exampleInputInvestition2" name="pneuinputde" placeholder="Importo d'investimento netto CHF">
											  	<label for="exampleInputKunde3">Cliente</label>
											    <input type="text" class="form-control formpneu" id="exampleInputKunde3" name="pneukunde" placeholder="Cliente">
											    <label for="exampleInputGebietsleiter3">Responsiblili regionali</label>
											    <input type="text" class="form-control formpneu" id="exampleInputGebietsleiter3" name="pneugebl" placeholder="Responsiblili regionali">
											    <label for="exampleInputAngebot2">Descrizione dell'offerta</label>
											    <input type="text" class="form-control formpneu" id="exampleInputAngebot2" name="pneuangebot" placeholder="Descrizione dell'offerta">
											  </div>
											  <button type="submit" class="btn btn-default">Calcolare fatturato target</button>
											</form>
											</div>
								          </div>
								        </div>
								        <div class="panel panel-default">
								          <div class="panel-heading">
								            <h4 class="panel-title">
								              <a data-toggle="collapse" data-parent="#accordion2" href="#collapse4">Calcolare importo d'investimento</a>
								            </h4>
								          </div>
								          <div id="collapse4" class="panel-collapse collapse">
								            <div class="panel-body">
								            <form name="formularpneu2" action="#pneude" role="form" method="post" onsubmit="return chkFormularpneu2()">
											  <div class="form-group">
											    <label for="exampleInputUmsatz2">Fatturato target CHF per anno</label>
											    <input type="number" class="form-control formpneu" id="exampleInputUmsatz2" name="pneuinputde2" placeholder="Fatturato target CHF per anno">
											  </div>
											  <button type="submit" class="btn btn-default">Calcolare importo d'investimento</button>
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
											        				<h3>Offerta Pneu Deal (" . $pneuangebot . ")</h3>
											        				<h4 class='screenhide'>" . $pneukunde . "</h4>
											        				<br />
											        				<table class='table'>
														        		<tr>
														        			<th>Importo d'investimento</th>
														        			<td class='spr'>" . number_format ($pneuinputde, 0, '.', "'") . "</td>
														        		</tr>
														        		<tr>
																	    	<th>Fatturato target totale CHF</th>
																	    	<td class='spr'>" . number_format ($data[2], 0, '.', "'") . "</td>
																	    </tr>
																    </table>
																    <table class='table'>
																	    <tr>
																	    	<th></th>
																	    	<th class='spr'><br />Per anno</th>
																	    	<th class='spr'><br />Per mese</th>
																	    </tr>
														        		<tr>
																	    	<th>1 anno</th>
																	    	<td class='spr'>" . number_format ($data[3] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[3] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>2 anni</th>
																	    	<td class='spr'>" . number_format ($data[4] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[4] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>3 anni</th>
																	    	<td class='spr'>" . number_format ($data[5] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[5] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>4 anni</th>
																	    	<td class='spr'>" . number_format ($data[6] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[6] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>5 anni</th>
																	    	<td class='spr'>" . number_format ($data[7] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[7] / 12, 0, '.', "'") . "</td>
																	  	</tr>
																	</table>
																<button type='submit' class='btn btn-default' onClick='javascript:window.print()'>Stampare</button>
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
																        			<th>Fatturato target CHF per anno</th>
																        			<td class='spr'>" . number_format ($pneuinputde2, 0, '.', "'") . "</td>
																        		</tr>
																        	</table>
																        	<table class='table'>
																        		<tr>
																			    	<th>Importo d'investimento durata</th>
																			    	<th>1 anno</th>
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
														  		<th>Fatturato target CHF per anno</th>
														  		<td class='spr'>" . number_format ($pneuinputde2, 0, '.', "'") . "</td>
														  	</tr>
														</table>
														<table class='table'>
														  	<tr>
														 		<th>Investitionsbetrag Laufzeit</th>
														 		<th>1 anno</th>
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
																			<th>2 anni</th>
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
														  	<th>2 anni</th>
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
																			    	<th>3 anni</th>
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
														  	<th>3 anni</th>
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
																			    	<th>4 anni</th>
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
														  	<th>4 anni</th>
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
																			    	<th>5 anni</th>
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
														  	<th>5 anni</th>
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
							              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse5">Calcolare fatturato target</a>
							            </h4>
							          </div>
							          <div id="collapse5" class="panel-collapse collapse">
							            <div class="panel-body">
									    	<form name="formularlegarage" action="#legaragede" role="form" method="post" onsubmit="return chkFormularlegarage()">
											  <div class="form-group">
											    <label for="exampleInputInvestition3">Importo d'investimento netto CHF</label>
											    <input type="number" class="form-control formlegarage" id="exampleInputInvestition3" name="legarageinputde" placeholder="Importo d'investimento netto CHF">
											    <label for="exampleInputKunde5">Cliente</label>
											    <input type="text" class="form-control formlegarage" id="exampleInputKunde5" name="legaragekunde" placeholder="Cliente">
											    <label for="exampleInputGebietsleiter5">Responsiblili regionali</label>
											    <input type="text" class="form-control formlegarage" id="exampleInputGebietsleiter5" name="legaragegebl" placeholder="Responsiblili regionali">
											    <label for="exampleInputAngebot3">Descrizione dell'offerta</label>
											    <input type="text" class="form-control formlegarage" id="exampleInputAngebot3" name="legarageangebot" placeholder="Descrizione dell'offerta">
											  </div>
											  <button type="submit" class="btn btn-primary">Calcolare fatturato target</button>
											</form>
											</div>
								          </div>
								        </div>
								        <div class="panel panel-primary">
								          <div class="panel-heading">
								            <h4 class="panel-title">
								              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse6">Calcolare importo d'investimento</a>
								            </h4>
								          </div>
								          <div id="collapse6" class="panel-collapse collapse">
								            <div class="panel-body">
								            <form name="formularlegarage2" action="#legaragede" role="form" method="post" onsubmit="return chkFormularlegarage2()">
											  <div class="form-group">
											    <label for="exampleInputUmsatz3">Fatturato target CHF per anno</label>
											    <input type="number" class="form-control formlegarage" id="exampleInputUmsatz3" name="legarageinputde2" placeholder="Fatturato target CHF per anno">
											  </div>
											  <button type="submit" class="btn btn-primary">Calcolare importo d'investimento</button>
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
											        				<h3>Offerta leGARAGE Deal (" . $legarageangebot . ")</h3>
											        				<h4 class='screenhide'>" . $legaragekunde . "</h4>
											        				<br />
											        				<table class='table'>
														        		<tr>
														        			<th>Importo d'investimento</th>
														        			<td class='spr'>" . number_format ($legarageinputde, 0, '.', "'") . "</td>
														        		</tr>
														        		<tr>
																	    	<th>Fatturato target totale CHF</th>
																	    	<td class='spr'>" . number_format ($data[2], 0, '.', "'") . "</td>
																	    </tr>
																    </table>
																    <table class='table'>
																	    <tr>
																	    	<th></th>
																	    	<th class='spr'><br />Per anno</th>
																	    	<th class='spr'><br />Per mese</th>
																	    </tr>
														        		<tr>
																	    	<th>1 anno</th>
																	    	<td class='spr'>" . number_format ($data[3] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[3] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>2 anni</th>
																	    	<td class='spr'>" . number_format ($data[4] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[4] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>3 anni</th>
																	    	<td class='spr'>" . number_format ($data[5] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[5] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>4 anni</th>
																	    	<td class='spr'>" . number_format ($data[6] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[6] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>5 anni</th>
																	    	<td class='spr'>" . number_format ($data[7] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[7] / 12, 0, '.', "'") . "</td>
																	  	</tr>
																	</table>
																<button type='submit' class='btn btn-primary' onClick='javascript:window.print()'>Stampare</button>
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
																        			<th>Fatturato target CHF per anno</th>
																        			<td class='spr'>" . number_format ($legarageinputde2, 0, '.', "'") . "</td>
																        		</tr>
																        	</table>
																        	<table class='table'>
																        		<tr>
																			    	<th>Importo d'investimento durata</th>
																			    	<th>1 anno</th>
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
														  		<th>Fatturato target CHF per anno</th>
														  		<td class='spr'>" . number_format ($legarageinputde2, 0, '.', "'") . "</td>
														  	</tr>
														</table>
														<table class='table'>
														  	<tr>
														 		<th>Investitionsbetrag Laufzeit</th>
														 		<th>1 anno</th>
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
																			<th>2 anni</th>
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
														  	<th>2 anni</th>
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
																			    	<th>3 anni</th>
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
														  	<th>3 anni</th>
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
																			    	<th>4 anni</th>
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
														  	<th>4 anni</th>
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
																			    	<th>5 anni</th>
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
														  	<th>5 anni</th>
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
							              <a data-toggle="collapse" data-parent="#accordion4" href="#collapse7">Calcolare fatturato target</a>
							            </h4>
							          </div>
							          <div id="collapse7" class="panel-collapse collapse">
							            <div class="panel-body">
									    	<form name="formularlegaragenew" action="#legaragenewde" role="form" method="post" onsubmit="return chkFormularlegaragenew()">
											  <div class="form-group">
											    <label for="exampleInputInvestition4">Importo d'investimento netto CHF</label>
											    <input type="number" class="form-control formlegaragenew" id="exampleInputInvestition4" name="legaragenewinputde" placeholder="Importo d'investimento netto CHF">
											  	<label for="exampleInputKunde7">Cliente</label>
											    <input type="text" class="form-control formlegaragenew" id="exampleInputKunde7" name="legaragenewkunde" placeholder="Cliente">
											    <label for="exampleInputGebietsleiter7">Responsiblili regionali</label>
											    <input type="text" class="form-control formlegaragenew" id="exampleInputGebietsleiter7" name="legaragenewgebl" placeholder="Responsiblili regionali">
											    <label for="exampleInputAngebot4">Descrizione dell'offerta</label>
											    <input type="text" class="form-control formlegaragenew" id="exampleInputAngebot4" name="legaragenewangebot" placeholder="Descrizione dell'offerta">
											  </div>
											  <button type="submit" class="btn btn-success">Calcolare fatturato target</button>
											</form>
											</div>
								          </div>
								        </div>
								        <div class="panel panel-success">
								          <div class="panel-heading">
								            <h4 class="panel-title">
								              <a data-toggle="collapse" data-parent="#accordion4" href="#collapse8">Calcolare importo d'investimento</a>
								            </h4>
								          </div>
								          <div id="collapse8" class="panel-collapse collapse">
								            <div class="panel-body">
								            <form name="formularlegaragenew2" action="#legaragenewde" role="form" method="post" onsubmit="return chkFormularlegaragenew2()">
											  <div class="form-group">
											    <label for="exampleInputUmsatz4">Fatturato target CHF per anno</label>
											    <input type="number" class="form-control formlegaragenew" id="exampleInputUmsatz3" name="legaragenewinputde2" placeholder="Fatturato target CHF per anno">
											  </div>
											  <button type="submit" class="btn btn-success">Calcolare importo d'investimento</button>
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
											        				<h3>Offerta REBRANDING Deal (" . $legaragenewangebot . ")</h3>
											        				<h4 class='screenhide'>" . $legaragenewkunde . "</h4>
											        				<br />
											        				<table class='table'>
														        		<tr>
														        			<th>Importo d'investimento netto</th>
														        			<td class='spr'>" . number_format ($legaragenewinputde, 0, '.', "'") . "</td>
														        		</tr>
														        		<tr>
																	    	<th>Fatturato target totale CHF</th>
																	    	<td class='spr'>" . number_format ($data[2], 0, '.', "'") . "</td>
																	    </tr>
																    </table>
																    <table class='table'>
																	    <tr>
																	    	<th></th>
																	    	<th class='spr'><br />Per anno</th>
																	    	<th class='spr'><br />Per mese</th>
																	    </tr>
														        		<tr>
																	    	<th>1 anno</th>
																	    	<td class='spr'>" . number_format ($data[3] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[3] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>2 anni</th>
																	    	<td class='spr'>" . number_format ($data[4] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[4] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>3 anni</th>
																	    	<td class='spr'>" . number_format ($data[5] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[5] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>4 anni</th>
																	    	<td class='spr'>" . number_format ($data[6] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[6] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>5 anni</th>
																	    	<td class='spr'>" . number_format ($data[7] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[7] / 12, 0, '.', "'") . "</td>
																	  	</tr>
																	</table>
																<button type='submit' class='btn btn-success' onClick='javascript:window.print()'>Stampare</button>
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
																        			<th>Fatturato target CHF per anno</th>
																        			<td class='spr'>" . number_format ($legaragenewinputde2, 0, '.', "'") . "</td>
																        		</tr>
																        	</table>
																        	<table class='table'>
																        		<tr>
																			    	<th>Importo d'investimento durata</th>
																			    	<th>1 anno</th>
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
														  		<th>Fatturato target CHF per anno</th>
														  		<td class='spr'>" . number_format ($legaragenewinputde2, 0, '.', "'") . "</td>
														  	</tr>
														</table>
														<table class='table'>
														  	<tr>
														 		<th>Importo d'investimento durata</th>
														 		<th>1 anno</th>
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
																			<th>2 anni</th>
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
														  	<th>2 anni</th>
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
																			    	<th>3 anni</th>
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
														  	<th>3 anni</th>
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
																			    	<th>4 anni</th>
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
														  	<th>4 anni</th>
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
																			    	<th>5 anni</th>
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
														  	<th>5 anni</th>
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