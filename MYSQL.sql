
create database votacao;
use votacao;

create table administradores (
CPF int(20) primary key auto_increment not null,
senha int (11) primary key auto_increment not null);

create table linguagem (
nome char(20) not null,
codigo int(10) primary key auto_increment not null);

create table votante (
nome char(20) not null,
email int (20) primary key auto_increment not null,
senha int(20) primary key auto_increment not null,
repetirsenha int(20) not null);




















