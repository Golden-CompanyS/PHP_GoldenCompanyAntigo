<?php
session_start();
include "../database/connector.php";

$cpf = $_POST["txtCPF"];
$senha = $_POST["txtSenha"];

$find = $connect->query("select funcCPF from tbfunc where (funcCPF = '$cpf')");
if($find->rowCount() == 1)
{
	$find = $connect->query("select funcCPF, funcSenha from tbfunc where (funcSenha = '$senha')");
	if($find->rowCount() == 1)
	{
		$show = $find->fetch(PDO::FETCH_ASSOC);
		$cpfAtivo = $show["funcCPF"];
		$_SESSION["CPF"] = $cpfAtivo;
		
		header("location:checkFunc.php");
	}
	else
	{
		header("location:../login.php?pass");
	}
}
else
{
	header("location:../login.php?cpf");
}
?>