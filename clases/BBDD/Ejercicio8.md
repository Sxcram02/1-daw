# CONSULTAS KAHOOT
    
```sql
    USE mundialQatar;
    
    SELECT * FROM futbolista WHERE dorsal= 1;
    
    SELECT email FROM futbolista WHERE altura, peso ORDER BY altura DESC AND peso ORDER BY peso ASC;
    
    SELECT codigoFIFA FROM seleccion WHERE nombre LIKE "costa rica" LIMIT 1;
    
    SELECT nombre FROM futbolista WHERE dorsal= 5 AND seleccion LIKE "ENG";

    SELECT confederación FROM seleccion WHERE nombre LIKE "%ama%";
    
    SELECT CONCAT_WS(" ", nombre, apellido1, apellido2) AS nombreCompleto, altura  FROM futbolista WHERE fechaNacimiento ORDER BY fechaNacimiento ASC LIMIT 1;


    SELECT * FROM futbolista WHERE fechaNacimiento BETWEEN "2001-05-01" AND "2001-05-31";


    SELECT DISTINCT seleccion FROM futbolista;

    SELECT apellido1 FROM futbolista WHERE apellido2 IS NULL AND altura= 173 AND peso=62;


    SELECT * FROM futbolista WHERE nombre IN ("Román", "Martín", "Oliver", "Levi", "Rémi", "José");


    SELECT dorsal FROM futbolista WHERE pierna LIKE "Zurdo" AND altura= 162 AND peso=84 AND posicion LIKE "Portero";
```