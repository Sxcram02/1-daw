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
echo "Matriz Actualizada"."<br/>";
for($i=0;$i<5;$i++){
    for($c=0;$c<5;$c++){
        $arrayMulti[$i][$c] = rand(0,10);
        echo $arrayMulti[$i][$c]." ";
    };
    echo "<br />";
};

echo "<br/>";

echo "Ejercicio 5:"."<br />";
echo "El numero o numeros en la fila 4 impares son: ";
for($i=0;$i<5;$i++){
    if($arrayMulti[3][$i]%2==1){
        echo $arrayMulti[3][$i].", ";
    };
};

echo "<br/>";

echo "Ejercicio 6:"."<br />";

echo "El numero o numeros en una fila aleatoria los pares son: ";
$num = rand(0,5);
for($i=0;$i<5;$i++){
    if($arrayMulti[$num][$i]%2==0){
        echo $arrayMulti[$num][$i].", ";
    };
};

echo "<br/>";

echo "Ejercicio 7:"."<br />";

$sum = 0;
for($i=0;$i<5;$i++){
    $sum = $sum + $arrayMulti[3][$i];
};
echo "La suma total de la fila 4 es de: ".$sum;

echo "<br/>";

echo "Ejercicio 8:"."<br />";

$sumTotal = 0;
for($i=0;$i<5;$i++){
    $sumTotal = $sumTotal + $arrayMulti[$i][0];
};
$media = $sumTotal / 5;
echo "Esta es la media: ".$media;

echo "<br/>";

echo "Ejercicio 9:"."<br />";
echo "El mayor numero de la fila 3 es: ";

for($i=0;$i<5;$i++){
    $mayor = max($arrayMulti[2]);
};
echo $mayor;
echo "<br/>";

echo "Ejercicio 10:"."<br />";

for($i=0;$i<5;$i++){
    for($c=0;$c<5;$c++){
        $mayorArray = max($arrayMulti[$c][$i]);
    };
};

echo "El mayor número de la matriz es: ".$mayorArray;
?>