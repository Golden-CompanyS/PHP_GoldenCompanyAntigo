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
			$find = $connect->query("select * from tbCliMsg order by msgID desc");
		?>
		<div style="padding:20px;">
			<h2>Mensagens dos clientes</h2>
			<div style="overflow: scroll;width:150%;height:90%;border-style:solid;border-width:1px 1px 1px 1px;max-width:100%;max-height:60%,min-height:60%">
				<?php
				while($show = $find->fetch(PDO::FETCH_ASSOC))
				{ 
					echo '<div style="padding:10px;display:flex;flex-direction:column;border-width:1px 1px 1px 1px;">';?>
						<h4>Mensagem <?php echo $show["msgID"] ?></h4>
						<div style="display:flex;align-items: flex-start;">
							<h5>De:&nbsp<?php echo $show["cliNome"] ?></h5><p> </p>
						</div>
						<h5>Mensagem:&nbsp</h5>
						<p>
							<?php echo $show["cliMsg"]  ?>
						</p>
						<div style="display:flex;">
							<a href="mailto:<?php echo $show["cliEmail"] ?>"> 
								<button style="30px">Responder</button>
							</a>&nbsp
							<a><button style="30px">Marcar como lida</button></a>
						</div>
					<?php echo '</div>';
				}?>
				</div>
			</div>
			
		</div>
	</body>
</html>