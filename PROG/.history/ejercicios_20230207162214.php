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

    if($num%2==0){
        $array3[$i] = $num;
    };
    $num = $num + 1;
    echo $array3[$i]. " = $i indice \n"."<br />";
?>