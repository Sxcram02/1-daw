
<?php

    for($c=0;$c < 5;$c++){
        for($f=0;$f<5;$c++){
            $matriz[$f][$c] = rand(1,100);
        };
    };

    for($p=0;$p5;$p++){
        for($i=0;$i<5;$i++){
            echo $matriz[$p][$i];
        };
    };

    for($i=0;$i <5;$i++){
        for($p=0;$p <=5;$p++){
            $sum = $matriz[$i][$p] + $matriz[$i][$p+1];
            $media[$i] = $sum/10;
        };
    };

    for($p=0;$p<5;$p++){
        for($i=0;$i<5;$i++){
            echo $media[$p][$i];
        };
    };
?>