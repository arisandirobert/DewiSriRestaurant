<?
/*
init.php
Redbean initializator
Mochammad Masbuchin
*/
require("RedBean/redbean.inc.php");
$toolbox = RedBean_Setup::kickstartDev( "mysql:host=localhost;dbname=restobean","root","" ); 
$redbean = $toolbox->getRedBean(); 
$pegawai = $redbean->dispense("pegawai");
$adapter = $toolbox->getDatabaseAdapter(); 
?>