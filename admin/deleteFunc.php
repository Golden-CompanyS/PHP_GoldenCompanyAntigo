<?php
include "../database/connector.php";
session_start();

$CPF = $_GET["cpf"];
$pass = $_POST["txtSenha"];

$find = $connect->query("select * from seeFuncs where (CPF = '$CPF')");
$show = $find->fetch(PDO::FETCH_ASSOC);
$senhaCript = $show["Senha"];

if(password_verify($pass, $senhaCript))
{
	$delete = $connect->query("delete from tbfunc where (funcCPF = '$CPF')");
	$delete = $connect->query("delete from tbendereco where (CEP = (select CEP from tbfunc where (funcCPF = '$CPF')))");
	echo "<script>alert('Dados deletados com sucesso')</script>";
	if($CPF == $_SESSION["CPF"])
	{
		echo "<script>window.location.href = 'sessionDestroy.php'</script>";
	}
	else
	{
		echo "<script>window.location.href = 'checkFunc.php'</script>";
	}
}
else
{
	header("location:excludeFunc.php?cpf=".$CPF."&?pass");
}
?>