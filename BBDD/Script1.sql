 USE fuertesNeomedievales;

    show tables;

    SELECT UPPER(SUBSTRING(nombreFortin, 11, 3)) AS nombreCompleto 
    FROM fortin
    WHERE foso="Sí";

    SELECT SUBSTRING(dni, 1, 8) AS nDni, SUBSTRING(dni, 8, 9) AS letra, CONCAT_WS(" ", nombreVig, ap1, ap2) AS nombreCompleto
    FROM vigilante
    WHERE fechaNacimiento BETWEEN "1900-01-01" AND "1950-01-01" ;

    SELECT UPPER(nombreFortin) AS nombre, ROUND(altura) AS aprox, TRUNCATE(diametro, 2) AS diametro
    FROM fortin
    WHERE nombreFortin ORDER BY nombreFortin DESC;

    SELECT CONCAT_WS(" ", nombreVig, ap1, ap2) AS nombreCompleto 
    FROM vigilante
    WHERE dni LIKE "%E";

    SELECT CONCAT_WS(" ", nombreVig, ap1, ap2) AS nombreCompleto, email  
    FROM vigilante
    WHERE email LIKE "%outlook%";

    SELECT dni 
    FROM vigilante
    WHERE sueldo < 900;

    SELECT nombreFortin, vigilante_dni 
    FROM fortin 
    WHERE nombreFortin LIKE "Fortín de Benzú";
    
    SELECT nombreVig
    FROM vigilante
    WHERE nombreVig LIKE "T%";

    SELECT CONCAT_WS(" ", ap1, ap2, nombreVig)
    FROM vigilante 
    WHERE nombreVig ORDER BY nombreVig ASC;