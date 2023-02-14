<?php
echo "Ejercicio 1:"."<br />";

for($i=0;$i<5;$i++){
    for($c=0;$c<5;$c++){
        $arrayMulti[$i][$c] = rand(0,10);
        echo $arrayMulti[$i][$c]." ";
    };
    echo "<br />";
};

echo "<br/>";
echo "Ejercicio 2:"."<br />";

$cont = 4;
for($i=0;$i<5;$i++){
    echo $arrayMulti[$i][$i]." ";
    for($c=0;$c<5;$c++){
        echo $arrayMulti[$c][$cont]." ";
        $cont = $cont - 1;
    };
};

echo "<br/>";
echo "Ejercicio 3:"."<br />";

$i = 0;
while($i<5){
    echo $arrayMulti[$i][2]." ";
    $i = $i + 1;
};

do {
    echo $arrayMulti[1][$a]." ";
    $a = $a + 1;
} while ($a < 5);

echo "<br/>";
echo "Ejercicio 4:"."<br />";

for($i=0;$i<5;$i++){
    $arrayMulti[$i][2] = 0;
    $arrayMulti[2][$i] = 0;
    for($c=0;$c<5;$c++){
        echo $arrayMulti[$i][$c]." ";
    };
    echo "<br />";
};

echo "<br/>";
echo "Ejercicio 5:"."<br />";

for($i=0;$i<5;$i++){
    if($arrayMulti[4][$i]%2==1){
        echo "El numero o numeros pares son: ".$arrayMulti[4][$i].", ";
    };
};
echo "<br/>";
echo "Ejercicio 6:"."<br />";
echo "<br/>";
echo "Ejercicio 7:"."<br />";
echo "<br/>";
echo "Ejercicio 8:"."<br />";
echo "<br/>";
echo "Ejercicio 9:"."<br />";
echo "<br/>";
echo "Ejercicio 10:"."<br />";
?>