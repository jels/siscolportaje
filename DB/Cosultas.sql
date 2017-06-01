-- Para el Login
SELECT u.idUsuario, r.idRol,  r.nombrerol, u.usuario, u.contrasena, u.estado
FROM usuario u , rolusuario r
WHERE u.idRol = r.idRol
AND u.usuario = 'Rpaz';

-- Para buscar el CI
SELECT ci
FROM persona
WHERE ci = 444444;
