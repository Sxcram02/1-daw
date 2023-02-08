<?php
    //EJERCICIO 1

    for($i=0;$i<10;$i++){
        $array1[$i] = 0;
        echo $array1[$i]." = $i indice \n";
        echo "<br />";
    };

    // EJERCICIO 2
    echo "<br />";
    
    $num = 0;

    for($j=0;$j<10;$j++){
        $array2[$j] = $num;
        $num = $num + 1;
    };

    echo "<br />";

    $array2 = array_reverse($array2,false);
    foreach($array2 as $clave => $valor){
        echo "{$valor}={$clave} indice \n";
        echo "<br />";
    };

    // EJERCICIO 3
    echo "<br />";
    $num = 0;
    $cont = 0;
    $array3 = array();
    for($i=0;$i<20;$i++){
        if($num%2==0){
            $pares = $num;
            $array3[$i] = $pares;
        };
        echo $array3[$i]." \n";
        $num = $num + 1;
    };

    echo "<br />";

    $num = 0;
    $array4 = array();
    for($c=0;$c<20;$c++){
        if($num%2==1){
            $impares = $num;
            $array4[$c] = $impares;
        }
        echo $array4[$c]." \n";
        $num = $num + 1;
    };

    //EJERCICIO 4
    echo "<br />";

    $array5 = array_merge($array3,$array4);
    $contador = count($array5);
    sort($array5);
    for($i=0;$i<=$contador;$i++){
        echo $array5[$i]." ";
    };  
    echo $contador. "valores";

    // EJERCICIO 5
    echo "<br />";
    $array6 = shuffle($array5);
    for($i=0;$i<=$contador;$i++){
        echo $array5[$i]." ";
    };  

    // EJERCICIO 6
    echo "<br />";
    $array7 = array_sum($array5);
    $media = $suma/$contador;

    //EJERCICIO 7
    echo "<br />";
    echo max($array5)." maximo ";
    echo min($array5)." minimo ";

?>