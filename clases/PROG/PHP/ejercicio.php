<?php
// EJERCICIO 1

for($i=0;$i<10;$i++){
    $array1[$i] = 0;
    echo $array1[$i]." ";
};

// EJERCICIO 2
$cont = 0;

for($j=10;$j=1;$j--){
    $array2[$j] = $cont + 1;
    echo $array2[$j]." ";
};

// EJERCICIO 3
$pares = 0;

for($c=0;$c<=20;$c++){
    $pares = $pares + 1;
    if($pares%2==0){
        $array3[$c] = $pares;
    }elseif($impares%2==1){
        $array3[$c] = $pares;
    };
    echo $array3[$c]." ";
};

?>