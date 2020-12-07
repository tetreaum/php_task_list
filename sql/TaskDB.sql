DROP DATABASE IF EXISTS taskdb;

CREATE DATABASE taskdb;

USE taskdb;

CREATE TABLE Task (
	TaskId int primary key auto_increment,
    UpdateTime datetime default current_timestamp,
    TaskDesc varchar(200),
    PrioId int not null,
    NameAssigned varchar(100),
    DueDate datetime default current_timestamp,
    StatusId int not null,
    foreign key (PrioId) references Priority(PrioId),
    foreign key (StatusId) references TaskStatus(StatusId)
);

CREATE TABLE Priority (
	PrioId int primary key auto_increment,
    PrioType varchar(10)
);

CREATE TABLE TaskStatus (
	StatusId int primary key auto_increment,
    StatusType varchar(10)
);