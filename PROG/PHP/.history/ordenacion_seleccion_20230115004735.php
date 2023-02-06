<?php

for ($i=0;$i<=4;$i++){
    $v[$i]=rand(1,100);
    echo "$v[$i]<br />";
}

$n=4;
for ($i=0;$i<=$n-1;$i++){
    $k=$i;

    $aux=$v[$i];
    for ($j=$i+1;$j<=$n;$j++){
  
        if ($v[$j]<$aux){
            $k=$j;
            $aux=$v[$j];
  
        };
    };
    $v[$k]=$v[$i];
    $v[$i]=$aux;
};
echo "Vector ordenado <br />";
for ($i=0;$i<=4;$i++) {
    echo "$v[$i]<br />";
};
?>
