-- 1 Persona
  -- Coordinador
INSERT INTO Persona VALUE (null, 'Luis', 'Fernando', 'Gutierrez', 'Villca', '1111111', 'LP', 'M', '1997-10-12', 'La Paz', 'Bolivia', 'La Paz', 'Universitario', 'Universidad Adventista de Boliva', 'Ingenieria', 'Ingenieria Petrolera', 78829032, null);
  -- Lider
INSERT INTO Persona VALUE (null, 'Jhonny', null, 'Gutierrez', null, '2222222', 'LP', 'M', '1997-10-12', 'La Paz', 'Bolivia', 'La Paz', 'Universitario', 'Universidad Adventista de Boliva', 'Ingenieria', 'Ingenieria Petrolera', 78829032, null);
INSERT INTO Persona VALUE (null, 'Rdrigo', 'Luis', 'Poma', 'Mollo', '5555555', 'LP', 'M', '1997-10-12', 'La Paz', 'Uruguay', 'Mar del Sur', 'Universitario', 'Universidad Adventista de Boliva', 'Ingenieria', 'Ingenieria Petrolera', 78829032, null);
INSERT INTO Persona VALUE (null, 'Gustavo', null, 'Cerezo', null, '6666666-1f', 'OR', 'M', '1997-10-12', 'La Paz', 'Colombia', 'Bogoto', 'Universitario', 'Universidad Adventista de Boliva', 'Ingenieria', 'Ingenieria Petrolera', 78829032, null);
INSERT INTO Persona VALUE (null, 'Saul', 'Salomon', 'Mamani', 'Choque', '7777777', 'LP', 'M', '1997-10-12', 'La Paz', 'Peru', 'La Plata', 'Universitario', 'Universidad Adventista de Boliva', 'Ingenieria', 'Ingenieria Petrolera', 78829032, null);
  -- Coolportor
INSERT INTO Persona VALUE (null, 'Rodrigo', 'Alex', 'Paz', 'Santos', '3333333', 'LP', 'M', '1997-10-12', 'La Paz', 'Bolivia', 'La Paz', 'Universitario','Universidad Adventista de Boliva',  'Ingenieria', 'Ingenieria Petrolera', 78829032, null);
INSERT INTO Persona VALUE (null, 'Jhonatan', 'Elias', 'Esuar', 'Santos', '4444444', 'SC', 'M', '1997-10-12', 'La Paz', 'Bolivia', 'La Paz', 'Universitario','Universidad Adventista de Boliva',  'Ingenieria', 'Ingenieria Petrolera', 78829032, null);

-- 2 Union
INSERT INTO Unionn VALUE (null, 'Boliviana');

-- 3 Rol de Usuario
INSERT INTO RolUsuario VALUE(null, "Coordinador");
INSERT INTO RolUsuario VALUE(null, "Lider");
INSERT INTO RolUsuario VALUE(null, "Colportor");

-- 4 Categoria
INSERT INTO Categoria VALUE (null, 'Medicina');

-- 2. Usuarios
  -- Coordinador
INSERT INTO Usuario VALUE(null, 1, 1, "Lgutierrez", "1111111", TRUE);
  -- Lider
INSERT INTO Usuario VALUE(null, 2, 2, "Jgutierrez", "2222222", TRUE);
INSERT INTO Usuario VALUE(null, 2, 3, "Rpoma", "5555555", TRUE);
INSERT INTO Usuario VALUE(null, 2, 4, "Gcerezo", "6666666", FALSE);
INSERT INTO Usuario VALUE(null, 2, 5, "Smamani", "7777777", FALSE);
  -- Coolportor
INSERT INTO Usuario VALUE(null, 3, 6, "jhonny", "4444444", TRUE);
INSERT INTO Usuario VALUE(null, 3, 7, "Rpaz", "3333333", TRUE);
