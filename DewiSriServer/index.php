<?
/*
DewisriRestaurant Server Side
Mochammad Masbuchin
buchin@masbuchin.com
*/
require("inc/RedBean/redbean.inc.php");
$toolbox = RedBean_Setup::kickstartDev("mysql:host=localhost;dbname=restobean","root","" ); 
$redbean = $toolbox->getRedBean(); 
$pegawai  = $redbean->dispense("pegawai");
$pegawai->username = "robert";
$pegawai->password = md5("okedeh");
$pegawai->role = "cashier";
$pegawai_id = $redbean->store($pegawai);

?>