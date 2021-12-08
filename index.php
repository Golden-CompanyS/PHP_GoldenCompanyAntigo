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
		?>
			<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img style="width: 100%; height: 430.33px; object-fit: cover;" src="img/slideshow/1.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/slideshow/2.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/slideshow/3.jpg" alt="Third slide">
					</div>
				</div>
			</div>
		</section>
		
		<style>.up:hover{
			opacity:100%;
		}</style>
			
		<section  id="limitUp">
			<div class="up" style="position: sticky;width: 80px;height: 80px;left: 1100px;top:500px;background:gray;z-index:1;border-radius:25px;opacity:10%;">
				<a href="#Home">
				<svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="white" class="bi bi-arrow-up" viewBox="0 0 16 16" style="margin:20%;">
					<path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
				</svg>
				</a>
			</div>
			<section id="Services">
				
			
				<div style="padding: 25px; display: flex;">
					<div style="width:100%; height: 564px; background: gray;">
						<div style="background: red; width: 100%; height: 198px;">
						</div>
						<div style="width: 100%; height: 198px;">
						</div>
						<div style="width: 100%; height: 198px;">
						</div>
					</div>
					<div style="padding: 20px; display: flex; justify-content:center; flex-direction:column;">
						<h1>Serviços</h1>
						<p style="font-size: 28px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a ipsum sit amet nisi cursus 
						faucibus. Duis vestibulum vitae leo et mattis. In non lacinia risus. Vestibulum molestie erat vitae
						felis semper suscipit. Sed auctor dignissim dolor a imperdiet. Donec a nunc velit. Maecenas pretium 
						erat ac porta convallis. In sed odio tortor. Morbi ornaremalesuada elit non ultrices. Etiam pulvinar, 
						lectus a imperdiet venenatis, erat velit commodo nibh, at finibus tellus est at leo. 
					</div>
				</div>
				<div style="display: flex; flex-direction: column; padding-bottom: 10%">
					<h1 align="center" style="padding-bottom: 50px;">Parceiros</h2>
					<div style="display: flex; justify-content: space-evenly;">
						<img style="background: gray; height: 200px; width: 200px;">
						<img style="background: gray; height: 200px; width: 200px;">
						<img style="background: gray; height: 200px; width: 200px;">
					</div>
				</div>
				<div style="background: gray; padding-top: 5%; padding-bottom: 5%">
					<h1 align="center">Objetivos da empresa</h1><br>
					<div style="display: flex; justify-content: space-evenly; text-align: -webkit-center;">
						<div><img style="background: gray; height: 200px; width: 200px;"><h3>Segurança Social</h3></div>
						<div><img style="background: gray; height: 200px; width: 200px;"><h3>Melhor Expericência</h3></div>
						<div><img style="background: gray; height: 200px; width: 200px;"><h3>Atender à Expectativas</h3></div>
					</div>
				</div>
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
<<<<<<< HEAD
<<<<<<< HEAD
									<input id="txtNome" type="text" class="form-control" name="txtNome" placeholder="Digite seu nome" style="border-radius:3px;">
=======
									<input id="txtNome" type="text" class="form-control" name="txtNome" placeholder="Digite seu nome" style="background:gray;border-radius:3px;">
>>>>>>> parent of 5041253 (Exclusão de funcionário e mensagem lida/não lida)
=======
									<input id="txtNome" type="text" class="form-control" name="txtNome" style="background:#e6e6e6;border-radius:3px;">
>>>>>>> parent of 4698389 (Front-End PHP - Parte IV)
								</div>
								<div class="form-group">	
									<label for="txtEmail">Email:</label>
<<<<<<< HEAD
<<<<<<< HEAD
									<input id="txtEmail" type="email" class="form-control" name="txtEmail" placeholder="Digite seu email" style="border-radius:3px;">
=======
									<input id="txtEmail" type="email" class="form-control" name="txtEmail" placeholder="Digite seu email" style="background:gray;border-radius:3px;">
>>>>>>> parent of 5041253 (Exclusão de funcionário e mensagem lida/não lida)
=======
									<input id="txtEmail" type="email" class="form-control" name="txtEmail" style="background:#e6e6e6;border-radius:3px;">
>>>>>>> parent of 4698389 (Front-End PHP - Parte IV)
								</div>
								<div class="form-group">
									<label for="txtMsg">Mensagem:</label>
<<<<<<< HEAD
<<<<<<< HEAD
									<textarea id="txtMsg" class="form-control" name="txtMsg" placeholder="Digite sua mensagem" rows="8" style="border-radius:3px;resize:none;"></textarea>
								</div>
								 <button type="submit" class="btn">Enviar</button>
=======
									<textarea id="txtMsg" class="form-control" name="txtMsg" placeholder="Digite sua mensagem" rows="8" style="background:gray;border-radius:3px;resize:none;"></textarea>
								</div>
								 <button type="submit" class="btn" style="background:gray;border-radius:3px;margin-top:5px;">Enviar</button>
>>>>>>> parent of 5041253 (Exclusão de funcionário e mensagem lida/não lida)
=======
									<textarea id="txtMsg" class="form-control" name="txtMsg" rows="8" maxlength="1000" style="background:#e6e6e6;border-radius:3px;resize:none;"></textarea>
								</div>
								 <button type="submit" class="btn" style="background:#e6e6e6;border-radius:3px;margin-top:5px;">Enviar</button>
>>>>>>> parent of 4698389 (Front-End PHP - Parte IV)
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