DROP DATABASE IF EXISTS  siscolportor;
CREATE DATABASE siscolportor;
USE siscolportor;

--1 Persona
CREATE TABLE Persona(
	idPersona int not null auto_increment primary key,
	primerNombre varchar(30) not null,
	segundoNombre varchar(30)  null,
	primerApellido varchar(30) not null,
	segundoApellido varchar(30)  null,
	ci varchar(15) unique not null,
  lugarExpedicionCI varchar(4) not null,
	sexo enum('F','M') not null,
	fechaNac date not null,
  lugarNac varchar(60) not null,
  pais varchar(50) not null,
  ciudad varchar(50) not null,
  gradoAcademico varchar(50) not null,
  universidad varchar(50)  not null,
  facultad varchar(50) not null,
  carrera varchar(50) not null,
  celular int not null,
  foto text null
);

--2 Union
CREATE TABLE Unionn(
	idUnion int not null auto_increment primary key,
	nombre varchar(60) not null
);

--3 Rol Usuario
CREATE TABLE RolUsuario(
    idRol int unsigned not null auto_increment primary key,
    nombreRol varchar(40) not null
);

--4 Categoria
CREATE TABLE Categoria(
	idCategoria int not null auto_increment primary key,
	nombre varchar(40) not null
);

--5 Tipo Venta
CREATE TABLE TipoVenta(
	idTipoVenta int not null auto_increment primary key,
	nombre varchar(25) not null
);

--6 Cliente
CREATE TABLE Cliente(
	idCliente int not null auto_increment primary key,
	primerNombre varchar(30) not null,
	segundoNombre varchar(30)  null,
	primerApellido varchar(30) not null,
	segundoApellido varchar(30)  null,
	direccion varchar(60) not null,
	celular int not null,
	observaciones varchar(100) null
);

--7 Tipo Gasto Campaña
CREATE TABLE tipo(
	idTipo int not null auto_increment primary key,
	nombre varchar(30) not null
);

--8 Tipo de Campaña
CREATE TABLE TipoCampana(
	idTipoCampana int not null auto_increment primary key,
	nombre varchar(30) not null
);

--9 Mision
CREATE TABLE Mision(
	idMision int not null auto_increment primary key,
	idUnion int not null,
	nombre varchar(25) not null,
	FOREIGN KEY (idUnion) REFERENCES Unionn (idUnion) ON UPDATE CASCADE ON DELETE CASCADE
);
--FOREIGN KEY(idRol)REFERENCES RolUsuario (idRol) ON UPDATE CASCADE ON DELETE CASCADE,

--10 Zona
CREATE TABLE Zona(
	idZona int not null auto_increment primary key,
	nombre varchar(100) not null,
	nroViviendas int not null,
	croquis text null
);

--11 Deposito
CREATE TABLE Deposito(
	idDeposito int not null auto_increment primary key,
	idPersona int not null,
	codigoDeposito int not null,
	monto float(5,2) not null,
	FOREIGN KEY (idPersona) REFERENCES Persona (idPersona) ON UPDATE CASCADE ON DELETE CASCADE
);

--12 Libro
CREATE TABLE Libro(
	idLibro int not null auto_increment primary key,
	idCategoria int not null,
	titulo varchar(60) not null,
	resumen text  not null,
	precioOficial float(5,2) not null,
	precioVenta float(5,2) not null,
	imagen text null,
	FOREIGN KEY (idCategoria) REFERENCES Categoria (idCategoria) ON UPDATE CASCADE ON DELETE CASCADE
);

--13 Pagos
CREATE TABLE Pagos(
	idPago int not null auto_increment primary key,
	idVenta int not null,
	fecha date not null,
	monto float(5,2) not null,
	FOREIGN KEY (idVenta) REFERENCES Venta (idVenta) ON UPDATE CASCADE ON DELETE CASCADE
);

--15 Grupo Persona
CREATE TABLE GrupoPersona(
	idGrupoPersona int not null auto_increment primary key,
	idGrupo int not null,
	idPersona int not null,
	FOREIGN KEY (idGrupo) REFERENCES Grupo (idGrupo) ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY (idPersona) REFERENCES Persona (idPersona) ON UPDATE CASCADE ON DELETE CASCADE
);

--16 Gasto Campaña
CREATE TABLE GastoCampana(
	idGastoCampana int not null auto_increment primary key,
	idTipo int not null,
	idGrupo int not null,
	monto float(5,2) not null,
	FOREIGN KEY (idTipo) REFERENCES Tipo (idTipo) ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY (idGrupo) REFERENCES Grupo (idGrupo) ON UPDATE CASCADE ON DELETE CASCADE
);

--17 Usuario
CREATE TABLE Usuario(
    idUsuario int unsigned not null auto_increment primary key,
    idRol int not null,
    idPersona int not null,
    usuario varchar(25) unique not null,
    contrasena text not null,
    estado bool not null,
    FOREIGN KEY(idRol)REFERENCES RolUsuario (idRol) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY(idPersona)REFERENCES Persona (idPersona) ON UPDATE CASCADE ON DELETE CASCADE
);

--18 Campaña
CREATE TABLE Campana(
	idCampana int not null auto_increment primary key,
	idMision int not null,
	idTipoCampana int not null,
	idPersona int not null,
	nombre varchar(60) not null,
	fechaInicio date not null,
	fechaFinal date not null,
	gestion int(4) not null,
	estado bool not null,
	FOREIGN KEY (idMision) REFERENCES Mision (idMision) ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY (idTipoCampana) REFERENCES TipoCampana (idTipoCampana) ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY (idPersona) REFERENCES Persona (idPersona) ON UPDATE CASCADE ON DELETE CASCADE
);

--14 Grupo
CREATE TABLE Grupo(
	idGrupo int not null auto_increment primary key,
	idZona int not null,
	idCampana int not null,
	nombre varchar(30) not null,
	direccion varchar(100) not null,
	descripcion varchar(100) null,
	FOREIGN KEY (idZona) REFERENCES Zona (idZona) ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY (idCampana) REFERENCES Campana (idCampana) ON UPDATE CASCADE ON DELETE CASCADE
);

--19 Asignacion Libro
CREATE TABLE AsignacionLibro(
	idAsignacionLibro int not null auto_increment primary key,
	idPersona int not null,
	idLibro int not null,
	fecha date not null,
	cantidad int not null,
	FOREIGN KEY (idPersona) REFERENCES Persona (idPersona) ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY (idLibro) REFERENCES Libro (idLibro) ON UPDATE CASCADE ON DELETE CASCADE
);

--20 Devolucion
	CREATE TABLE Devolucion(
		idDevolucion int not null auto_increment primary key,
		idPersona int not null,
		idLibro int not null,
		cantidad int not null,
		fecha date not null,
		FOREIGN KEY (idPersona) REFERENCES Persona (idPersona) ON UPDATE CASCADE ON DELETE CASCADE,
		FOREIGN KEY (idLibro) REFERENCES Libro (idLibro) ON UPDATE CASCADE ON DELETE CASCADE
	);

	--21 	Compras
		CREATE TABLE Compras(
			idCompra int not null auto_increment primary key,
			idPersona int not null,
			idLibro int not null,
			cantidad int not null,
			fecha date not null,
			FOREIGN KEY (idPersona) REFERENCES Persona (idPersona) ON UPDATE CASCADE ON DELETE CASCADE,
			FOREIGN KEY (idLibro) REFERENCES Libro (idLibro) ON UPDATE CASCADE ON DELETE CASCADE
		);

		--22 Venta
		CREATE TABLE Venta(
			idVenta int not null auto_increment primary key,
			idTipoVenta int not null,
			idLibro int not null,
			idCliente int not null,
			fecha date not null,
			FOREIGN KEY (idTipoVenta) REFERENCES TipoVenta (idTipoVenta) ON UPDATE CASCADE ON DELETE CASCADE,
			FOREIGN KEY (idLibro) REFERENCES Libro (idLibro) ON UPDATE CASCADE ON DELETE CASCADE,
			FOREIGN KEY (idCliente) REFERENCES Cliente (idCliente) ON UPDATE CASCADE ON DELETE CASCADE
		);
