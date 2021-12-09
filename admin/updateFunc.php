<?php
include "../database/connector.php";

$antigoCPF = $_GET["cpf"];

$novoCpf = $_POST["txtCPF"];
$nome = $_POST["txtNome"];
$social = $_POST["txtNomeSoc"];
$cargo = $_POST["txtCargo"];
$log = $_POST["txtLog"];
$numLog = $_POST["txtNumLog"];
$cidade = $_POST["txtCidade"];
$estado = $_POST["cboEstado"];
$cep = $_POST["txtCEP"];
$pass = $_POST["txtSenha"];

$find = $connect->query("select * from seeFuncs where (CPF = '$antigoCPF')");
$show = $find->fetch(PDO::FETCH_ASSOC);
$senhaCript = $show["Senha"];

if(password_verify($pass, $senhaCript))
{
	$alter = $connect->query("update tbfunc set funcCPF = '$novoCpf', funcNome = '$nome', 
	funcSocial = '$social', funcCarg = '$cargo', numEnd = '$numLog' where funcCPF = '$antigoCPF'");
	echo "<script>alert('Dados alterados com sucesso')</script>";
	echo "<script>window.location.href = 'checkFunc.php'</script>";
}
else
{
	echo "<script>alert('Senha incorreta!')</script>";
	echo "<script>window.location.href = 'alterFunc.php?cpf=".$antigoCPF."'</script>";
}
?>