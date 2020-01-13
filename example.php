<?php

include("classeviva_class.php");
$classeviva = new Classeviva();
$session = "PHPSESSIONID";
echo $session;
echo $classeviva->minuti_slide($session);
echo $classeviva->minuti_normative($session);
echo $classeviva->minuti_video($session);
echo $classeviva->minuti_test($session);
echo $classeviva->view("NUMERO VIDEO",$session);


?>
