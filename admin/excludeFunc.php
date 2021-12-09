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
		<link href="bootstrap.icon-large.min.css" rel="stylesheet">
	</head>
	<body>
		<?php
			include "../database/connector.php";
			include "funcMenu.php";
			
			$CPF = $_GET["cpf"];
			
			$find = $connect->query("select Nome from seeFuncs where (CPF = '$CPF')");
			$show = $find->fetch(PDO::FETCH_ASSOC);
			
			$nome = $show["Nome"]
		?>
		<form method="post" action="deleteFunc.php?cpf=<?php echo $CPF ?>" style="margin:auto;">
			<h3>Deletando <?php echo $nome ?></h3>
			<div class="form-group">
				<label for="txtSenha">Senha:</label>
				<input id="txtSenha" name="txtSenha" type="password" placeholder="Insira a senha de <?php echo $nome ?>" class="form-control" required>
			</div>
			<button class="btn btn-danger" type="submit" style="margin-top:2.5%;">Deletar</button>
		</form>
		<script>
			pass = document.getElementById("txtSenha");
					
			var error = window.location.search;
			error = error.slice(-5);
			
			if(error == "?pass"){
			pass.placeholder = "Senha incorreta";
			pass.style.borderColor = "#ff6666";
			pass.style.borderWidth = "2px";
			}
		</script>
	</body>
</html>