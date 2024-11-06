create table Data(
	ID_Data integer primary key autoincrement,
	Correo varchar(255) not null,
	Contrasenia varchar(255) not null
);

create table Alumno(
	ID_Alumno integer primary key,
	Nombre varchar(255) not null,
	Apellido_pat varchar(255),
	Apellido_mat varchar(255),
	Carrera varchar(255),
	Num_control varchar(10),
	Telefono varchar(8),
	ID_Data integer references Data(ID_Data)
);

create table Docente(
	ID_Docente integer primary key,
	Nombre varchar(255) not null,
	Apellido_pat varchar(255),
	Apellido_mat varchar(255),
	Materia varchar(255),
	Num_control varchar(10),
	Telefono varchar(8),
	ID_Data integer references Data(ID_Data)
);

create table Administrativo(
	ID_Administrativo integer primary key,
	Nombre varchar(255) not null,
	Apellido_pat varchar(255),
	Apellido_mat varchar(255),
	Carrera varchar(255),
	Num_control varchar(10),
	Telefono varchar(8),
	ID_Data integer references Data(ID_Data)
);

create table Carrera(
	ID_Carrera integer primary key,
	Nombre varchar(255) not null,
	Codigo_carrera varchar(255),
	ID_Administrativo integer references Administrativo(ID_Administrativo)
);

create table Materia(
	ID_Materia integer primary key,
	Nombre varchar(255) not null,
	Codigo_materia varchar(255),
	ID_Carrera integer references Carrera(ID_Carrera),
	ID_Docente integer references Docente(ID_Docente)
);

create table Horario(
	ID_Horario integer primary key,
	Duracion text(10),
	ID_Carrera integer references Carrera(ID_Carrera),
	ID_Materia integer references Materia(ID_Materia)
);