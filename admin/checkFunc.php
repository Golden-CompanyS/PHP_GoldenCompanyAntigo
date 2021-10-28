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
			<h2>Verificar os funcionários cadastrados</h2>
			<div style="overflow: scroll;width:150%;height:780%;border-style:solid;border-width:1px 1px 1px 1px;max-width:115%;max-height:780%;">
				<table class="table" style="max-width:inherit">
					<thead>
						<tr>
							<th scope="col">CPF</th>
							<th scope="col">Nome</th>
							<th scope="col">Cargo</th>
							<th scope="col">Endereço</th>
							<th scope="col">CEP</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td scope="col">132213412</td>
							<td>Fulano de Silva</td>
							<td>Designer</td>
							<td>Casa da Mãe Juana, 212. São Paulo, SP</td>
							<td>241234</td>
						</tr>
						<tr>
							<td scope="col">132213412</td>
							<td>Ciclano Júnior</td>
							<td>Cassino</td>
							<td>Viaduto do Chá de Amo, 53. São Paulo, SP</td>
							<td>241234</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>