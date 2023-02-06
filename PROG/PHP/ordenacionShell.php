<?php
$n=9;
$salto=9;
while($salto!=1){
    $salto = intdiv($salto,2);
    $ordenado = true;
    while($ordenado){
        $ordenado = false;
        for ($i=0;$i<=$n-$salto;$i++){
            if ($v[$i]>$v[$i + $salto]){
                $aux = $v[$i];
                $v[$i] = $v[$i+$salto];
            }
        }
    }
}
?>