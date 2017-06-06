-- Para el Login
SELECT u.idUsuario, r.idRol,  r.nombrerol, u.usuario, u.contrasena, u.estado, p.primerNombre, p.segundoNombre, p.primerApellido, p.segundoApellido, p.celular
FROM usuario u , rolusuario r, persona p
WHERE u.idRol = r.idRol
AND u.idPersona = p.idPersona
AND u.usuario = 'Rpaz';

-- Para buscar el CI
SELECT ci
FROM persona
WHERE ci = 444444;

-- Obtener el ultimo ID
SELECT MAX(idPersona) as  ID
FROM persona;

-- Listar persona
SELECT p.idPersona, p.primerNombre, p.segundoNombre, p.primerApellido, p.segundoApellido, p.ci, p.lugarExpedicionCI, p.sexo, p.fechaNac, p.lugarNac, p.pais, p.ciudad, p.gradoAcademico, p.universidad, p.facultad, p.carrera, p.celular
FROM persona p, usuario u
WHERE u.idPersona = p.idPersona
AND u.idRol = 2;

-- Contar cuantos Lideres existen
SELECT count(p.idPersona) as N
FROM persona p, usuario u
WHERE u.idPersona = p.idPersona
AND u.idRol = 2;
