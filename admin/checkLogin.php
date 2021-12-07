<?php
session_start();
include "../database/connector.php";

$cpf = $_POST["txtCPF"];
$senha = $_POST["txtSenha"];

$find = $connect->query("select funcCPF, funcSenha from tbFunc (where funcCPF = '$cpf')");
if($find->rowCount() == 1)
{
	$show = $find->fetch(PDO::FETCH_ASSOC);
	$senhaCript = $show["funcSenha"];
	
	if(password_verify($senha, $senhaCript))
	{
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