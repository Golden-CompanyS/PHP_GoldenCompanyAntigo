<?php
	include "database/connector.php";

	$name = $_POST["txtNome"];
	$email = $_POST["txtEmail"];
	$msg = $_POST["txtMsg"];

try{
	$insert = $connect->query("insert into tbCliMsg values (default, '$name', '$email', '$msg')");
}
catch(PDOException $e) {
}
	echo 
	"
		<script>
			if(confirm('Mensagem enviada com sucesso!')) document.location = 'index.php#Contact';
		</script>
	";
?>