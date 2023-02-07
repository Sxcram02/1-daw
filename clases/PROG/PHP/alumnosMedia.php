<?php
    echo "<h1>NOTA MEDIA ALUMNOS</h1>";

    $asignaturas = 5;
    $alumnos = 25;

    for($i=0;$i<5;$i++){
        for($j=0;$j<5;$j++){
            $matriz[$i][$j]= rand(1,10);
            $matriz2[$i][$j]= rand(1,10);
        };
    };

    for($fila=0;$fila<5;$fila++){
        for($columna=0;$columna<5;$columna++){
            echo $matriz[$fila][$columna], " ";
        };
        echo "<br />";
    };

    echo "<br />";

    for($fila=0;$fila<5;$fila++){
            $mediaAlumnos[$fila] = (array_sum($matriz[$fila]))/5;
        echo $mediaAlumnos[$fila], " esta es la media del alumno ", $fila;
        echo "<br />";
    };

    echo "<br />";
    echo "La nota mas alta es ", max($mediaAlumnos),"<br />";
    echo "La nota mas baja es ", min($mediaAlumnos);

    echo "<h1>NOTA MEDIA ASIGNATURA</h1>";

    for($fila=0;$fila<5;$fila++){
        for($columna=0;$columna<5;$columna++){
            echo $matriz2[$fila][$columna], " ";
        };
        echo "<br />";
    };

    echo "<br />";

    for($fila=0;$fila<5;$fila++){
        for($columna=0;$columna<5;$columna++){
            $mediaAsignatura[$columna] = (array_sum($matriz2[$columna]))/5;
        };
        echo $mediaAsignatura[$fila], " esta es la media del alumno ", $fila;
        echo "<br />";
    };

    echo "<br />";
    echo "La nota de la asignatura mas alta es de ", max($mediaAsignatura);
    echo "<br />";
    echo "La nota de la asignatura mas baja es de ", min($mediaAsignatura);
?>