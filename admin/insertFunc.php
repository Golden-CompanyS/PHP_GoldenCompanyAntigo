<?php
include "../database/connector.php";

$cpf = $_POST["txtCPF"];
$nome = $_POST["txtNome"];
$cargo = $_POST["txtCargo"];
$log = $_POST["txtLog"];
$numLog = $_POST["txtNumLog"];
$cid = $_POST["txtCidade"];
$est = $_POST["cboEstado"];
$cep = $_POST["txtCEP"];

$senha = $_POST["txtSenha"];

$senhaCript = password_hash($senha, PASSWORD_BCRYPT);

$insert = $connect->query("call insertFunc('$cpf', '$nome', '$cargo', '$numLog', '$cep', '$cid','$est', '$log',
'$senhaCript')");

header('Location:checkFunc.php');

?>