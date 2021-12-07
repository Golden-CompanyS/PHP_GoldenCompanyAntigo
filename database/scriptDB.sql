drop database if exists dbGoldenCompanySite;

create database dbGoldenCompanySite;

use dbGoldenCompanySite;

grant all privileges on dbGoldenCompanySite.* to "main"@"localhost" with grant option;

create table tbCliMsg(
msgID int primary key auto_increment,
cliNome varchar(50) not null,
cliEmail varchar(50) not null,
cliMsg varchar(250) not null,
msgLida bool default 0
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
    vfuncCarg varchar(30), 
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

        insert into tbendereco (CEP, lograd, cidID, estUF)
            values (vCEP, vlograd, (select cidID from tbcidade where cidNome = vcidNome), vestUF);
    end if;

    insert into tbfunc (funcCPF, funcNome, funcCarg, numEnd, funcSenha, CEP) values 
    (vfuncCPF, vfuncNome, vfuncCarg, vnumEnd, vfuncSenha,
    (select CEP from tbendereco where CEP = vCEP));
end if;
end;
$$

call insertFunc("824.734.740-79", "Larissa Miranda Sonoda", "Programadora Android", 232, "05376-140", "São Paulo", "SP", "Rua do Morro","12345");

create view seeFuncs as
select f.funcCPF as "CPF", 	f.funcNome as "Nome", f.funcCarg as "Cargo", en.lograd as "Logradouro", f.numEnd as "Número",
c.cidNome as "Cidade", es.estUF as "Estado", en.CEP as "CEP", f.funcSenha as "Senha" 
from (((tbfunc as f
	inner join tbendereco as en on f.CEP = en.CEP)
    inner join tbcidade as c on en.cidID = c.cidID)
    inner join tbestado as es on en.estUF = es.estUF);
    
select * from seeFuncs;
select Nome from seeFuncs where (CPF = '824.734.740-79');
select * from seeFuncs where(CPF = '777.777.777-77')

insert into tbclimsg values (default, "Wellington Cidade", "welcity@etec.gov", "Muito bom esse site aí mano.", default);