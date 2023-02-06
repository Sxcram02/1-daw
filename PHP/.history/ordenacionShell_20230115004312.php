<?php
echo "vector desordenado <br />";
for ($i=0;$i<=9;$i++){
    $v[$i]=rand(1,100);
    echo "$v[$i]<br />";
}

$n=9;
$salto=9;
while ($salto!=1){
    $salto=intdiv($salto,2);
    $ordenado=true;
    while ($ordenado){
        $ordenado=false;
        for ($i=0;$i<=$n-$salto;$i++){
            if ($v[$i]>$v[$i+$salto]){
                $aux=$v[$i];
                $v[$i]=$v[$i+$salto];
                $v[$i+$salto]=$aux;
                $ordenado=true;
            };
        };
    };
};
    
     

echo "Vector ordenado <br />";
for ($i=0;$i<=$n;$i++) {
    echo "$v[$i]<br />";
};
?>