<?php
$pos = 0;
$neg = 0;

for ($i=1;$i<=10;$i++){
    $n=67;
    if ($n>0){
        $pos++;
    }
    elseif ($n<0) {
        $neg++;
    };
};
$nulo = 10 - ($pos + $neg);

echo"positivos", $pos; 

echo'negativos hay ', $neg;

echo 'nulos ', $nulo;

?>