<?php
    echo "Este es el vector sin ordenar", "<br />";

    define('n', 5);
    for($i=0;$i<=n;$i++){
        $vector1[$i] = rand(1,100);
        echo $vector1[$i], "  ";
    };

    echo "<br />", "Este es el vector ordenador 1 a la derecha", "<br />";

    for($k=0;$k<=n;$k++){
        $i = $k;
        echo array_replace($vector1[$i], $vector1), "  ";
    };

?>