<?php
    for($fila=0;$fila<=5;$fila++){
        for($columna=0;$columna<=5;$columna++){
            $notas_alumnos[$fila][$columna] = rand(1,10);
            echo $notas_alumnos[$fila][$columna], " ";
        };
        echo "<br />";
    };
    echo "<br />";
    echo "<br />";

    for($v1=0;$v1<=5;$v1++){
            $nota_media[$v1] = array_sum($notas_alumnos[$v1])/5;
            echo $nota_media[$v1],"  -->", "estas son las medias de el alumno ", $v1;
            echo "<br />";
    };

    echo "<br />";
    echo "<br />";

    for($i=0;$i<=5;$i++){
        if($nota_media[$i] > $nota_media[$i+1]){
            $mayor = $nota_media[$i];
        }elseif($nota_media[$i]<$nota_media[$i+1]){
            $menor = $nota_media[$i];
        }else 
            echo "Error";
    };
    
    echo "<br />";
    echo "<br />";

    echo "esta es la nota mas alta ", $mayor;
    echo "<br />";
    echo "esta el la nota mas baja ", $menor;

?>