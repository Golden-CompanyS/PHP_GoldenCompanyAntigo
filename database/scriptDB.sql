drop database if exists dbGoldenCompanySite;

create database dbGoldenCompanySite;

use dbGoldenCompanySite;

grant all privileges on dbGoldenCompanySite.* to "main"@"localhost" with grant option;

create table tbCliMsg(
msgID int primary key auto_increment,
cliNome varchar(50) not null,
cliEmail varchar(50) not null,
cliMsg varchar(1000) not null,
msgLida bool default(0)
);

create table tbCidade(
cidID int primary key auto_increment,
cidNome varchar(50)
);

create table tbEstado(
estUF char(2) primary key
);

create table tbEndereco(
CEP char(9) primary key,
lograd varchar(150) not null unique,
cidID int not null,
estUF char(2) not null,
foreign key (cidID) references tbCidade (cidID),
foreign key (estUF) references tbEstado (estUF)
);

create table tbFunc(
funcCPF char(14) primary key,
funcNome varchar(50) not null,
funcSocial varchar(50),
funcCarg varchar(50) not null,
numEnd int not null,
funcSenha char(60) not null,
CEP char(9) not null,
foreign key (CEP) references tbEndereco (CEP)
);

insert into tbestado values
('RO'),
('AC'),
('AM'),
('RR'),
('PA'),
('AP'),
('TO'),
('MA'),
('PI'),
('CE'),
('RN'),
('PB'),
('PE'),
('AL'),
('SE'),
('BA'),
('MG'),
('ES'),
('RJ'),
('SP'),
('PR'),
('SC'),
('RS'),
('MS'),
('MT'),
('GO'),
('DF');

delimiter $$
create procedure insertFunc(
	vfuncCPF char(14),
	vfuncNome varchar(50),
    vfuncSocial varchar(50),
    vfuncCarg varchar(50), 
    vnumEnd int,
    vCEP char(9),
    vcidNome varchar(50),
    vestUF char(2),
	vlograd varchar(150),
    vfuncSenha char(60))
begin
if not exists (select funcCPF from tbfunc where funcCPF = vfuncCPF) then
    if not exists (select CEP from tbendereco where CEP = vCEP) then
        if not exists (select estUF from tbestado where estUF = vestUF) then
            insert into tbestado (estUF) values (vestUF);
        end if;
        if not exists(select cidNome from tbCidade where cidNome = vcidNome) then
            insert into tbcidade (cidNome) values (vcidNome);
        end if;
		
        if not exists (select lograd from tbendereco where (vlograd = lograd)) then
			insert into tbendereco (CEP, lograd, cidID, estUF)
				values (vCEP, vlograd, (select cidID from tbcidade where cidNome = vcidNome), vestUF);
		end if;
    end if;

    insert into tbfunc (funcCPF, funcNome, funcSocial, funcCarg, numEnd, funcSenha, CEP) values 
    (vfuncCPF, vfuncNome, vfuncSocial, vfuncCarg, vnumEnd, vfuncSenha,
    (select CEP from tbendereco where CEP = vCEP));
end if;
end;
$$

call insertFunc("824.734.740-79", "Larissa Miranda Sonoda", null, "Programadora Android", 80, "05382-060", "São Paulo", "SP", "Rua Mario de Oliveira Dick","$2y$10$5e7K8zOuFuhz4Cg4Im1IM.2GLE8ohlWL3zcM2CmrTifp9TJ1gqIHC");
call insertFunc("076.998.148-86", "Mateus da Silva Taveira", null, "Programador Android", 222, "05133-005", "São Paulo", "SP", "Rua Joaquim Oliveira Freitas","$2y$10$5e7K8zOuFuhz4Cg4Im1IM.2GLE8ohlWL3zcM2CmrTifp9TJ1gqIHC");
call insertFunc("457.168.488-69", "Gustavo Pereira Castro", null, "Programador Web e Analista de Banco", 135, "05376-140", "São Paulo", "SP", "Avenida Diogo de Azevedo","$2y$10$5e7K8zOuFuhz4Cg4Im1IM.2GLE8ohlWL3zcM2CmrTifp9TJ1gqIHC");
call insertFunc("611.085.148-55", "Wesley Spiandorim de Jesus", null, "Programador Web e Designer", 232, "01237-050", "São Paulo", "SP", "Praça Sílvio de Almeida","$2y$10$5e7K8zOuFuhz4Cg4Im1IM.2GLE8ohlWL3zcM2CmrTifp9TJ1gqIHC");
call insertFunc("906.288.318-46", "Maria Eduarda Rodrigues B. R. dos S.", "Erin", "Programador ASP.NET", 1759, "04101-903", "São Paulo", "SP", "Rua Vergueiro","$2y$10$5e7K8zOuFuhz4Cg4Im1IM.2GLE8ohlWL3zcM2CmrTifp9TJ1gqIHC");
call insertFunc("123.769.968-13", "Guilherme Lemes Porto", null, "Analista de sistemas e infraestrutura", 111, "02203-090", "São Paulo", "SP", "Travessa Antônio Arenales","$2y$10$5e7K8zOuFuhz4Cg4Im1IM.2GLE8ohlWL3zcM2CmrTifp9TJ1gqIHC");

create view seeFuncs as
select f.funcCPF as "CPF", 	f.funcNome as "Nome", f.funcSocial as "Nome social", f.funcCarg as "Cargo", en.lograd as "Logradouro",
f.numEnd as "Número", c.cidNome as "Cidade", es.estUF as "Estado", en.CEP as "CEP", f.funcSenha as "Senha" 
from (((tbfunc as f
	inner join tbendereco as en on f.CEP = en.CEP)
    inner join tbcidade as c on en.cidID = c.cidID)
    inner join tbestado as es on en.estUF = es.estUF);
    
select * from seeFuncs;
select Nome from seeFuncs where (CPF = '824.734.740-79');
select * from seeFuncs where(CPF = '777.777.777-77')

insert into tbclimsg values (default, "Alessandro Bomfim - Saga", "saga.digital@gmail.com", "Boa tarde! Nós da Saga digital, escola de programação, modelagem 3D e animação com reconhecimento nacional e internacional, gostaríamos de propor uma parceria. Para mais detalhes e agendamento de uma reunião apropriada, favor retornar no email.", true);
insert into tbclimsg values (default, "Wellington Cidade", "welcity@etec.sp.gov.br", "Muito bom esse site gente, fico muito feliz pelo sucesso de vocês.", true);
insert into tbclimsg values (default, "Alícia Costa - Dell", "dell.brasil@dell.com", "Prezados, boa noite. Represento a Dell no Brasil, e estamos estonteantemente impressionados com o vosso percurso como start-up. Sua empresa está elegível para se tornar certificada internacionalmente pela Dell.", true);

update tbclimsg set msgLida = false where msgID = 1;