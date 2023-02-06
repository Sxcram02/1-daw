<?php
    define('n', 5);
    for($i=0;$i<=n;$i++){
        $vector1[$i] = rand(1,100);
        echo $vector1[$i], "  ";
    };

    for($k=0;$k<=n;$k++){
        $vector2= $vector1[$k];
        array_replace($vector2[$k], $vector1[$k+1]);
        echo $vector2[$k], "  ";
    };
?>