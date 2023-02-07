<?php
    define('n',12);
    /*Se ordena el cetor desplazando cada indice a la derecha */

    echo "vector sin ordenar ";
    for($i=0;$i<=n;$i++){
        $vector1[$i] = rand(1,100);
        echo $vector1[$i], " ";
    };
    
    echo "<br />";
    echo "<br />";

    $varTemp = $vector1[n];

    for($c1=0;$c1<=n;$c1++){
        $vector1[$c1] = $vector1[$c1+1];
    };


    echo "vector ordenado a la izquierda ";

    for($j=0;$j<=n;$j++){
        echo $vector1[$j], " ";
    };


    echo "<br />";
    echo "<br />";

    echo "vector ordenado a la derecha ";
    for($c2=n;$c2<=0;$c--){
        $vector1[$c2] = $vector1[$c2-1];
    };

    $vector1[n] = $varTemp;
    
    for($j=0;$j<=n;$j++){
        echo $vector1[$j], " ";
    };
?>
