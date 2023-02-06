<?php
    
    $adivinanza = "skill";
    // $respuesta = "udkel";

    $palabra = str_split($adivinanza);
    $palabra2 = array("s", "k", "u", "q" , "w");


    $colores = array("gris", "gris", "gris", "gris", "gris");

    

    if(count($palabra2) == 5){
        for($i= 0;$i< 5; $i++){
            if($palabra[$i] == $palabra2[$i]){
                $colores[$i] = "verde";
            }
            elseif(in_array($palabra2[$i], $palabra)){
               $colores[$i] = "amarillo";
            }
            elseif($palabra2[$i] != $palabra[$i]){
                $colores[$i] = "azul";
            }
            else{
                echo "Error";
            }
        }   
    }
    else {
        error_reporting(E_ERROR|E_WARNING|E_PARSE|E_NOTICE);
    }
    for($i= 0;$i< 5; $i++){
        echo $palabra2[$i]," = ", $palabra[$i];
    }
?>
