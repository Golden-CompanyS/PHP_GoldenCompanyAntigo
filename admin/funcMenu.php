<?php
	include "../database/connector.php";
	session_start();
	
	if(empty($_SESSION["CPF"]))
	{
			header("Location:../index.php");
	}
	else
	{
		$cpfAtivo = $_SESSION["CPF"];
		
		$find = $connect->query("select * from seeFuncs where (CPF = '$cpfAtivo')");
		$show = $find->fetch(PDO::FETCH_ASSOC);
	}
?>
<nav class="navbar navbar-expand-lg navbar-light" style="background:#f8f9fa;">
	<a href="#" class="navbar-brand" style="margin-left:5%;">Área do Funcionário</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" style="margin-left: 60%;">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<div>
				<p style="margin:0px; font-size:12px;">Logado como:</p>
				<p style="margin: 0px;"><?php echo mb_strimwidth($show["Nome"],0, 22, "..."); ?></p>
				</div>
			</li>
			<li class="nav-item active" style="margin-left:25px;margin-top:12px;">
				<a href="sessionDestroy.php" style="color:black;">Sair</a>
			</li>
		</ul>
	</div>
</nav>
<div style="display:flex;max-height:100%">
	<div class="container" style="margin-left:0px;background:#f8f9fa;margin:0px;width:400px;">
		<div class="row" style="width:360px;margin:0px;padding-bottom:7px;">
			<div class="col">
				<a href="checkFunc.php" style="text-decoration:none;">
					<img src="" height="145px" width="350px">
					<h4 align="center" style="font-weight:normal;color:black;">Verificar funcionários</h4>
				</a>
			</div>
			<div class="col">
				<a href="newFunc.php" style="text-decoration:none;">
					<img src="" height="145px" width="350px">
					<h4 align="center" style="font-weight:normal;color:black;">Cadastrar novo funcionário</h4>
				</a>
			</div>
			<div class="col">
				<?php
					$find = $connect->query("select * from tbclimsg where (msgLida = false);");
					$notNum = $find->rowCount();
				?>
				<a href="userMsg.php" style="text-decoration:none;">
					<img src="" height="145px" width="350px">
					<h4 align="center" style="font-weight:normal;color:black;">Mensagens dos clientes (<?php echo $notNum?>)</h4>
				</a>
			</div>
		</div>
	</div>