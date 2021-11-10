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
		<?php 
			include "funcMenu.php"; 
			include "../database/connector.php";
			$find = $connect->query("select * from seeFuncs");
		?>
		<div style="padding:20px;">
			<h2>Verificar os funcionários cadastrados</h2>
			<div style="overflow: scroll;width:150%;height:90%;border-style:solid;border-width:1px 1px 1px 1px;max-width:115%;max-height:780%;">
				<table class="table" style="max-width:inherit">
					<thead>
						<tr>
							<th scope="col">CPF</th>
							<th scope="col">Nome</th>
							<th scope="col">Cargo</th>
							<th scope="col">Endereço</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php
							while($show = $find->fetch(PDO::FETCH_ASSOC))
							{ 
								echo'<tr class="align-middle" style="font-size:15px">';?>
									<td scope="col">
										<?php echo $show["CPF"]?>
									</td>
									<td>
										<a title="<?php echo $show["Nome"]; ?>">
											<?php echo mb_strimwidth($show["Nome"],0, 21, "...")?>
										</a>
									</td>
									<td>
										<a title="<?php echo $show["Cargo"]; ?>">
											<?php echo mb_strimwidth($show["Cargo"],0, 21, "...")?>
										</a>
									<td>
										<a title="<?php echo $show["CEP"]?>">
											<?php echo $show["Logradouro"].", ".$show["Número"]?><br>
											<small>
												<?php echo $show["Cidade"].", ".$show["Estado"]?>
											</small>
										</a>
									</td>
									<td>
										<a href="alterFunc.php?cpf=<?php echo $show["CPF"] ?>">
											<button class="btn btn-warning" type="submit">Alterar</button>
										</a>
									</td>
								</tr>
						<?php }
						?>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>