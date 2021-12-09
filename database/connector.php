<?php
	$server = "localhost";
	$user = "main";
	$passw = "Negocios1.";
	$db = "dbGoldenCompanySite";

	$connect = new PDO("mysql:host=$server;dbname=$db",$user,$passw);
?>