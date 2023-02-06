<?php
    
    $adivinanza = "skill";
    $respuesta = "squll";

    $palabra = str_split($adivinanza);
    $palabra2 = str_split($respuesta);


    $colores = array("gris", "gris", "gris", "gris", "gris");
    $verde = 0;
    $amarillo = 0;
    $azul = 0;

    

    if(count($palabra2) == 5){
        for($i= 0;$i< 5; $i++){
            if($palabra[$i] == $palabra2[$i]){
                $colores[$i] = "verde";
                $verde = $verde + 1;
            }
            elseif(in_array($palabra2[$i], $palabra)){
               $colores[$i] = "amarillo";
               $amarillo = $amarillo + 1;
            }
            elseif($palabra2[$i] != $palabra[$i]){
                $colores[$i] = "azul";
                $azul = $azul + 1;
            }
            else{
                echo "Error";
            }
        }   
    }
    else {
        error_reporting(E_ERROR|E_WARNING|E_PARSE|E_NOTICE);
    }

    echo $verde;
    echo $amarilo;
    echo $azul;
?>
