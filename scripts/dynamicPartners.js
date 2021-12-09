var bg = document.getElementById("partner1");
var saga = document.getElementById("partner2");
var dell = document.getElementById("partner3");

var title = document.getElementById("titlePartner");
var desc = document.getElementById("descPartner");

bg.addEventListener("mouseover",bgPop);
bg.addEventListener("mouseleave",bgUnpop);
saga.addEventListener("mouseover",sagaPop);
saga.addEventListener("mouseleave",sagaUnpop);
dell.addEventListener("mouseover",dellPop);
dell.addEventListener("mouseleave",dellUnpop);

function restoreTexts()
{
	title.innerHTML = ""
	desc.innerHTML = "Passe o mouse sobre os ícones dos parceiros para conhecê-los!"
}


function bgPop()
{
	bg.style.filter = ""
	
	title.innerHTML = "Etec Professor Basilides de Godoy"
	desc.innerHTML = "Fornecendo cursos técnicos completamente gratuitos e de muita qualidade, a Etec Professor Basilides de Godoy formou os profissionais responsáveis pela Golden Company. Hoje, temos o prazer de possuirmos uma parceria com a instuição. ";
}
function bgUnpop()
{
	bg.style.filter = "grayscale(100%)"
	
	restoreTexts()
}

function sagaPop()
{
	saga.style.filter = ""
	
	title.innerHTML = "Saga"
	desc.innerHTML = "Somos, com muito orgulho, parceiros da maior escola de games, modelagem 3D e animação do Brasil, reconhecida internacionalmente."
}
function sagaUnpop()
{
	saga.style.filter = "grayscale(100%)"
	
	restoreTexts()
}

function dellPop()
{
	dell.style.filter = ""
	
	title.innerHTML = "Dell"
	desc.innerHTML = "Também somos ligados a Dell, uma das maiores produtoras de laptops, desktops, notebooks e outros acessórios digitais. A Golden Company acompanhada pelo poder de fazer mais."
}
function dellUnpop()
{
	dell.style.filter = "grayscale(100%)"
	restoreTexts()
}