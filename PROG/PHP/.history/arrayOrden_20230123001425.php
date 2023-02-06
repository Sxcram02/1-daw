<?php
    echo "Este es el vector sin ordenar", "<br />";

    define('n', 11);
    for($i=0;$i<=n;$i++){
        $vector1[$i] = rand(1,100);
        echo $vector1[$i], "  ";
    };

    echo "<br />", "Este es el vector ordenador 1 a la derecha", "<br />";

    for($k=0;$k<=n-1;$k++){
        $vector2 = $vector1[$k];
        $j = $k;
            for($i=$k+1;$i<=n;$i++){
                $j = $i;
                $vector2 = $vector1[$j];
            };
        $vector1[$j]= $vector1[$k];
        $vector1[$k] = $vector2;
    };
    for($c=0;$c<=n;$c++){
        echo $vector1[$c], " ";
    };

    echo "<br />", "este es el vector ordenado hacia la izquierda", "<br />";

    for($k=0;$k<=n+1;$k++){
        $vector2 = $vector1[$k];
        $j = $k;
            for($i=$k-1;$i<=n;$i++){
                $j = $i;
                $vector2 = $vector1[$j];
            };
        $vector1[$j]= $vector1[$k];
        $vector1[$k] = $vector2;
    };
    for($c=0;$c<=n;$c++){
        echo $vector1[$c], " ";
    };
?>