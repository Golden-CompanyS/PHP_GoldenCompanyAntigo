<!DOCTYPE HTML>
<html>
	<head>
		<title>Golden Company</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="sourtout icon" href="../img/icon.ico">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="../jquery.mask.min.js"></script>
		<link rel="sourtout icon" href="img/icon/favicon.ico">
		<script>
			$(document).ready(function(){
				$("#txtCPF").mask("000.000.000-00");
				$("#txtCEP").mask("00000-000");
				$("#txtNumLog").mask("0000");
				$("#txtSenha").mask("00000000000000000000");
			});
		</script>
	</head>
	<body>
		<?php 
			include "funcMenu.php";
			include "../database/connector.php";
			$cpfAlterado = $_GET["cpf"];
			
			$find = $connect->query("select * from seeFuncs where(CPF = '$cpfAlterado')");
			$show = $find->fetch(PDO::FETCH_ASSOC);
		?>
		<div style="padding:20px;padding-bottom:0px">
			<h3>Alterando <?php echo $show["Nome"]?></h3>
			<form method="post" action="updateFunc.php?cpf=<?php echo $cpfAlterado ?>" style="display:flex;flex-direction:column;">
				<div class="form-group">
					<label for="txtCPF">CPF:</label>
					<input id="txtCPF" name="txtCPF" type="text" value="<?php echo $show["CPF"] ?>" placeholder="Insira o CPF do funcionário" class="form-control" required data-mask="000.000.000-00">
				</div>
				<div class="form-group">
					<label for="txtNome">Nome:</label>
					<input id="txtNome" name="txtNome" type="text" value="<?php echo $show["Nome"] ?>" placeholder="Insira o nome do funcionário" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="txtNome">Nome social:</label>
					<input id="txtNomeSoc" name="txtNomeSoc" type="text" value="<?php echo $show["Nome social"] ?>" placeholder="Insira o nome social do funcionário caso seja trans" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="txtCargo">Cargo:</label>
					<input id="txtCargo" name="txtCargo" type="text" value="<?php echo $show["Cargo"] ?>" placeholder="Insira o cargo do funcionário" class="form-control" required>
				</div>
				<div style="display:flex;">
					<div class="form-group" style="width:80%;">
						<label for="txtLog">Logradouro:</label>
						<input id="txtLog" name="txtLog" type="text" value="<?php echo $show["Logradouro"] ?>" placeholder="Insira o logradouro atual do funcionário" class="form-control" required>
					</div>
				
					<div class="form-group" style="width:20%;">
						<label for="txtNumLog">Número:</label>
						<input id="txtNumLog" name="txtNumLog" type="number" value="<?php echo $show["Número"] ?>" placeholder class="form-control" required>
					</div>
				</div>
				<div style="display:flex;">
					<div class="form-group" style="width:85%;">
						<label for="txtCidade">Cidade:</label>
						<input id="txtCidade" name="txtCidade" type="text" value="<?php echo $show["Cidade"] ?>" placeholder="Insira a cidade natal do funcionário" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="txtCEP">CEP:</label>
						<input id="txtCEP" name="txtCEP" type="text" value="<?php echo $show["CEP"] ?>" class="form-control" placeholder="Insira o CEP" required>
					</div>
					<div class="form-group" style="width:15%;">
						<label for="cboEstado">Estado:</label>
						<select id="cboEstado" name="cboEstado" class="form-control">
							<?php
								$estadoAtual = $show["Estado"];
								$find = $connect->query("select * from tbestado");
								while($show = $find->fetch(PDO::FETCH_ASSOC))
								{
									if($show["estUF"] == $estadoAtual)
									{
										$selected = "selected";
									}
									else {$selected = "";}
									echo "<option value=".$show["estUF"]." ".$selected.">".$show["estUF"]."</option>";
								}
							?>
						</select>
					</div>
					<?php
						$find = $connect->query("select * from seeFuncs where(CPF = '$cpfAlterado')");
						$show = $find->fetch(PDO::FETCH_ASSOC);
					?>
				</div>
				
				<div class="form-group">
					<label for="txtSenha">Senha atual:</label>
					<input id="txtSenha" name="txtSenha" type="TEXT" placeholder="Digite a senha atual do funcionário" class="form-control" required>
				</div>
				<div style="display:flex;">
					<button type="submit" class="btn btn-warning" style="width:30%; margin-top:10px;margin-right:5px;">
						Alterá-lo
					</button><br>
				</div>
			</form>
		</div>
	</body>
</html>