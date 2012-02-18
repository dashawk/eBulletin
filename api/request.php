<?php

	require_once '../admin/classes/API.Class.php';
	
	$e = new eAPI;
	
	$e->request();
	//$e->ValidateUser('test','test');
	
	//if($e->doLogin->error == 0){
	//	echo $e->doLogin->message;
	//} else {
	//	echo $e->doLogin->message;
	//}
	//$s = $e->eBulletin->Query('SELECT * FROM tbl_users');
	
	//echo '<pre>';
	//var_dump($s);