Create DataBase AgenciaEnfermeria;

Use AgenciaEnfermeria;

Create Table Medico
(
IDMedico int unique AUTO_INCREMENT,
NombreMed varchar (20) not null,
ApellidoPaterno varchar(10) not null,
ApellidoMaterno varchar(10) not null,
RFC varchar(9) unique not null,
Telefono int not null,
constraint PK1 PRIMARY KEY(IDMedico)
)ENGINE=INNODB;


Create Table Clinica
(
IDClinica int unique AUTO_INCREMENT,
NombreClinica varchar (35) not null,
Direccion varchar(45) not null,
Telefono int not null,
IDMedico int not null,
constraint PK1 PRIMARY KEY(IDClinica),
constraint FK1 FOREIGN KEY(IDMedico) references Medico(IDMedico)
)ENGINE=INNODB;


Create Table Enfermeras
(
IDEnfermera int unique AUTO_INCREMENT,
Nombre varchar (15) not null,
ApellidoPaterno varchar(10) not null,
ApellidoMaterno varchar(10) not null,
RFC varchar(9) unique not null,
Domicilio varchar (30) not null,
Telefono int not null,
Edad char(2) not null,
TipoEnfermera int not null,
constraint PK1 PRIMARY KEY(IDEnfermera)
)ENGINE=INNODB;


Create Table Servicio
(
IDServicio int unique AUTO_INCREMENT,
NombreServ varchar (40) not null,
Costo int not null,
TipoServicio int not null,
IDEnfermeria int not null,
constraint PK1 PRIMARY KEY(IDServicio),
constraint FK1 FOREIGN KEY(IDEnfermeria) references Enfermeras(IDEnfermera)
)ENGINE=INNODB;



Create Table Cliente
(
IDCliente int unique AUTO_INCREMENT,
NombreCliente varchar (20) not null,
ApellidoPaterno varchar(10) not null,
ApellidoMaterno varchar(10) not null,
TipoCliente int not null,
Email varchar(50) not null,
Direccion varchar (45) not null,
Telefono int not null,
IDServicio int not null,
ClinicaProcedencia int not null,
constraint PK1 PRIMARY KEY(IDCliente),
constraint FK1 FOREIGN KEY(IDServicio) references Servicio(IDServicio),
constraint FK2 FOREIGN KEY(ClinicaProcedencia) references Clinica(ClinicaProcedencia)
)ENGINE=INNODB;
