<?php
    for($fila=0;$fila<5;$fila++){
        for($columna=0;$columna<5;$columna++){
            $notas_alumnos[$fila][$columna] = rand(1,10);
            echo $notas_alumnos[$fila][$columna], " ";
        };
        echo "<br />";
    };

    echo "<br />";
    echo "<br />";

    for($v1=0;$v1<5;$v1++){
        $nota_media[$v1] = array_sum($notas_alumnos[$v1])/5;
        echo $nota_media[$v1],"  -->", "estas son las medias de el alumno ", $v1;
        echo "<br />";
    };

    echo "<br />";
    echo "<br />";

    for($may=0;$may<5;$may++){
        for($men=0;$men<5;$men++){
            if($nota_media[$may] > $nota_media[$men]){
                $mayorAlumno = $nota_media[$men];
            };
            if($nota_media[$may] > $nota_media[$men+1]){
                $menorAlumno = $nota_media[$men+1];
            };
        };
    };

    echo "<br />";
    echo "<br />";

    echo "esta es la nota mas alta ", $mayorAlumno;
    echo "<br />";
    echo "esta el la nota mas baja ", $menorAlumno;

?>