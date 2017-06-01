--1 Persona
INSERT INTO Persona VALUE (null, 'Luis', 'Fernando', 'Gutierrez', 'Villca', '1111111', 'LP', 'M', '1997-10-12', 'La Paz', 'Bolivia', 'La Paz', 'Universitario', 'Universidad Adventista de Boliva', 'Ingenieria', 'Ingenieria Petrolera', 78829032, null);
INSERT INTO Persona VALUE (null, 'Jhonny', null, 'Gutierrez', null, '2222222', 'LP', 'M', '1997-10-12', 'La Paz', 'Bolivia', 'La Paz', 'Universitario', 'Universidad Adventista de Boliva', 'Ingenieria', 'Ingenieria Petrolera', 78829032, null);
INSERT INTO Persona VALUE (null, 'Rodrigo', 'Alex', 'Paz', 'Santos', '3333333', 'LP', 'M', '1997-10-12', 'La Paz', 'Bolivia', 'La Paz', 'Universitario','Universidad Adventista de Boliva',  'Ingenieria', 'Ingenieria Petrolera', 78829032, null);

-- 2 Union
INSERT INTO Unionn VALUE (null, 'Boliviana');

--3 Rol de Usuario
INSERT INTO RolUsuario VALUE(null, "Coordinador");
INSERT INTO RolUsuario VALUE(null, "Lider");
INSERT INTO RolUsuario VALUE(null, "Colportor");

--4 Categoria
INSERT INTO Categoria VALUE (null, 'Medicina');

-- 2. Usuarios
INSERT INTO Usuario VALUE(null, 1, 1, "Lgutierrez", "1111111", TRUE);
INSERT INTO Usuario VALUE(null, 2, 2, "Jgutierrez", "2222222", TRUE);
INSERT INTO Usuario VALUE(null, 3, 3, "Rpaz", "3333333", TRUE);
