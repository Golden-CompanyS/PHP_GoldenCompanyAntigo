<!DOCTYPE HTML>
<html>
	<head>
		<title>Golden Company</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="sourtout icon" href="img/icon.ico">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</head>
	<body>
		<?php 
			include "header.html";
		?>
		<?php
			include "slides history.html";
		?>
			<br><br>
			<section id="Funcs" style="background:#DADADA;background-size:cover;padding-top:2.5%;">
				<div style="display:flex;align-items: center;flex-direction: column;">
					<div class="row">
					  <div class="col"><img id="lety" src="img/funcs/lety.png" height="250" width="250" style="opacity:70%"></div>
					  <div class="col"><img id="lari" src="img/funcs/lari.png" height="250" width="250" style="opacity:70%"></div>
					  <div class="col"><img id="tav" src="img/funcs/tav.png" height="250" width="250" style="opacity:70%"></div>
					  <div class="col"><br>
						<div style="width:250px;display:flex;flex-direction: column;align-items: flex-end;">
							<h1 style="font-size:80px;font-weight:bold;">Quem</h1><h1 style="font-size:70px;font-weight:bold;">Somos</h1>
						</div>
					  </div>
					</div><br>
					<div class="row">
					  <div class="col"><img id="gus" src="img/funcs/gus.png" height="250" width="250" style="opacity:70%"></div>
					  <div class="col"><img id="eri" src="img/funcs/eri.png" height="250" width="250" style="opacity:70%"></div>
					  <div class="col"><img id="wes" src="img/funcs/wes.png" height="250" width="250" style="opacity:70%"></div>
					  <div class="col"><img id="gui" src="img/funcs/gui.png" height="250" width="250" style="opacity:70%"></div>
					</div>
				</div><br>
				<h4 align="center" style="color:black;text-shadow: 1px 1px 10px white;" id="descFunc">
				Deslize em uma das fotos de perfil
				para visualizar a descrição 
				de cada membro
				</h4><br>
				<script src="scripts/dynamicFuncs.js"></script>
			</section>
		<?php include "footer.html" ?>
	</body>
</html>