<?php
	include "database/connector.php";

	$name = $_POST["txtNome"];
	$email = $_POST["txtEmail"];
	$msg = $_POST["txtMsg"];

	$insert = $connect->query("insert into tbCliMsg values (default, '$name', '$email', '$msg', default)");
	
	echo "<script>alert(Mensagem enviada com sucesso!')</script>";
	echo "<script>window.location.href = 'index.php#Contact'</script>";
?>