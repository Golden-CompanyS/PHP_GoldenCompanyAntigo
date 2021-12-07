<?php
	$server = "localhost";
	$user = "root";
	$passw = "12345";
	$db = "dbGoldenCompanySite";

	$connect = new PDO("mysql:host=$server;dbname=$db",$user,$passw);
?>