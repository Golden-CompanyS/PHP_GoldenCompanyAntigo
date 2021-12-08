<?php
include "../database/connector.php";

$id = $_GET["msgid"];

$find = $connect->query("select * from tbclimsg where (msgID = '$id' and msgLida = false)");
if($find->rowCount() == 1)
{
	$update = $connect->query("update tbclimsg set msgLida = true where (msgID = '$id')");
}
else
{
	$update = $connect->query("update tbclimsg set msgLida = false where (msgID = '$id')");
}

header("location:userMsg.php#msgNum".$id);

?>