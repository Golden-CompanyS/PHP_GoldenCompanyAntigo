var lety = document.getElementById("lety");
var lari = document.getElementById("lari");
var gus = document.getElementById("gus");
var tav = document.getElementById("tav");
var eri = document.getElementById("eri");
var wes = document.getElementById("wes");
var gui = document.getElementById("gui");

var desc = document.getElementById("descFunc");

lety.addEventListener("mouseover",hoverLety);
lety.addEventListener("mouseleave",leaveLety);
lari.addEventListener("mouseover",hoverLari);
lari.addEventListener("mouseleave",leaveLari);
gus.addEventListener("mouseover",hoverGus);
gus.addEventListener("mouseleave",leaveGus);
tav.addEventListener("mouseover",hoverTav);
tav.addEventListener("mouseleave",leaveTav);
eri.addEventListener("mouseover",hoverEri);
eri.addEventListener("mouseleave",leaveEri);
wes.addEventListener("mouseover",hoverWes);
wes.addEventListener("mouseleave",leaveWes);
gui.addEventListener("mouseover",hoverGui);
gui.addEventListener("mouseleave",leaveGui);

function res()
{
	desc.innerHTML = "Deslize em uma das fotos de perfil para visualizar a descrição de cada membro"
}

function hoverLety()
{
	lety.style.opacity="100%";
	desc.innerHTML = "Letícia C. Resina - Presidente, gerente e programadora ASP.NET";
}
function leaveLety()
{
	lety.style.opacity="70%";
	res();
}

function hoverLari()
{
	lari.style.opacity="100%";
	desc.innerHTML = "Larisa M. Sonoda - Programadora Java e XML";
}
function leaveLari()
{
	lari.style.opacity="70%";
	res();
}

function hoverGus()
{
	gus.style.opacity="100%";
	desc.innerHTML = "Gustavo P. Castro - Programador Web e Analista de Banco de Dados";
}
function leaveGus()
{
	gus.style.opacity="70%";
	res();
}

function hoverTav()
{
	tav.style.opacity="100%";
	desc.innerHTML = "Mateus Da S. Taveira - Programador Java e XML";
}
function leaveTav()
{
	tav.style.opacity="70%";
	res();
}

function hoverEri()
{
	eri.style.opacity="100%";
	desc.innerHTML = "Maria Eduarda Rodrigues B. R. Dos Santos - Programadora ASP.NET";
}
function leaveEri()
{
	eri.style.opacity="70%";
	res();
}

function hoverWes()
{
	wes.style.opacity="100%";
	desc.innerHTML = "Wesley S. de Jesus - Programador Web e Designer";
}
function leaveWes()
{
	wes.style.opacity="70%";
	res();
}

function hoverGui()
{
	gui.style.opacity="100%";
	desc.innerHTML = "Guilherme Lemes Porto - Analista de Sistemas e Infraestrutura";
}
function leaveGui()
{
	gui.style.opacity="70%";
	res();
}