<?php
    for($fila=0;$fila<=5;$fila++){
        for($columna=0;$columna<=5;$columna++){
            $notas_alumnos[$fila][$columna] = rand(1,10);
            echo $notas_alumnos[$fila][$columna], " ";
        };
        echo "<br />";
    };

    for($v1=0;$v1<=5;$v1++){
            $nota_media[$v1] = array_sum($notas_alumnos[$v1])/5;
            echo $nota_media[$v1], " ", "estas son las medias", "<br />", "de", $v1;
    };

?>