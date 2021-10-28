<!DOCTYPE HTML>
<html>
	<head>
		<title>Golden Company</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="sourtout icon" href="">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</head>
	<body>
		<?php include "funcMenu.php" ?>
		<div style="padding:20px;">
			<h2>Cadastrar novo funcionário</h2>
			<form method="post" action="" style="display:flex;flex-direction:column;">
				<div class="form-group">
					<label for="txtCPF">CPF:</label>
					<input id="txtCPF" type="text" placeholder="Insira o CPF do funcionário" class="form-control">
				</div>
				<div class="form-group">
					<label for="txtNome">Nome:</label>
					<input id="txtNome" type="text" placeholder="Insira o nome do funcionário" class="form-control">
				</div>
				<div class="form-group">
					<label for="txtCargo">Cargo:</label>
					<input id="txtCargo" type="text" placeholder="Insira o cargo do funcionário" class="form-control">
				</div>
				<div style="display:flex;">
					<div class="form-group" style="width:80%;">
						<label for="txtLog">Logradouro:</label>
						<input id="txtLog" type="text" placeholder="Insira o logradouro atual do funcionário" class="form-control">
					</div>
				
					<div class="form-group" style="width:20%;">
						<label for="txtNumLog">Número:</label>
						<input id="txtNumLog" type="number" placeholder class="form-control">
					</div>
				</div>
				<div style="display:flex;">
					<div class="form-group" style="width:85%;">
						<label for="txtCidade">Cidade:</label>
						<input id="txtCidade" type="number" placeholder="Insira a cidade onde o funcionário reside" class="form-control" style="">
					</div>
					<div class="form-group" style="width:15%;">
						<label for="txtEstado">Estado:</label>
						<select id="txtEstado" class="form-control">
							<option>SP</option>
							<option>RJ</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="txtCEP">CEP:</label>
					<input id="txtCEP" type="text" placeholder="" class="form-control">
				</div>
				<button type="submit" class="btn btn-primary" style="width:30%; margin-top:10px">
					Cadastrar
				</button>
			</form>
		</div>
	</body>
</html>