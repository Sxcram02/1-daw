<?php
    define('num', rand(1,10));
    for($i=0;$i<=10;$i++){
        $array1[$i] = num;
        echo $array1[$i];
    };

    for($i=10;$i<=1;$i--){
        for($j=0;$j<=10;$j++){
            $array2[$i] = [$j];
        };
        echo $array2[$i];
    };
?>