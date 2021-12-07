<?php
include "../database/connector.php";

$CPF = $_GET["cpf"];
$CEP = $_GET["cep"];
$pass = $_POST["txtSenha"];

$find = $connect->query("select * from seeFuncs where (CPF = '$CPF')");
$show = $find->fetch(PDO::FETCH_ASSOC);
$senhaCript = $show["Senha"];

if(password_verify($pass, $senhaCript))
{
	$delete = $connect->query("delete from tbfunc where (funcCPF = '$CPF'");
	echo "<script>alert('Dados deletados com sucesso')</script>";
	echo "<script>window.location.href = 'checkFunc.php'</script>";
}
else
{
	echo "<script>alert('Senha incorreta!')</script>";
	echo "<script>window.location.href = 'alterFunc.php?cpf=".$CPF."'</script>";
}
?>
?>