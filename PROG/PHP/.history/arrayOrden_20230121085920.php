<?php
    define('n', 5);
    for($i=0;$i<=n;$i++){
        $vector1[$i] = rand(1,100);
        echo $vector1[$i], "  ";
    };

    echo "Este es el vector ordenador 1 a la derecha";

    for($k=0;$k<=n;$k++){
        array_replace($vector1, $vector1[$k+1]);
        echo $vector1[$k], "  ";
    };
?>