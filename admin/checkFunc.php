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
			include "funcMenu.php"; 
			include "../database/connector.php";
			$find = $connect->query("select * from seeFuncs");
		?>
		<div style="padding:20px;">
			<h2>Verificar os funcionários cadastrados</h2>
			<div style="overflow: scroll;width:800px;height:465px;border-style:solid;border-width:1px 1px 1px 1px;">
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
										</a><br>
										<small>
												<?php echo $show["Nome social"]?>
										</small>
									</td>
									<td>
										<a title="<?php echo $show["Cargo"]; ?>">
											<?php echo mb_strimwidth($show["Cargo"],0, 20, "...")?>
										</a>
									<td>
										<a title="<?php echo $show["Logradouro"].", ".$show["Número"]." CEP: ".$show["CEP"]?>">
											<?php echo mb_strimwidth($show["Logradouro"].", ".$show["Número"],0, 15, "...") ?><br>
											<small>
												<?php echo $show["Cidade"].", ".$show["Estado"]?>
											</small>
										</a>
									</td>
									<td>
										<a href="alterFunc.php?cpf=<?php echo $show["CPF"] ?>">
											<button class="btn btn-warning" type="submit">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
													<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
												</svg>
											</button>
										</a>
									</td>
									<td>
										<a href="excludeFunc.php?cpf=<?php echo $show["CPF"] ?>">
											<button class="btn btn-danger" type="submit">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
												  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
												  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
												</svg>
											</button>
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