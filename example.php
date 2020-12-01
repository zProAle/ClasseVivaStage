<?php
// Include the clas

include("classeviva_class.php");
// Set a istance

$classeviva = new Classeviva("PHP SESSION ID");
// View video

for($i=1; $i<15; $i++){
	if($i < 10){
		$k = "01.0$i";
	} else {
		$k = "01.$i";
	}
	echo $k . PHP_EOL;
	echo $classeviva->viewVideo($k,"sicvid");
}

// Set minutes
$classeviva->setMinutiTotali(100);
$classeviva->setMinutiSlide(63);
$classeviva->setMinutiTest(53);
$classeviva->setMinutiNormative(33);


// TEST VIDEOTERMINALI RISPOSTE CORRETTE

$json = '[{"codice":"01.01.d1","domanda":"1","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"2"},{"codice":"01.01.d2","domanda":"2","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"1"},{"codice":"01.02.d1","domanda":"1","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"2"},{"codice":"01.02.d2","domanda":"2","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"3"},{"codice":"01.03.d1","domanda":"1","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"3"},{"codice":"01.03.d2","domanda":"2","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"2"},{"codice":"01.04.d1","domanda":"1","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"1"},{"codice":"01.04.d2","domanda":"2","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"2"},{"codice":"01.05.d1","domanda":"1","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"1"},{"codice":"01.05.d2","domanda":"2","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"3"},{"codice":"01.06.d1","domanda":"1","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"1"},{"codice":"01.06.d2","domanda":"2","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"3"},{"codice":"01.07.d1","domanda":"1","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"1"},{"codice":"01.07.d2","domanda":"2","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"2"},{"codice":"01.08.d1","domanda":"1","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"3"},{"codice":"01.08.d2","domanda":"2","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"3"},{"codice":"01.09.d1","domanda":"1","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"3"},{"codice":"01.09.d2","domanda":"2","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"3"},{"codice":"01.11.d1","domanda":"1","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"1"},{"codice":"01.11.d2","domanda":"2","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"2"},{"codice":"01.13.d1","domanda":"1","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"1"},{"codice":"01.13.d2","domanda":"2","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"3"},{"codice":"01.10.d1","domanda":"1","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"1"},{"codice":"01.10.d2","domanda":"2","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"3"},{"codice":"01.12.d1","domanda":"1","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"1"},{"codice":"01.12.d2","domanda":"2","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"2"},{"codice":"01.14.d1","domanda":"1","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"1"},{"codice":"01.14.d2","domanda":"2","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"2"}]';
$array = json_decode($json, true);
foreach ($array as $value)
{
   echo $classeviva->setRisposataVideo($value["codice"], $value["domanda"], $value["risp3"]);
}

// TEST FINALE VIDEOTERMINALI
$json = '[{"codice":"d5","domanda":"5","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"3"},{"codice":"d8","domanda":"8","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"1"},{"codice":"d4","domanda":"4","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"1"},{"codice":"d12","domanda":"12","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"2"},{"codice":"d13","domanda":"13","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"1"},{"codice":"d16","domanda":"16","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"3"},{"codice":"d2","domanda":"2","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"3"},{"codice":"d9","domanda":"9","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"3"},{"codice":"d7","domanda":"7","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"3"},{"codice":"d11","domanda":"11","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"2"},{"codice":"d14","domanda":"14","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"3"},{"codice":"d10","domanda":"10","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"1"},{"codice":"d3","domanda":"3","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"2"},{"codice":"d6","domanda":"6","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"3"},{"codice":"d1","domanda":"1","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"3"},{"codice":"d15","domanda":"15","risp1_class":"evidenza3","risp1":"Corretta","risp2":" ","risp3":"1"}]';
$array = json_decode($json, true);
foreach ($array as $value)
{
   echo $classeviva->setRisposataTestFinale($value["codice"], $value["domanda"], $value["risp3"]);
}
