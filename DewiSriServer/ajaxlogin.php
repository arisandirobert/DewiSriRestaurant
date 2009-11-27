<?
/*
AJax Login for Resto
Mochammad Masbuchin

*/
require("inc/init.php");
if(1){
	/*$oke = array(
		'status' => "oke"
	);
	echo json_encode($oke);*/
	$database = $adapter->getRow("select id from pegawai limit 1"); 
	//$pegawai1 = $redbean->batch("pegawai", $database);
	$pegawai = $redbean->load("pegawai",$database); 
	//print_r($pegawai);
	/*if () */
	//echo json_encode($pegawai);
	//let's authenticate the user
	$suka = json_encode(array(
		'username' => $_GET['username'],
		'password' => $_GET['password']
		));
	echo $suka;
	}
	
	
?>