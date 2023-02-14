-- SQL1
USE tallerReparaciones;
SELECT CONCAT_WS(" ", mtr.nombre, mtr.precio) material, pro.nombre 
FROM material mtr, proveedor pro 
WHERE mtr.idProveedor=pro.idProveedor;

SELECT CONCAT_WS(" ", mtr.nombre, mtr.precio) material, pro.nombre 
FROM material mtr, proveedor pro 
WHERE mtr.idProveedor=pro.idProveedor ORDER BY mtr.nombre ASC;

SELECT CONCAT_WS(" ", mtr.idMaterial, mtr.nombre) MATERIAL, CONCAT_WS(" ", pro.idProveedor, pro.nombre) PROVEEDOR 
FROM material mtr, proveedor pro
WHERE mtr.idProveedor=pro.idProveedor;

SELECT mtr.nombre, mtr.precio, pro.nombre AS proveedor
FROM material mtr, proveedor pro 
WHERE mtr.idProveedor=pro.idProveedor ORDER BY mtr.precio ASC LIMIT 1;

SELECT mtr.nombre, mtr.precio, pro.nombre AS proveedor 
FROM material mtr, proveedor pro 
WHERE mtr.idProveedor=pro.idProveedor ORDER BY mtr.precio DESC LIMIT 1; 

SELECT mtr.nombre, pro.nombre AS proveedor 
FROM material mtr, proveedor pro 
WHERE mtr.idProveedor=pro.idProveedor AND pro.nombre LIKE "Panda";

SELECT mtr.nombre, mtr.precio, pro.nombre AS proveedor 
FROM material mtr, proveedor pro 
WHERE mtr.idProveedor=pro.idProveedor AND pro.nombre LIKE "BenQ" AND mtr.precio > 150;

-- SQL2

SELECT * 
FROM material mtr 
	INNER JOIN proveedor pro ON mtr.idProveedor=pro.idProveedor
    WHERE pro.nombre LIKE "Lacie" OR pro.nombre LIKE "Intel" OR pro.nombre LIKE "Kyocera";

SELECT * 
FROM material mtr 
	INNER JOIN proveedor pro ON mtr.idProveedor=pro.idProveedor
    WHERE pro.nombre IN ("Lacie","Intel","Kyocera");
    
SELECT mtr.nombre, mtr.precio, pro.nombre AS proveedor
FROM material mtr
INNER JOIN proveedor pro ON mtr.idProveedor=pro.idProveedor
WHERE pro.nombre LIKE "%a";

SELECT mtr.nombre, mtr.precio, pro.nombre AS proveedor
FROM material mtr
INNER JOIN proveedor pro ON mtr.idProveedor=pro.idProveedor
WHERE pro.nombre LIKE "%n%";

SELECT mtr.nombre, mtr.precio, pro.nombre AS proveedor
FROM material mtr
 INNER JOIN proveedor pro ON mtr.idProveedor=pro.idProveedor
WHERE mtr.precio > 100 ORDER BY mtr.precio DESC, mtr.nombre DESC;

SELECT pro.idProveedor, pro.nombre
FROM proveedor pro
	INNER JOIN material mtr ON mtr.idProveedor=pro.idProveedor;
    
USE iespuertasdelcampo;

SELECT CONCAT_WS(" ", alu.nombreA, alu.ap1, alu.ap2) nombreCompleto, grp.nombreGrupo 
FROM alumnado alu 
	INNER JOIN grupo grp ON alu.grupo=grp.id
    INNER JOIN turno trn ON grp.turno=trn.id
WHERE trn.nombreTurno LIKE "Mañana";