# EJERCICIO 5 CONSULTAS

> * Muestra una columna en la que aparezca el nombre completo de los fortines con las  tres primeras letras en mayúsculas, de aquellos fortines que sí tienen foso. 
* Muestra tres columnas, una con el número del DNI, otra únicamente con la letra del DNI y otra con el nombre completo de aquellos vigilantes nacidos antes de 1950.
* Muestra el nombre de los fortines en mayúscula, la altura redondeada y el diámetro con dos números decimales de los fortines ordenados de la Z a la A.
* Muestra el nombre completo de aquellos vigilantes cuyo DNI acabe por la letra E.
* Muestra el nombre completo y el email de aquellos vigilantes que tengan outlook como correo.
* Muestra el DNI de los vigilantes que tienen un sueldo menor a (la cantidad que tu escojas) de euros.
* Muestra el nombre del fortín y el DNI de su vigilante, del Fortín de Benzú.
* Muestra aquellos nombres de vigilantes que empiecen por T.
* Muestra la información completa de 20 vigilantes a partir de la fila 20 inclusive.
* Muestra el nombre completo de los vigilantes (en el siguiente orden: primer apellido, segundo apellido, nombre) ordenado alfabéticamente.

```sql
    USE fuertesNeomedievales;

    show tables;

    SELECT UPPER(SUBSTRING(nombreFortin, 11, 3)) AS nombreCompleto 
    FROM fortin
    WHERE foso="Sí";

    SELECT SUBSTRING(dni, 1, 8) AS nDni, SUBSTRING(dni, 8, 9) AS letra, CONCAT_WS(" ", nombreVig, ap1, ap2) AS nombreCompleto
    FROM vigilante
    WHERE fechaNacimiento BETWEEN "1900-01-01" AND "1950-01-01";

    SELECT UPPER(nombreFortin) AS nombre, ROUND(altura) AS aprox, TRUNCATE(diametro, 2) AS diametro
    FROM fortin
    WHERE nombreFortin ORDER BY nombreFortin ASC;

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

    SELECT CONCAT_WS(" ", ap1, ap2, nombreVig) AS nombreCompleto
    FROM vigilante 
    WHERE nombreVig ORDER BY nombreVig ASC;
```

# EJECUCION 3

![EJECUCION](./img/Screenshot%20from%202022-11-24%2010-16-06.png)