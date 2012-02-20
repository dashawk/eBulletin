<?php 

	require_once 'libs/Smarty.class.php';
	require_once 'admin/classes/eBulletin.Class.php';
	require_once 'admin/classes/Curl.Class.php';

	$e = new eBulletin;
	$c = new CURL;
	$smarty = new smarty;
	
	if(!isset($_SESSION['userid'])){
		if(isset($_POST['login'])){
			$login = $c->Download('http://localhost:2020/ebulletin/authorize/'
						.$e->antiHack($_POST['username']).'/'.$e->antiHack($_POST['password']).'/');
						
			$data = json_decode($login);
			$error = $data->error;
			
			
		}
	}