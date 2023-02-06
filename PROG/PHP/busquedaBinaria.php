<?php
$vector=array(1,2,3,4,5);
$n=5;
$izq=0;
$de=4;
$ce=intdiv($izq+$de,2);
while ($vector[$ce]!=$n and $izq<$de) {
    if ($vector[$ce]<$n) {
        $izq=$ce+1;
    }
        else {
        $de=$ce-1;
        };
        $ce=intdiv($izq+$de,2);    
    };
    if ($vector[$ce]==$n){
        echo "existe";
    } else {
        echo "no existe";
    };
?>