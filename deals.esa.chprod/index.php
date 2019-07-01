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
<link rel="icon" type="image/png" sizes="96x96" href="images/icon.png">
<script src="https://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
function chkFormularsmart () {
  if (document.formularsmart.smartinputde.value == "") {
    alert("Bitte einen Investitionsbetrag eingeben!");
    document.formularsmart.smartinputde.focus();
    return false;
  }
  if (document.formularsmart.smartinputde.value < 2000) {
    alert("Der Betrag muss höher als 1'999 CHF sein!");
    document.formularsmart.smartinputde.focus();
    return false;
  }
  if (document.formularsmart.smartinputde.value > 20000) {
    alert("Der Betrag muss tiefer als 20'001 CHF sein!");
    document.formularsmart.smartinputde.focus();
    return false;
  }
}
function chkFormularsmart2 () {
	if (document.formularsmart2.smartinputde2.value == "") {
    alert("Bitte einen Umsatz eingeben!");
    document.formularsmart2.smartinputde2.focus();
    return false;
  }
  if (document.formularsmart2.smartinputde2.value < 16334) {
    alert("Der Umsatz muss höher als 16'333 CHF sein!");
    document.formularsmart2.smartinputde2.focus();
    return false;
  }
  if (document.formularsmart2.smartinputde2.value > 65000) {
    alert("Der Umsatz muss tiefer als 65'001 CHF sein!");
    document.formularsmart2.smartinputde2.focus();
    return false;
  }
}
//Paint
function chkFormularpneu () {
  if (document.formularpneu.pneuinputde.value == "") {
    alert("Bitte einen Investitionsbetrag eingeben!");
    document.formularpneu.pneuinputde.focus();
    return false;
  }
  if (document.formularpneu.pneuinputde.value < 3600) {
    alert("Der Betrag muss höher als 3'600 CHF sein!");
    document.formularpneu.pneuinputde.focus();
    return false;
  }
  if (document.formularpneu.pneuinputde.value > 50500) {
    alert("Der Betrag muss tiefer als 50'500 CHF sein!");
    document.formularpneu.pneuinputde.focus();
    return false;
  }
}
function chkFormularpneu2 () {
	if (document.formularpneu2.pneuinputde2.value == "") {
    alert("Bitte einen Umsatz eingeben!");
    document.formularpneu2.pneuinputde2.focus();
    return false;
  }
  if (document.formularpneu2.pneuinputde2.value < 18000) {
    alert("Der Umsatz muss höher als 17'999 CHF sein!");
    document.formularpneu2.pneuinputde2.focus();
    return false;
  }
  //TODO: Frage beantworten
  //Wieso öffnet 70200 SD RD & LGD Formular ??
  if (document.formularpneu2.pneuinputde2.value > 70201) {
    alert("Der Umsatz muss tiefer als 70'200 CHF sein!");
    document.formularpneu2.pneuinputde2.focus();
    return false;
  }
}
//pneu
function chkFormularlegarage () {
    if (document.formularlegarage.legarageinputde.value == "") {
    alert("Bitte einen Investitionsbetrag eingeben!");
    document.formularlegarage.legarageinputde.focus();
    return false;
  }
  if (document.formularlegarage.legarageinputde.value < 2000) {
    alert("Der Betrag muss höher als 2'000 CHF sein!");
    document.formularlegarage.legarageinputde.focus();
    return false;
  }
  if (document.formularlegarage.legarageinputde.value > 2000) {
    alert("Der Betrag muss tiefer als 20'000 CHF sein!");
    document.formularlegarage.legarageinputde.focus();
    return false;
  }
}
function chkFormularlegarage2 () {
	if (document.formularlegarage2.legarageinputde2.value == "") {
    alert("Bitte einen Umsatz eingeben!");
    document.formularlegarage2.legarageinputde2.focus();
    return false;
  }
  if (document.formularlegarage2.legarageinputde2.value < 30000) {
    alert("Der Umsatz muss höher als 29'999 CHF sein!");
    document.formularlegarage2.legarageinputde2.focus();
    return false;
  }
  if (document.formularlegarage2.legarageinputde2.value > 80300) {
    alert("Der Umsatz muss tiefer als 80'001 CHF sein!");
    document.formularlegarage2.legarageinputde2.focus();
    return false;
  }
}
//legarage
function chkFormularlegaragenew () {
    if (document.formularlegaragenew.legaragenewinputde.value == "") {
    alert("Bitte einen Investitionsbetrag eingeben!");
    document.formularlegaragenew.legaragenewinputde.focus();
    return false;
  }
  if (document.formularlegaragenew.legaragenewinputde.value < 2000) {
    alert("Der Betrag muss höher als 2'000 CHF sein!");
    document.formularlegaragenew.legaragenewinputde.focus();
    return false;
  }
  if (document.formularlegaragenew.legaragenewinputde.value > 20000) {
    alert("Der Betrag muss tiefer als 20'000 CHF sein!");
    document.formularlegaragenew.legaragenewinputde.focus();
    return false;
  }
}
function chkFormularlegaragenew2 () {
	if (document.formularlegaragenew2.legaragenewinputde2.value == "") {
    alert("Bitte einen Umsatz eingeben!");
    document.formularlegaragenew2.legaragenewinputde2.focus();
    return false;
  }
  if (document.formularlegaragenew2.legaragenewinputde2.value < 36000) {
    alert("Der Umsatz muss höher als 35'999 CHF sein!");
    document.formularlegaragenew2.legaragenewinputde2.focus();
    return false;
  }
  if (document.formularlegaragenew2.legaragenewinputde2.value > 96000) {
    alert("Der Umsatz muss tiefer als 96'001 CHF sein!");
    document.formularlegaragenew2.legaragenewinputde2.focus();
    return false;
  }
}
//multideal
function chkFormularmulti () {
    if (document.formularmulti.multiinputde.value == "") {
    alert("Bitte einen Investitionsbetrag eingeben!");
    document.formularmulti.multiinputde.focus();
    return false;
  }
  if (document.formularmulti.multiinputde.value < 0) {
    alert("Funktioniert noch nicht");
    document.formularmulti.multiinputde.focus();
    return false;
  }
  if (document.formularmulti.multiinputde.value > 0) {
    alert("Funktioniert noch nicht");
    document.formularmulti.multiinputde.focus();
    return false;
  }
}
function chkFormularmulti2 () {
	if (document.formularmulti2.multiinputde2.value == "") {
    alert("Bitte einen Umsatz eingeben!");
    document.formularmulti2.multiinputde2.focus();
    return false;
  }
  if (document.formularmulti2.multiinputde2.value < 0) {
    alert("Funktioniert noch nicht");
    document.formularmulti2.multiinputde2.focus();
    return false;
  }
  if (document.formularmulti2.multiinputde2.value > 0) {
    alert("Funktioniert noch nicht");
    document.formularmulti2.multiinputde2.focus();
    return false;
  }
}
</script>
</head>
<body>
<!----- Daten Holen ----->
<?php
$file = 'smart.csv';
$csv = array();
$lines = file($file);

foreach ($lines as $key => $value)
{
    $csv[$key] = str_getcsv($value,";");
}
//var_dump ($csv);
//Dabug Variable
$debug = false;


//-----------------------------------------------------------------------
if (! isset($_GET["l"])) {$paramLang = '';} else { $paramLang = $_GET["l"]; };
include_once ('inc/http_sprache.function.php');
$allowed_langs = array ('de', 'fr', 'it');
$langbrowser = lang_getfrombrowser ($allowed_langs, 'de', null, false);
if($paramLang <> ""){$langbrowser = $paramLang;}
//var_dump($paramLang);
if($debug){
var_dump ($langbrowser);
}
//var_dump ($paramVT);
// Variablen zB. f�r Header
if($langbrowser == "de")
{
    //Vor dem Rechnen
    $Titel1 ="Umsatz berechnen";
    $Titel2 ="Investitionsbetrag berechnen";
    $Titel3 ="Kunde";
    $Titel4 ="Gebietsleiter";
    $Titel5 ="Angebotsbeschreibung";
    $Titel6 = "Zielumsatz CHF pro Jahr";
    $button1 ="Umsatz berechnen";
	//Nach dem rechnen vom Umsatz
	$Titel7 = "Investitionsbetrag";
	$Titel8 = "Zielumsatz";
	$Projahr = "Pro Jahr";
	$Promonat = "Pro Monat";
	//Nach dem rechnen vom Investitionsbetrag
	$Titel9 = "Investitionsbetrag Laufzeit";
	//Für ausgabe
	$Jahr1 = "1 Jahr";
	$Jahr2 = "2 Jahre";
	$Jahr3 = "3 Jahre";
	$Jahr4 = "4 Jahre";
	$Jahr5 = "5 Jahre";
	$drucken = "Drucken";
	$image = "images/logo_de.jpg";
}
else if($langbrowser == "fr")
{
    //Vor dem Rechnen
    $Titel1 ="Calculer chiffre d'affaires";
    $Titel2 ="Calculer montant de l'investissement Net";
    $Titel3 ="Client";
    $Titel4 ="Responsable régional";
    $Titel5 ="Description de l'offre";
    $Titel6 = "Chiffre d'affaires CHF par an";
    $button1 ="Calculer chiffre d'affaires";
	//Nach dem rechnen vom Umsatz
	$Titel7 = "Montant de l'investissement";
	$Titel8 = "Chiffre d'affaires";
	$Projahr = "Par an";
	$Promonat = "Par mois";
	//Nach dem rechnen vom Investitionsbetrag
	$Titel9 = "Montant de l'investissement durée";
	//Für ausgabe
	$Jahr1 = "1 année";
	$Jahr2 = "2 ans";
	$Jahr3 = "3 ans";
	$Jahr4 = "4 ans";
	$Jahr5 = "5 ans";
	$drucken = "Imprimer";
	$image = "images/logo_fr.jpg";
}
else if($langbrowser == "it")
{
    //Vor dem Rechnen
    $Titel1 ="Calcolare fatturato target";
    $Titel2 ="Calcolare importo d'investimento";
    $Titel3 ="Cliente";
    $Titel4 ="Responsiblili regionali";
    $Titel5 ="Descrizione dell'offerta";
    $Titel6 = "Fatturato target CHF per anno";
    $button1 ="Calcolare fatturato target";
	//Nach dem rechnen vom Umsatz
	$Titel7 = "Importo d'investimento";
	$Titel8 = "Fatturato target totale CHF";
	$Projahr = "Per anno";
	$Promonat = "Per mese";
	//Nach dem rechnen vom Investitionsbetrag
	$Titel9 = "Importo d'investimento durata";
	//Für ausgabe
	$Jahr1 = "1 anno";
	$Jahr2 = "2 anni";
	$Jahr3 = "3 anni";
	$Jahr4 = "4 anni";
	$Jahr5 = "5 anni";
	$drucken = "Stampare";
	$image = "images/logo_it.jpg";
}

//-----------------------------------------------------------------------

?>

	<div class="container">
		<!-- Tabpanel für Sprachenauswahl -->
		<div role="tabpanel">
			  	  <div class="container-fluid">
				    <div class="navbar-header">
				      <a class="navbar-brand">
				        <img class="brand" alt="Brand" src="<?php echo $image; ?>">
				      </a>
				    </div>
				  </div>
			  <!-- Nav tabs für Sprachenauswahl -->

            <?php
            //if sprache de dann markiere auch DE
            if ($langbrowser == "de"){
                echo "
                    <ul class=\"nav nav-tabs navbar-right\" id=\"sprache\">
                        <li role=\"presentation\"><a href=\"?l=it\">IT</a></li>
                        <li role=\"presentation\"><a href=\"?l=fr\">FR</a></li>
                        <li role=\"presentation\" class=\"active\"><a href=\"?l=de\" aria-controls=\"de\">DE</a></li>
                    </ul>";
            }
            //if sprache fr dann markiere auch fr
            if ($langbrowser == "fr"){
                echo "
                    <ul class=\"nav nav-tabs navbar-right\" id=\"sprache\">
                        <li role=\"presentation\" ><a href=\"?l=it\">IT</a></li>
                        <li role=\"presentation\" class=\"active\"><a href=\"?l=fr\">FR</a></li>
                        <li role=\"presentation\" ><a href=\"?l=de\" aria-controls=\"de\">DE</a></li>
                    </ul>";
            }
            //if sprache it dann markiere auch it
            if ($langbrowser == "it"){
                echo "
                    <ul class=\"nav nav-tabs navbar-right\" id=\"sprache\">
                        <li role=\"presentation\" class=\"active\"> <a href=\"?l=it\">IT</a></li>
                        <li role=\"presentation\"><a href=\"?l=fr\">FR</a></li>
                        <li role=\"presentation\"><a href=\"?l=de\" aria-controls=\"de\">DE</a></li>
                    </ul>";
            }
            ?>

			  <!-- Inhalt des Deutschen Tabs -->
			  <div class="tab-content">
			    <div role="tabpanel" class="tab-pane fade in active" id="de">
			    	<div class="jumbotron">
			
						<div role="tabpanel">

						  <!-- Nav tabs für Dealauswahl -->
						  <ul class="nav nav-tabs2" role="tablist" id="deals">
						    <li role="presentation" class="active"><a href="#smartde" aria-controls="smartde" role="tab" data-toggle="tab">SD</a></li>
						    <li role="presentation"><a href="#pneude" aria-controls="pneude" role="tab" data-toggle="tab">PD</a></li>
						    <li role="presentation"><a href="#legaragede" aria-controls="legaragede" role="tab" data-toggle="tab">PD</a></li>
						    <li role="presentation"><a href="#legaragenewde" aria-controls="legaragenewde" role="tab" data-toggle="tab">LD</a></li>
						    <li role="presentation"><a href="#multideal" aria-controls="multideal" role="tab" data-toggle="tab">MD</a></li>
						  </ul>


						  <div class="tab-content">
                              <!--hier mit for Schleife beginnen-->
                            <!-- Inhalt Smart Deal Deutsch --------------------------------------------------------------------------------------------------->
						    <div role="tabpanel" class="tab-pane active" id="smartde">
						    	<br />
								<div class="panel-group" id="accordion">
							        <div class="panel panel-warning">
							          <div class="panel-heading">
							            <h4 class="panel-title">
							              <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><?php echo $Titel1; ?></a>
							            </h4>
							          </div>
							          <div id="collapse1" class="panel-collapse collapse">
							            <div class="panel-body">
									    	<form name="formularsmart" action="#smartde" role="form" method="post" onsubmit="return chkFormularsmart()">
											  <div class="form-group">
											    <label for="exampleInputInvestition1"><?php echo $Titel2; ?></label>
											    <input type="number" class="form-control formsmart" id="exampleInputInvestition1" name="smartinputde" placeholder= "<?php echo $Titel2; ?>">
											  	<label for="exampleInputKunde1"><?php echo $Titel3; ?></label>
											    <input type="text" class="form-control formsmart" id="exampleInputKunde1" name="smartkunde" placeholder= "<?php echo $Titel3; ?>">
											    <label for="exampleInputGebietsleiter1"><?php echo $Titel4; ?></label>
											    <input type="text" class="form-control formsmart" id="exampleInputGebietsleiter1" name="smartgebl" placeholder="<?php echo $Titel4; ?>">
											    <label for="exampleInputAngebot1"><?php echo $Titel5; ?></label>
											    <input type="text" class="form-control formsmart" id="exampleInputAngebot1" name="smartangebot" placeholder="<?php echo $Titel5; ?>">
											  </div>
											  <button type="submit" class="btn btn-warning"><?php echo $button1; ?></button>
											</form>
											</div>
								          </div>
								        </div>
								        <div class="panel panel-warning">
								          <div class="panel-heading">
								            <h4 class="panel-title">
								              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><?php echo $Titel2; ?></a>
								            </h4>
								          </div>
								          <div id="collapse2" class="panel-collapse collapse">
								            <div class="panel-body">
								            <form name="formularsmart2" action="#smartde" role="form" method="post" onsubmit="return chkFormularsmart2()">
											  <div class="form-group">
											    <label for="exampleInputUmsatz1"><?php echo $Titel6; ?></label>
											    <input type="number" class="form-control formsmart" id="exampleInputUmsatz1" name="smartinputde2" placeholder="<?php echo $Titel6; ?>">
											  </div>
											  <button type="submit" class="btn btn-warning"><?php echo $Titel2; ?></button>
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
											        				<h3>Angebot Smart Deal (" . $smartangebot . ")</h3>
											        				<h4 class='screenhide'>" . $smartkunde . "</h4>
											        				<br />
											        				<table class='table'>
														        		<tr>
														        			<th>".$Titel7."</th>
														        			<td class='spr'>" . number_format ($smartinputde, 0, '.', "'") . "</td>
														        		</tr>
														        		<tr>
																	    	<th>".$Titel8."</th>
																	    	<td class='spr'>" . number_format ($data[2], 0, '.', "'") . "</td>
																	    </tr>
																    </table>
																    <table class='table'>
																	    <tr>
																	    	<th></th>
																	    	<th class='spr'><br />".$Projahr."</th>
																	    	<th class='spr'><br />".$Promonat."</th>
																	    </tr>
														        		<tr>
																	    	<th>".$Jahr1."</th>
																	    	<td class='spr'>" . number_format ($data[3] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[3] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>".$Jahr2."</th>
																	    	<td class='spr'>" . number_format ($data[4] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[4] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>".$Jahr3."</th>
																	    	<td class='spr'>" . number_format ($data[5] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[5] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>".$Jahr4."</th>
																	    	<td class='spr'>" . number_format ($data[6] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[6] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>".$Jahr5."</th>
																	    	<td class='spr'>" . number_format ($data[7] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[7] / 12, 0, '.', "'") . "</td>
																	  	</tr>
																	</table>
																<button type='submit' class='btn btn-warning' onClick='javascript:window.print()'>".$drucken."</button>
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
																        			<th>".$Titel6."</th>
																        			<td class='spr'>" . number_format ($smartinputde2, 0, '.', "'") . "</td>
																        		</tr>
																        	</table>
																        	<table class='table'>
																        		<tr>
																			    	<th>".$Titel9."</th>
																			    	<th>".$Jahr1."</th>
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
														  		<th>".$Titel6."</th>
														  		<td class='spr'>" . number_format ($smartinputde2, 0, '.', "'") . "</td>
														  	</tr>
														</table>
														<table class='table'>
														  	<tr>
														 		<th>".$Titel9."</th>
														 		<th>".$Jahr1."</th>
														 		<td class='spr'>0</td>
														 	</tr>
														";
											}
											$smartinputde2 = $smartinputde2 * 2;
											$row = 1;
											$file=file("smart.csv");
											//9.7.18 										 315001 empfehlung
											if (33000 <= $smartinputde2 and $smartinputde2 < 123001){
												if (($handle = fopen("smart.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $smartinputde2 and $smartinputde2 > 0) {
															//Debug fälle
															/*
															var_dump($file);
															var_dump($csv);
															var_dump($data);
															*/																																									
												        		echo	"	
																        <tr>
																			<th></th>
																			<th>".$Jahr2."</th>
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
														  	<th>".$Jahr2."</th>
														 	<td class='spr'>0</td>
														</tr>
														";
											}
											//TODO: Wieso ?
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
																			    	<th>".$Jahr3."</th>
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
														  	<th>".$Jahr3."</th>
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
																			    	<th>".$Jahr4."</th>
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
														  	<th>".$Jahr4."</th>
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
																			    	<th>".$Jahr5."</th>
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
														  	<th>".$Jahr5."</th>
														 	<td class='spr'>0</td>
														</tr>
														</table>";
											}
										}
							?>			
							<!-- Inhalt Smart Deal Deutsch --------------------------------------------------------------------------------------------------->
							</div>
							<!-- Inhalt Pneu Deal Deutsch ---------------------------------------------------------------------------------------------------->
						    <div role="tabpanel" class="tab-pane" id="pneude">
						    	<br />
								<div class="panel-group" id="accordion2">
							        <div class="panel panel-default">
							          <div class="panel-heading">
							            <h4 class="panel-title">
							              <a data-toggle="collapse" data-parent="#accordion2" href="#collapse3"><?php echo $Titel1; ?></a>
							            </h4>
							          </div>
							          <div id="collapse3" class="panel-collapse collapse">
							            <div class="panel-body">
									    	<form name="formularpneu" action="#pneude" role="form" method="post" onsubmit="return chkFormularpneu()">
											  <div class="form-group">
											    <label for="exampleInputInvestition2"><?php echo $Titel2; ?></label>
											    <input type="number" class="form-control formpneu" id="exampleInputInvestition2" name="pneuinputde" placeholder="<?php echo $Titel2; ?>">
											  	<label for="exampleInputKunde3"><?php echo $Titel3; ?></label>
											    <input type="text" class="form-control formpneu" id="exampleInputKunde3" name="pneukunde" placeholder="<?php echo $Titel3; ?>">
											    <label for="exampleInputGebietsleiter3"><?php echo $Titel4; ?></label>
											    <input type="text" class="form-control formpneu" id="exampleInputGebietsleiter3" name="pneugebl" placeholder="<?php echo $Titel4; ?>">
											    <label for="exampleInputAngebot2"><?php echo $Titel5; ?></label>
											    <input type="text" class="form-control formpneu" id="exampleInputAngebot2" name="pneuangebot" placeholder="<?php echo $Titel5; ?>">
											  </div>
											  <button type="submit" class="btn btn-default"><?php echo $button1; ?></button>
											</form>
											</div>
								          </div>
								        </div>
								        <div class="panel panel-default">
								          <div class="panel-heading">
								            <h4 class="panel-title">
								              <a data-toggle="collapse" data-parent="#accordion2" href="#collapse4"><?php echo $Titel2; ?></a>
								            </h4>
								          </div>
								          <div id="collapse4" class="panel-collapse collapse">
								            <div class="panel-body">
								            <form name="formularpneu2" action="#pneude" role="form" method="post" onsubmit="return chkFormularpneu2()">
											  <div class="form-group">
											    <label for="exampleInputUmsatz2"><?php echo $Titel6; ?></label>
											    <input type="number" class="form-control formpneu" id="exampleInputUmsatz2" name="pneuinputde2" placeholder="<?php echo $Titel6; ?>">
											  </div>
											  <button type="submit" class="btn btn-default"><?php echo $Titel2; ?></button>
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
											if (($handle = fopen("paint.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
											    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
											        // Berechnung die ein Resultat ergibt...
											        // prüfen des resultates
											        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
											        if ( $data[0] <= $pneuinputde and $data[1] > $pneuinputde ) {
											        	echo	"<br />
											        				<h3>Angebot Pneu Deal (" . $pneuangebot . ")</h3>
											        				<h4 class='screenhide'>" . $pneukunde . "</h4>
											        				<br />
											        				<table class='table'>
														        		<tr>
														        			<th>".$Titel7."</th>
														        			<td class='spr'>" . number_format ($pneuinputde, 0, '.', "'") . "</td>
														        		</tr>
														        		<tr>
																	    	<th>".$Titel8."</th>
																	    	<td class='spr'>" . number_format ($data[2], 0, '.', "'") . "</td>
																	    </tr>
																    </table>
																    <table class='table'>
																	    <tr>
																	    	<th></th>
																	    	<th class='spr'><br />".$Projahr."</th>
																	    	<th class='spr'><br />".$Promonat."</th>
																	    </tr>
														        		<tr>
																	    	<th>".$Jahr1."</th>
																	    	<td class='spr'>" . number_format ($data[3] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[3] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>".$Jahr2."</th>
																	    	<td class='spr'>" . number_format ($data[4] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[4] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>".$Jahr3."</th>
																	    	<td class='spr'>" . number_format ($data[5] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[5] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>".$Jahr4."</th>
																	    	<td class='spr'>" . number_format ($data[6] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[6] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>".$Jahr5."</th>
																	    	<td class='spr'>" . number_format ($data[7] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[7] / 12, 0, '.', "'") . "</td>
																	  	</tr>
																	</table>
																<button type='submit' class='btn btn-default' onClick='javascript:window.print()'>".$drucken."</button>
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
											$file=file("paint.csv");
											//If input ist im 1 Jahr dabei und bedingugen erfüllt... geh weiter.
											if (36000 <= $pneuinputde2 and $pneuinputde2 < 69001){
												if (($handle = fopen("paint.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $pneuinputde2 and $pneuinputde2 > 0 ) {
                                                            if ($debug){
                                                                echo "Jahr 1";
                                                                var_dump($pneuinputde2);
                                                                var_dump($data);
                                                            }
												        		echo	"<br />
													        				<table class='table'>
																        		<tr>
																        			<th>".$Titel6."</th>
																        			<td class='spr'>" . number_format ($pneuinputde2, 0, '.', "'") . "</td>
																        		</tr>
																        	</table>
																        	<table class='table'>
																        		<tr>
																			    	<th>".$Titel9."</th>
																			    	<th>".$Jahr1."</th>
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
														  		<th>".$Titel6."</th>
														  		<td class='spr'>" . number_format ($pneuinputde2, 0, '.', "'") . "</td>
														  	</tr>
														</table>
														<table class='table'>
														  	<tr>
														 		<th>".$Titel9."</th>
														 		<th>".$Jahr1."</th>
														 		<td class='spr'>0</td>
														 	</tr>
														";
                                                if ($debug){
                                                    echo "Jahr 1";
                                                    var_dump($pneuinputde2);
                                                    var_dump($data);
                                                }
											}
											$pneuinputde2 = $pneuinputde2 * 2;
											$row = 1;
											$file=file("paint.csv");

											if (36000 <= $pneuinputde2 and $pneuinputde2 < 138001){
												if (($handle = fopen("paint.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben

                                                        //IF Zielumsatz > eingabe und eingabe ist > 0
												        if ( $data[2] > $pneuinputde2 and $pneuinputde2 > 0) {
                                                            if ($debug){
                                                                echo "Jahr 2";
                                                                var_dump($pneuinputde2);
                                                                var_dump($data);
                                                                var_dump($file);
                                                                var_dump($file[$row]);
                                                                var_dump($file[$row -1]);
                                                                var_dump($file[$row -2]);

                                                            }
												        		echo	"	
																        <tr>
																			<th></th>
																			<th>".$Jahr2."</th>
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
														  	<th>".$Jahr2."</th>
														 	<td class='spr'>0</td>
														</tr>
														";
											}
											$pneuinputde2 = $pneuinputde2 / 2 * 3;
											$row = 1;
											$file=file("paint.csv");

											if (55000 <= $pneuinputde2 and $pneuinputde2 < 209001){
												if (($handle = fopen("paint.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $pneuinputde2 and $pneuinputde2 > 0) {
                                                            if ($debug){
                                                                echo "Jahr 3";
                                                                var_dump($pneuinputde2);
                                                                var_dump($data);
                                                            }
												        		echo	"	
																        		<tr>
																			    	<th></th>
																			    	<th>".$Jahr3."</th>
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
														  	<th>".$Jahr3."</th>
														 	<td class='spr'>0</td>
														</tr>
														";
											}
												$pneuinputde2 = $pneuinputde2 / 3 * 4;
												$row = 1;
												$file=file("paint.csv");

											if (76000 <= $pneuinputde2 and $pneuinputde2 < 279001){
												if (($handle = fopen("paint.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $pneuinputde2 and $pneuinputde2 > 0) {
                                                            if ($debug){
                                                                echo "Jahr 4";
                                                                var_dump($pneuinputde2);
                                                                var_dump($data);
                                                            }
												        		echo	"	
																        		<tr>
																			    	<th></th>
																			    	<th>".$Jahr4."</th>
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
														  	<th>".$Jahr4."</th>
														 	<td class='spr'>0</td>
														</tr>
														";
											}
											$pneuinputde2 = $pneuinputde2 / 4 * 5;
											$row = 1;
											$file=file("paint.csv");

											if (102000 <= $pneuinputde2 and $pneuinputde2 < 351001){
												if (($handle = fopen("paint.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $pneuinputde2 and $pneuinputde2 > 0) {
                                                            if ($debug){
                                                                echo "Jahr 5";
                                                                var_dump($pneuinputde2);
                                                                var_dump($data);
                                                            }
												        		echo	"	
																        		<tr>
																			    	<th></th>
																			    	<th>".$Jahr5."</th>
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
														  	<th>".$Jahr5."</th>
														 	<td class='spr'>0</td>
														</tr>
														</table>";
											}
										}//if (isset($pneuinputde2))
                                if ($debug){
                                    echo"-----Should be end of File-----";
                                }

							?>				
							<!-- Inhalt Pneu Deal Deutsch ---------------------------------------------------------------------------------------------------->
							</div>
                              <?php
                              if ($debug) {
                                  echo "-----Should be end of File after div-----";
                              }
                              ?>
							<!-- Inhalt REBRANDING Deal Deutsch ---------------------------------------------------------------------------------------------->
						    <div role="tabpanel" class="tab-pane" id="legaragede">
						    	<br />
						    	<div class="panel-group" id="accordion3">
							        <div class="panel panel-primary">
							          <div class="panel-heading">
							            <h4 class="panel-title">
							              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse5"><?php echo $Titel1; ?></a>
							            </h4>
							          </div>
							          <div id="collapse5" class="panel-collapse collapse">
							            <div class="panel-body">
									    	<form name="formularlegarage" action="#legaragede" role="form" method="post" onsubmit="return chkFormularlegarage()">
											  <div class="form-group">
											    <label for="exampleInputInvestition3"><?php echo $Titel2; ?></label>
											    <input type="number" class="form-control formlegarage" id="exampleInputInvestition3" name="legarageinputde" placeholder="<?php echo $Titel2; ?>">
											  	<label for="exampleInputKunde5"><?php echo $Titel3; ?></label>
											    <input type="text" class="form-control formlegarage" id="exampleInputKunde5" name="legaragekunde" placeholder="<?php echo $Titel3; ?>">
											    <label for="exampleInputGebietsleiter5"><?php echo $Titel4; ?></label>
											    <input type="text" class="form-control formlegarage" id="exampleInputGebietsleiter5" name="legaragegebl" placeholder="<?php echo $Titel4; ?>">
											    <label for="exampleInputAngebot3"><?php echo $Titel5; ?></label>
											    <input type="text" class="form-control formlegarage" id="exampleInputAngebot3" name="legarageangebot" placeholder="<?php echo $Titel5; ?>">
											  </div>
											  <button type="submit" class="btn btn-primary"><?php echo $button1; ?></button>
											</form>
											</div>
								          </div>
								        </div>
								        <div class="panel panel-primary">
								          <div class="panel-heading">
								            <h4 class="panel-title">
								              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse6"><?php echo $Titel2; ?></a>
								            </h4>
								          </div>
								          <div id="collapse6" class="panel-collapse collapse">
								            <div class="panel-body">
								            <form name="formularlegarage2" action="#legaragede" role="form" method="post" onsubmit="return chkFormularlegarage2()">
											  <div class="form-group">
											    <label for="exampleInputUmsatz3"><?php echo $Titel6; ?></label>
											    <input type="number" class="form-control formlegarage" id="exampleInputUmsatz3" name="legarageinputde2" placeholder="<?php echo $Titel6; ?>">
											  </div>
											  <button type="submit" class="btn btn-primary"><?php echo $Titel2; ?></button>
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
											if (($handle = fopen("pneu.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
											    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
											        // Berechnung die ein Resultat ergibt...
											        // prüfen des resultates
											        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
											        if ( $data[0] <= $legarageinputde and $data[1] > $legarageinputde ) {
											        	
														echo	"<br />
											        				<h3>Angebot REBRANDING Deal (" . $legarageangebot . ")</h3>
											        				<h4 class='screenhide'>" . $legaragekunde . "</h4>
											        				<br />
											        				<table class='table'>
														        		<tr>
														        			<th>".$Titel7."</th>
														        			<td class='spr'>" . number_format ($legarageinputde, 0, '.', "'") . "</td>
														        		</tr>
														        		<tr>
																	    	<th>".$Titel8."</th>
																	    	<td class='spr'>" . number_format ($data[2], 0, '.', "'") . "</td>
																	    </tr>
																    </table>
																    <table class='table'>
																	    <tr>
																	    	<th></th>
																	    	<th class='spr'><br />".$Projahr."</th>
																	    	<th class='spr'><br />".$Promonat."</th>
																	    </tr>
														        		<tr>
																	    	<th>".$Jahr1."</th>
																	    	<td class='spr'>" . number_format ($data[3] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[3] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>".$Jahr2."</th>
																	    	<td class='spr'>" . number_format ($data[4] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[4] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>".$Jahr3."</th>
																	    	<td class='spr'>" . number_format ($data[5] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[5] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>".$Jahr4."</th>
																	    	<td class='spr'>" . number_format ($data[6] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[6] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>".$Jahr5."</th>
																	    	<td class='spr'>" . number_format ($data[7] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[7] / 12, 0, '.', "'") . "</td>
																	  	</tr>
																	</table>
																<button type='submit' class='btn btn-primary' onClick='javascript:window.print()'>".$drucken."</button>
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
											$file=file("pneu.csv");
											if (58000 <= $legarageinputde2 and $legarageinputde2 < 62001){
												if (($handle = fopen("pneu.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $legarageinputde2 and $legarageinputde2 > 0 ) {
                                                            if ($debug){
                                                                echo "Jahr 1";
                                                                var_dump($legarageinputde2);
                                                                var_dump($data);
                                                            }
												        		echo	"<br />
													        				<table class='table'>
																        		<tr>
																        			<th>".$Titel6."</th>
																        			<td class='spr'>" . number_format ($legarageinputde2, 0, '.', "'") . "</td>
																        		</tr>
																        	</table>
																        	<table class='table'>
																        		<tr>
																			    	<th>".$Titel9."</th>
																			    	<th>".$Jahr1."</th>
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
														  		<th>".$Titel6."</th>
														  		<td class='spr'>" . number_format ($legarageinputde2, 0, '.', "'") . "</td>
														  	</tr>
														</table>
														<table class='table'>
														  	<tr>
														 		<th>".$Titel9."</th>
														 		<th>".$Jahr1."</th>
														 		<td class='spr'>0</td>
														 	</tr>
														";
											}
											$legarageinputde2 = $legarageinputde2 * 2;
											$row = 1;
											$file=file("pneu.csv");

											if (58000 <= $legarageinputde2 and $legarageinputde2 < 123001){
												if (($handle = fopen("pneu.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $legarageinputde2 and $legarageinputde2 > 0) {
                                                            if ($debug){
                                                                echo "Jahr 2";
                                                                var_dump($legarageinputde2);
                                                                var_dump($data);
                                                            }
												        		echo	"	
																        <tr>
																			<th></th>
																			<th>".$Jahr2."</th>
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
														  	<th>".$Jahr2."</th>
														 	<td class='spr'>0</td>
														</tr>
														";
											}
											$legarageinputde2 = $legarageinputde2 / 2 * 3;
											$row = 1;
											$file=file("pneu.csv");

											if (58000 <= $legarageinputde2 and $legarageinputde2 < 195001){
												if (($handle = fopen("pneu.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $legarageinputde2 and $legarageinputde2 > 0) {
                                                            if ($debug){
                                                                echo "Jahr 3";
                                                                var_dump($legarageinputde2);
                                                                var_dump($data);
                                                            }
												        		echo	"	
																        		<tr>
																			    	<th></th>
																			    	<th>".$Jahr3."</th>
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
														  	<th>".$Jahr3."</th>
														 	<td class='spr'>0</td>
														</tr>
														";
											}
												$legarageinputde2 = $legarageinputde2 / 3 * 4;
												$row = 1;
												$file=file("pneu.csv");

											if (68000 <= $legarageinputde2 and $legarageinputde2 < 259001){
												if (($handle = fopen("pneu.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $legarageinputde2 and $legarageinputde2 > 0) {
                                                            if ($debug){
                                                                echo "Jahr 4";
                                                                var_dump($legarageinputde2);
                                                                var_dump($data);
                                                            }
												        		echo	"	
																        		<tr>
																			    	<th></th>
																			    	<th>".$Jahr4."</th>
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
														  	<th>".$Jahr4."</th>
														 	<td class='spr'>0</td>
														</tr>
														";
											}
											$legarageinputde2 = $legarageinputde2 / 4 * 5;
											$row = 1;
											$file=file("pneu.csv");

											if (90000 <= $legarageinputde2 and $legarageinputde2 < 803000){
												if (($handle = fopen("pneu.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $legarageinputde2 and $legarageinputde2 > 0) {
                                                            if ($debug){
                                                                echo "Jahr 5";
                                                                var_dump($legarageinputde2);
                                                                var_dump($data);
                                                            }
												        		echo	"	
																        		<tr>
																			    	<th></th>
																			    	<th>".$Jahr5."</th>
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
														  	<th>".$Jahr5."</th>
														 	<td class='spr'>0</td>
														</tr>
														</table>";
											}
										}
							?>	
							
							</div>
							<!-- Inhalt REBRANDING Deal Deutsch ---------------------------------------------------------------------------------------------->
							<!-- Inhalt le GARAGE Deal Deutsch ----------------------------------------------------------------------------------------------->
						    <div role="tabpanel" class="tab-pane" id="legaragenewde">
						    	<br />
						    	<div class="panel-group" id="accordion4">
							        <div class="panel panel-success">
							          <div class="panel-heading">
							            <h4 class="panel-title">
							              <a data-toggle="collapse" data-parent="#accordion4" href="#collapse7"><?php echo $Titel1; ?></a>
							            </h4>
							          </div>
							          <div id="collapse7" class="panel-collapse collapse">
							            <div class="panel-body">
									    	<form name="formularlegaragenew" action="#legaragenewde" role="form" method="post" onsubmit="return chkFormularlegaragenew()">
											  <div class="form-group">
											    <label for="exampleInputInvestition4"><?php echo $Titel2; ?></label>
											    <input type="number" class="form-control formlegaragenew" id="exampleInputInvestition4" name="legaragenewinputde" placeholder="<?php echo $Titel2; ?>">
											  	<label for="exampleInputKunde7"><?php echo $Titel3; ?></label>
											    <input type="text" class="form-control formlegaragenew" id="exampleInputKunde7" name="legaragenewkunde" placeholder="<?php echo $Titel3; ?>">
											    <label for="exampleInputGebietsleiter7"><?php echo $Titel4; ?></label>
											    <input type="text" class="form-control formlegaragenew" id="exampleInputGebietsleiter7" name="legaragenewgebl" placeholder="<?php echo $Titel4; ?>">
											    <label for="exampleInputAngebot4"><?php echo $Titel5; ?></label>
											    <input type="text" class="form-control formlegaragenew" id="exampleInputAngebot4" name="legaragenewangebot" placeholder="<?php echo $Titel5; ?>">
											  </div>
											  <button type="submit" class="btn btn-success"><?php echo $button1; ?></button>
											</form>
											</div>
								          </div>
								        </div>
								        <div class="panel panel-success">
								          <div class="panel-heading">
								            <h4 class="panel-title">
								              <a data-toggle="collapse" data-parent="#accordion4" href="#collapse8"><?php echo $Titel2; ?></a>
								            </h4>
								          </div>
								          <div id="collapse8" class="panel-collapse collapse">
								            <div class="panel-body">
								            <form name="formularlegaragenew2" action="#legaragenewde" role="form" method="post" onsubmit="return chkFormularlegaragenew2()">
											  <div class="form-group">
											    <label for="exampleInputUmsatz4"><?php echo $Titel6; ?></label>
											    <input type="number" class="form-control formlegaragenew" id="exampleInputUmsatz3" name="legaragenewinputde2" placeholder="<?php echo $Titel6; ?>">
											  </div>
											  <button type="submit" class="btn btn-success"><?php echo $Titel2; ?></button>
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
											if (($handle = fopen("legarage.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
											    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
											        // Berechnung die ein Resultat ergibt...
											        // prüfen des resultates
											        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
											        if ( $data[0] <= $legaragenewinputde and $data[1] > $legaragenewinputde ) {
											        	
														echo	"<br />
											        				<h3>Angebot leGARAGE Deal (" . $legaragenewangebot . ")</h3>
											        				<h4 class='screenhide'>" . $legaragenewkunde . "</h4>
											        				<br />
											        				<table class='table'>
														        		<tr>
														        			<th>".$Titel7."</th>
														        			<td class='spr'>" . number_format ($legaragenewinputde, 0, '.', "'") . "</td>
														        		</tr>
														        		<tr>
																	    	<th>".$Titel8."</th>
																	    	<td class='spr'>" . number_format ($data[2], 0, '.', "'") . "</td>
																	    </tr>
																    </table>
																    <table class='table'>
																	    <tr>
																	    	<th></th>
																	    	<th class='spr'><br />".$Projahr."</th>
																	    	<th class='spr'><br />".$Promonat."</th>
																	    </tr>
														        		<tr>
																	    	<th>".$Jahr1."</th>
																	    	<td class='spr'>" . number_format ($data[3] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[3] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>".$Jahr2."</th>
																	    	<td class='spr'>" . number_format ($data[4] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[4] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>".$Jahr3."</th>
																	    	<td class='spr'>" . number_format ($data[5] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[5] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>".$Jahr4."</th>
																	    	<td class='spr'>" . number_format ($data[6] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[6] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>".$Jahr5."</th>
																	    	<td class='spr'>" . number_format ($data[7] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[7] / 12, 0, '.', "'") . "</td>
																	  	</tr>
																	</table>
																<button type='submit' class='btn btn-success' onClick='javascript:window.print()'>".$drucken."</button>
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
											$file=file("legarage.csv");
											if (48000 <= $legaragenewinputde2 and $legaragenewinputde2 < 96001){
												if (($handle = fopen("legarage.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $legaragenewinputde2 and $legaragenewinputde2 > 0 ) {
															
												        		echo	"<br />
													        				<table class='table'>
																        		<tr>
																        			<th>".$Titel6."</th>
																        			<td class='spr'>" . number_format ($legaragenewinputde2, 0, '.', "'") . "</td>
																        		</tr>
																        	</table>
																        	<table class='table'>
																        		<tr>
																			    	<th>".$Titel9."</th>
																			    	<th>".$Jahr1."</th>
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
														  		<th>".$Titel6."</th>
														  		<td class='spr'>" . number_format ($legaragenewinputde2, 0, '.', "'") . "</td>
														  	</tr>
														</table>
														<table class='table'>
														  	<tr>
														 		<th>".$Titel9."</th>
														 		<th>".$Jahr1."</th>
														 		<td class='spr'>0</td>
														 	</tr>
														";
											}
											$legaragenewinputde2 = $legaragenewinputde2 * 2;
											$row = 1;
											$file=file("legarage.csv");

											if (72000 <= $legaragenewinputde2 and $legaragenewinputde2 < 192001){
												if (($handle = fopen("legarage.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $legaragenewinputde2 and $legaragenewinputde2 > 0) {
												        		echo	"	
																        <tr>
																			<th></th>
																			<th>".$Jahr2."</th>
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
														  	<th>".$Jahr2."</th>
														 	<td class='spr'>0</td>
														</tr>
														";
											}
											$legaragenewinputde2 = $legaragenewinputde2 / 2 * 3;
											$row = 1;
											$file=file("legarage.csv");

											if (110400 <= $legaragenewinputde2 and $legaragenewinputde2 < 288001){
												if (($handle = fopen("legarage.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $legaragenewinputde2 and $legaragenewinputde2 > 0) {
												        		echo	"	
																        		<tr>
																			    	<th></th>
																			    	<th>".$Jahr3."</th>
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
														  	<th>".$Jahr3."</th>
														 	<td class='spr'>0</td>
														</tr>
														";
											}
												$legaragenewinputde2 = $legaragenewinputde2 / 3 * 4;
												$row = 1;
												$file=file("legarage.csv");

											if (144000 <= $legaragenewinputde2 and $legaragenewinputde2 < 384001){
												if (($handle = fopen("legarage.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $legaragenewinputde2 and $legaragenewinputde2 > 0) {
												        		echo	"	
																        		<tr>
																			    	<th></th>
																			    	<th>".$Jahr4."</th>
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
														  	<th>".$Jahr4."</th>
														 	<td class='spr'>0</td>
														</tr>
														";
											}
											$legaragenewinputde2 = $legaragenewinputde2 / 4 * 5;
											$row = 1;
											$file=file("legarage.csv");

											if (180000 <= $legaragenewinputde2 and $legaragenewinputde2 < 468001){
												if (($handle = fopen("legarage.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $legaragenewinputde2 and $legaragenewinputde2 > 0) {
												        		echo	"	
																        		<tr>
																			    	<th></th>
																			    	<th>".$Jahr5."</th>
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
														  	<th>".$Jahr5."</th>
														 	<td class='spr'>0</td>
														</tr>
														</table>";
											}
										}
							?>		
							
							</div>
							<!-- Inhalt le GARAGE Deal Deutsch ----------------------------------------------------------------------------------------------->
							
							<!-- Inhalt MULTI Deal Deutsch ---------------------------------------------------------------------------------------------->
						    <div role="tabpanel" class="tab-pane" id="multideal">
						    	<br />
								<?php 
								echo"<h2>Steckt keine Tabelle dahinter >1689<</h2>";
								?>
						    	<div class="panel-group" id="accordion5">
							        <div class="panel panel-primary">
							          <div class="panel-heading">
							            <h4 class="panel-title">
							              <a data-toggle="collapse" data-parent="#accordion5" href="#collapse9"><?php echo $Titel1; ?></a>
							            </h4>
							          </div>
							          <div id="collapse9" class="panel-collapse collapse">
							            <div class="panel-body">
									    	<form name="formularmulti" action="#multideal" role="form" method="post" onsubmit="return chkFormularmulti()">
											  <div class="form-group">
											    <label for="exampleInputInvestition3"><?php echo $Titel2; ?></label>
											    <input type="number" class="form-control formlegarage" id="exampleInputInvestition3" name="multiinputde" placeholder="<?php echo $Titel2; ?>">
											  	<label for="exampleInputKunde5"><?php echo $Titel3; ?></label>
											    <input type="text" class="form-control formlegarage" id="exampleInputKunde5" name="multikunde" placeholder="<?php echo $Titel3; ?>">
											    <label for="exampleInputGebietsleiter5"><?php echo $Titel4; ?></label>
											    <input type="text" class="form-control formlegarage" id="exampleInputGebietsleiter5" name="multigebl" placeholder="<?php echo $Titel4; ?>">
											    <label for="exampleInputAngebot3"><?php echo $Titel5; ?></label>
											    <input type="text" class="form-control formlegarage" id="exampleInputAngebot3" name="multiangebot" placeholder="<?php echo $Titel5; ?>">
											  </div>
											  <button type="submit" class="btn btn-primary"><?php echo $button1; ?></button>
											</form>
											</div>
								          </div>
								        </div>
								        <div class="panel panel-primary">
								          <div class="panel-heading">
								            <h4 class="panel-title">
								              <a data-toggle="collapse" data-parent="#accordion5" href="#collapse10"><?php echo $Titel2; ?></a>
								            </h4>
								          </div>
								          <div id="collapse10" class="panel-collapse collapse">
								            <div class="panel-body">
								            <form name="formularmulti2" action="#multideal" role="form" method="post" onsubmit="return chkFormularmulti2()">
											  <div class="form-group">
											    <label for="exampleInputUmsatz3"><?php echo $Titel6; ?></label>
											    <input type="number" class="form-control formlegarage" id="exampleInputUmsatz3" name="multiinputde2" placeholder="<?php echo $Titel6; ?>">
											  </div>
											  <button type="submit" class="btn btn-primary"><?php echo $Titel2; ?></button>
											</form>
										</div>
								      </div>
									</div>
								</div> 
								<br />
								<?php
								error_reporting(0);
								    $multiinputde = $_POST["multiinputde"];
								    $multikunde = $_POST["multikunde"];
								    $multigebl = $_POST["multigebl"];
								    $multiangebot = $_POST["multiangebot"];
											$row = 1;
											if (($handle = fopen("multi.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
											    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
											        // Berechnung die ein Resultat ergibt...
											        // prüfen des resultates
											        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
											        if ( $data[0] <= $multiinputde and $data[1] > $multiinputde ) {
											        	
														echo	"<br />
											        				<h3>Angebot Mutli-Deal (" . $multiangebot . ")</h3>
											        				<h4 class='screenhide'>" . $multikunde . "</h4>
											        				<br />
											        				<table class='table'>
														        		<tr>
														        			<th>".$Titel7."</th>
														        			<td class='spr'>" . number_format ($multiinputde, 0, '.', "'") . "</td>
														        		</tr>
														        		<tr>
																	    	<th>".$Titel8."</th>
																	    	<td class='spr'>" . number_format ($data[2], 0, '.', "'") . "</td>
																	    </tr>
																    </table>
																    <table class='table'>
																	    <tr>
																	    	<th></th>
																	    	<th class='spr'><br />".$Projahr."</th>
																	    	<th class='spr'><br />".$Promonat."</th>
																	    </tr>
														        		<tr>
																	    	<th>".$Jahr1."</th>
																	    	<td class='spr'>" . number_format ($data[3] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[3] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>".$Jahr2."</th>
																	    	<td class='spr'>" . number_format ($data[4] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[4] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>".$Jahr3."</th>
																	    	<td class='spr'>" . number_format ($data[5] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[5] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>".$Jahr4."</th>
																	    	<td class='spr'>" . number_format ($data[6] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[6] / 12, 0, '.', "'") . "</td>
																	    </tr>
														        		<tr>
																	    	<th>".$Jahr5."</th>
																	    	<td class='spr'>" . number_format ($data[7] / 1, 0, '.', "'") . "</td>
																	    	<td class='spr'>" . number_format ($data[7] / 12, 0, '.', "'") . "</td>
																	  	</tr>
																	</table>
																<button type='submit' class='btn btn-primary' onClick='javascript:window.print()'>".$drucken."</button>
																<br /><h4 class='screenhide'>" . $multigebl . "</h4>
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
								$multiinputde2 = $_POST["multiinputde2"];
								$legaragekunde2 = $_POST["multikunde"];
								$legaragegebl2 = $_POST["legaragegebl2"];
								if (isset($legarageinputde2)) {
								error_reporting(0);
											$row = 1;
											$file=file("multi.csv");
											if (58000 <= $legarageinputde2 and $legarageinputde2 < 62001){
												if (($handle = fopen("multi.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $legarageinputde2 and $legarageinputde2 > 0 ) {
                                                            if ($debug){
                                                                echo "Jahr 1";
                                                                var_dump($legarageinputde2);
                                                                var_dump($data);
                                                            }
												        		echo	"<br />
													        				<table class='table'>
																        		<tr>
																        			<th>".$Titel6."</th>
																        			<td class='spr'>" . number_format ($legarageinputde2, 0, '.', "'") . "</td>
																        		</tr>
																        	</table>
																        	<table class='table'>
																        		<tr>
																			    	<th>".$Titel9."</th>
																			    	<th>".$Jahr1."</th>
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
														  		<th>".$Titel6."</th>
														  		<td class='spr'>" . number_format ($legarageinputde2, 0, '.', "'") . "</td>
														  	</tr>
														</table>
														<table class='table'>
														  	<tr>
														 		<th>".$Titel9."</th>
														 		<th>".$Jahr1."</th>
														 		<td class='spr'>0</td>
														 	</tr>
														";
											}
											$legarageinputde2 = $legarageinputde2 * 2;
											$row = 1;
											$file=file("multi.csv");

											if (58000 <= $legarageinputde2 and $legarageinputde2 < 123001){
												if (($handle = fopen("multi.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $legarageinputde2 and $legarageinputde2 > 0) {
                                                            if ($debug){
                                                                echo "Jahr 2";
                                                                var_dump($legarageinputde2);
                                                                var_dump($data);
                                                            }
												        		echo	"	
																        <tr>
																			<th></th>
																			<th>".$Jahr2."</th>
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
														  	<th>".$Jahr2."</th>
														 	<td class='spr'>0</td>
														</tr>
														";
											}
											$legarageinputde2 = $legarageinputde2 / 2 * 3;
											$row = 1;
											$file=file("multi.csv");

											if (58000 <= $legarageinputde2 and $legarageinputde2 < 195001){
												if (($handle = fopen("multi.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $legarageinputde2 and $legarageinputde2 > 0) {
                                                            if ($debug){
                                                                echo "Jahr 3";
                                                                var_dump($legarageinputde2);
                                                                var_dump($data);
                                                            }
												        		echo	"	
																        		<tr>
																			    	<th></th>
																			    	<th>".$Jahr3."</th>
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
														  	<th>".$Jahr3."</th>
														 	<td class='spr'>0</td>
														</tr>
														";
											}
												$legarageinputde2 = $legarageinputde2 / 3 * 4;
												$row = 1;
												$file=file("multi.csv");

											if (68000 <= $legarageinputde2 and $legarageinputde2 < 259001){
												if (($handle = fopen("multi.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $legarageinputde2 and $legarageinputde2 > 0) {
                                                            if ($debug){
                                                                echo "Jahr 4";
                                                                var_dump($legarageinputde2);
                                                                var_dump($data);
                                                            }
												        		echo	"	
																        		<tr>
																			    	<th></th>
																			    	<th>".$Jahr4."</th>
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
														  	<th>".$Jahr4."</th>
														 	<td class='spr'>0</td>
														</tr>
														";
											}
											$legarageinputde2 = $legarageinputde2 / 4 * 5;
											$row = 1;
											$file=file("multi.csv");

											if (90000 <= $legarageinputde2 and $legarageinputde2 < 803000){
												if (($handle = fopen("multi.csv", "r")) !== FALSE) {
											    // Schlaufe über alle Zeilen...
												    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
												        // Berechnung die ein Resultat ergibt...
												        // prüfen des resultates
												        // Wenn wie gewünscht  kann abgebrochen werden und Daten tabellarisch ausgegeben
												        if ( $data[2] > $legarageinputde2 and $legarageinputde2 > 0) {
                                                            if ($debug){
                                                                echo "Jahr 5";
                                                                var_dump($legarageinputde2);
                                                                var_dump($data);
                                                            }
												        		echo	"	
																        		<tr>
																			    	<th></th>
																			    	<th>".$Jahr5."</th>
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
														  	<th>".$Jahr5."</th>
														 	<td class='spr'>0</td>
														</tr>
														</table>";
											}
										}
							?>	
							
							</div>
							<!-- Inhalt MULTI Deal Deutsch ---------------------------------------------------------------------------------------------->
							
							
							
							
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

             © ESA 2018

        </p>
    </div>
</div>
</body>
</html>