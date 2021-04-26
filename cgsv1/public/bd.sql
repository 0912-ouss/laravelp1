create database if not exists gFacture;
use gFacture;

create table facture
(
numF varchar(50) primary key,
objet varchar(50),
dateF varchar(50),
client varchar(50),
tauxTva int,
prixHt float null,
tva float null,
prixTtc float null
);

create table d_facture
(
numDF varchar(50) primary key,
numFfk varchar(50),
designation varchar(50),
unite varchar(50),
qte int,
prixUnite float,
prixTotal float
);

alter table d_facture add foreign key (numFfk) references facture(numF)on delete cascade on update cascade;