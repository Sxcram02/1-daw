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

//ACTUALIZAMOS LA MATRIZ DE NUEVO PARA EVITAR CONFLICTO CON LA ANTERIOR MODIFICACIÓN.
for($i=0;$i<5;$i++){
    for($c=0;$c<5;$c++){
        $arrayMulti[$i][$c] = rand(0,10);
        echo $arrayMulti[$i][$c]." ";
    };
    echo "<br />";
};

echo "<br/>";
echo "Ejercicio 5:"."<br />";

for($i=0;$i<5;$i++){
    if($arrayMulti[4][$i]%2==1){
        echo "El numero o numeros impares son: ".$arrayMulti[4][$i].", ";
    };
};

echo "<br/>";
echo "Ejercicio 6:"."<br />";

$num = rand(0,5);
for($i=0;$i<5;$i++){
    if($arrayMulti[$num][$i]%2==0){
        echo "El numero o numeros pares son: ".$arrayMulti[$num][$i].", ";
    };
};

echo "<br/>";
echo "Ejercicio 7:"."<br />";

$sum = 0;
for($i=0;$i<5;$i++){
    $sum = $sum + $arrayMulti[4][$i];
};
echo "La suma total es de: ".$sum;

echo "<br/>";
echo "Ejercicio 8:"."<br />";

$sumTotal = 0;
for($i=0;$i<5;$i++){
    $sum = $sum + $arrayMulti[$i][0];
};
$media = $sum / 5;
echo "Esta es la media: ".$media;

echo "<br/>";
echo "Ejercicio 9:"."<br />";

$cont = 0;
for($i=0;$i<5;$i++){
    if($arrayMulti[3][$i] > $arrayMulti[3][$cont]){
        echo "El mayor numero de la fila 3 es: ".$arrayMulti[3][$i];
    };
    $cont = $cont + 1;
};

echo "<br/>";
echo "Ejercicio 10:"."<br />";

$cont1 = 0;
$cont2 = 0;

for($i=0;$i<5;$i++){
    for($c=0;$c<5;$c++){
        if($arrayMulti[$i][$c] > $arrayMulti[$cont1][$cont2]){
            echo $arrayMulti[$i][$c]." "."Este es el numero mayor";
        };
        $cont1 = $cont1 + 1;
        $cont2 = $cont2 + 1;
    };
};
?>