<?php
    define('n',10);
    $i = 0; 

    while($i<=n){
        $vector[$i] = rand(1,100);
        echo $vector[$i], " ";
        $i++;
    };

    for($j=n;$j<=1;$j--){
        $varTemp = $vector[n];
        $vector[$j] = $vector[$j-1];
        array_push($vector, $varTemp);
        echo $vector[$j], " ";
    };

    do {
        $varTemp = $vector[0];
        $vector[$i] = $vector[$i-1];
        array_push($vector,$varTemp);
        echo $vector[$i], " ";
        $i++;
    } while ($i <= 10);
?>