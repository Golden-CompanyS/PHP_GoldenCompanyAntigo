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
		<div style="background-image: url(img/bg.jpg);background-size: cover;filter: blur(7px);width:100%;height:100%;z-index:-1;position:absolute;">
		</div>
		<a href="index.php">
			<button class="btn" style="background:black; color: white;border-radius:0px 0px 5px 0px">
				<span class="glyphicon glyphicon-menu-left"></span> Voltar ao site
			</button>
		</a>
			<div style="margin: 200px;margin-top: 10%;margin-bottom:0px;">
				<h2 align="center">Acesso à Área do Funcionário</h2>
				<form method="post" name="frmLogin" style="margin-left:100px;margin-right:100px;display:flex;flex-direction: column;font-size:24px;align-items: center;" action="admin/checkFunc.php">
					<div class="form-group">
						<label for="txtCPF">CPF:</label>
						<input name="txtCPF" type="text" class="form-control" placeholder="Digite seu CPF" style="font-size:24px;">
					</div>
					<div class="form-group">
						<label for="txtSenha">Senha:</label>
						<input name="txtSenha" type="text" class="form-control" placeholder="Digite sua senha" style="font-size:24px;">
					</div><br>
					<button class="btn" type="submit" style="background:black; color: white;font-size:28px;width:300px;">
						Entrar
					</button>
				</form>
			</div>
		</a>
	</body>
</html>