<?php
    for($i=0;$i<=10;$i++){
        $array1[$i] = $i;
        echo $array1[$i], " ";
        continue;
        echo "<br />";
        for($c=10;$c<=0;$c--){
            echo $array1[$c], " ";
        };
    };

?>