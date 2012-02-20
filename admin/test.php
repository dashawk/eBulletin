<?php

	require_once 'classes/API.Class.php';
	require_once 'classes/JSON.Class.php';
	
	$e = new eAPI;
	$a = new JSON;
	
	//$ee = $e->ValidUser('test','test');
	
	//$a->respond();
	$e->request();
	