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
