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
		<section id="Home">
		<?php
			include "header.html";
			//include "slides.html";
		?>
		</section>
		
		<style>
			.up:hover{
				opacity:100%;
			}
			.btn{
				background:black;
				color:white;
				border-radius:3px;
				font-weight:600;
				margin-top:5px;
			}
			.btn:hover{
				background-color:gold;
				color:black;
				font-weight:600;
				transition:0.3s;
			}
		</style>
			
		<section  id="limitUp">
			<div class="up" style="position: sticky;width: 80px;height: 80px;left: 1100px;top:500px;background:gray;z-index:1;border-radius:25px;opacity:35%;">
				<a href="#Home">
				<svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="white" class="bi bi-arrow-up" viewBox="0 0 16 16" style="margin:20%;">
					<path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
				</svg>
				</a>
			</div>
			<div style="padding: 25px; display: flex;align-items: center;">
				<img src="img/services/1.png" style="height: 208px;">
				<div style="padding: 50px;">
					<h1>Desenvolvimento Web</h1>
					<p style="font-size: 28px">
						Na era onde tudo se tornou digital, não se 
						pode ficar para trás. Uma empresa sem site, é uma empresa sem identidade. 
						E com nossos sites, faremos sua empresa se destacar.
					</p>
				</div>
			</div>
			<hr>
			<div style="padding: 25px; display: flex;align-items: center;">
				<img src="img/services/2.png" style="height: 208px;">
				<div style="padding: 50px;">
					<h1>Design Digital</h1>
					<p style="font-size: 28px">
						Nossa equipe de design se preocupa em 
						trazer o melhor visual e experiência para o usuário, afim de 
						estabelecer a identidade visual do cliente no meio digital.
					</p>
				</div>
			</div>
			<hr>
			<div style="padding: 25px; display: flex;align-items: center;">
				<img src="img/services/3.png" style="height: 208px;">
				<div style="padding: 50px;">
					<h1>Desenvolvimento Back-End</h1>
					<p style="font-size: 28px">
						Assim como sites, também desenvolvemos
						software de gerenciamento para sua empresa, aprimorando a administração,
						facilitando, integrando e automatizando atividades e processos.
					</p>
					</div>
			</div>
			<div style="padding:5%;background-image: url('img/partners/bg.jpg');background-size:cover">
				<h1 align="center" style="padding-bottom: 50px;">Parceiros</h2>
				<div style="display: flex; justify-content: space-evenly;">
					<img id="partner2" src="img/partners/saga.png" style="height: 200px;filter:grayscale(100%);">
					<img id="partner1" src="img/partners/bg.png" style="height: 200px;filter:grayscale(100%);opacity:80%">
					<img id="partner3" src="img/partners/dell.png" style="height: 200px;filter:grayscale(100%);">
				</div>
				<h2 id="titlePartner" align="center"></h2>
				<h5 id="descPartner" align="center">Passe o mouse sobre os ícones dos parceiros para conhecê-los!</h5>
				<script src="scripts/dynamicPartners.js"></script>
			</div>
			<div style="padding: 5%;">
				<h1 align="center">Objetivos da empresa</h1>
				<br>
				<div style="display: flex; justify-content: space-around; text-align:center;">
					<div><img src="img/objectives/1.png" style="height: 200px;"><h3>Segurança Social</h3></div>
					<div><img src="img/objectives/2.png" style="height: 200px;"><h3>Melhor Expericência</h3></div>
					<div><img src="img/objectives/3.png" style="height: 200px;"><h3>Atender à Expectativas</h3></div>
				</div>
			</div>
			<hr>
			</section>
			<section id="Contact">
				<div style="padding-top: 5%; padding-bottom: 5%">
					<h1 align="center">Contate-nos</h1>
					<h5 align="center">Deseja trabalhar conosco ou iniciar uma parceria? Dar uma sugestão ou feedback?</h5>
					<br>
					<div style="display: flex; padding-right: 20px; padding-left: 20px;">
						<div style="width:50%; margin-right: 30px;">
							<form name="frmFeedback" method="post" action="insertUserMsg.php">
								<div class="form-group">
									<label for="txtNome">Nome:</label>
									<input id="txtNome" type="text" class="form-control" name="txtNome" style="background:#e6e6e6;border-radius:3px;">
								</div>
								<div class="form-group">	
									<label for="txtEmail">Email:</label>
									<input id="txtEmail" type="email" class="form-control" name="txtEmail" style="background:#e6e6e6;border-radius:3px;">
								</div>
								<div class="form-group">	
									<label for="txtEmail">Mensagem:</label>
									<textarea id="txtMsg" class="form-control" name="txtMsg" rows="8" maxlength="1000" style="background:#e6e6e6;border-radius:3px;resize:none;"></textarea>
								</div>
								<button type="submit" class="btn" style="background:#e6e6e6;border-radius:3px;margin-top:5px;">Enviar</button>
							</form>
						</div>
						<div style="width:50%; background: DeepSkyBlue; margin-left: 30px;">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.3303336791546!2d-46.73065765014803!3d-23.520618484628045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef8c1d371ec31%3A0x671c9325c275132e!2sETEC%20Professor%20Basilides%20de%20Godoy.!5e0!3m2!1spt-BR!2sbr!4v1635089199086!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
					</div>
				</div>
			</section>
		</section>
		<?php include "footer.html" ?>
	</body>
</html>