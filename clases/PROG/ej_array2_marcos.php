<?php

    $n = 18;
    while($n!=1){
        if($n%2==0){
            $n = $n / 2;
            $array[$n];
        }elseif($n%2==1){
            $n = ($n * 3) +1;
            $array[$n];
        };
        continue;
    };

    foreach($array as $claveValor){
        echo $array[$claveValor];
    };

    for($i=21;$i<=-1;$i--){
        for($j=0;$j<=21;$j++){
            $array2 = $array[0];
            if($array[$i]<$array[$i-1]){
                $array[$j] = $array[$i-1];
            }elseif($array[$i]>$array[$i+1]){
                $array[$j] = $array[$i-1];
            };
        };
    };
    
    for($j=0;$j<=21;$j++){
        echo $array[$j], " \n";
    };


    define('num',rand(0,22));
    while(num!=22){
        echo "eleemento buscado", $array[num];
    };


?>