<?php
define('n',50);
$contador = 0;


for($i=0;$i<=n;$i++){
    $primitiva[]=0;  
}
for($c=0;$c<1000000;$c++){
    $tirada = rand(1,49);
    $primitiva[$tirada]++;
}

foreach($primitiva as $clave => $valor){
    $contador = $contador + $valor;
};
echo "total de tiradas ", $contador, "<br />"; 

echo "la posicion que mas ha salido ",array_search(max($primitiva),$primitiva);
echo "la posicion que menos ha salido", array_search(min($primitiva),$primitiva);
?>