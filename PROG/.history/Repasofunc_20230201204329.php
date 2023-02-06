
<?php
//define dos constantes para cada uno de los metodos que existen
//una llamada PI con valos 3,14 y la otra SALUDO con valor 'BUENOS DÍAS' con el método const
//una llamad PI1 con valor 3,1416 y la otra SALUDO1 con valor 'NO TAN BUENOS', visualizalas 

define('Pi', 3.14);
define('Pi2', 3.1416);
const saludo = "buenos dias";
const saludo2 = "no tan buenos";


//Define una constante númerica que tome como valor el resultado de una epresión númerica y
//una expresión de cadena. ¡qué metodo debes utilizar?
//llamada EXPRESION con el valor de $z*5-2
//la otra llamada LIBRO con la union de DIA , DEL , TERROR. visualizalas

$z=1;
define('exp', $z*5-2);
define('libro', "dia"&&"del"&&"terror");

define('num',exp+libro);
echo var_dump(num);


//Define una constante en la cual sea sensible a mayosculas y minusculas
//¿que ocurre y porqué?. ¿qué ocurre con el nombre de la cosntante en "define"?

const C1 = "C1";
define('C2', C1,TRUE);
//echo C2;



// arreglalo

define('C3',C1);
echo C3;

// llegado este punto es importante que se entienda el apartado del alcance de una constante,
//si no lo ves claro pide que se explique en clase.
//fin


/* define cuatro variables de distintos tipos, "edad" numerica entera, "altura" numerica real, "encontrado" lógica,
"saludo" cadena. visualizalas; prueba a cambiar "edad" por la cadena "veinte", observa que ocurre al visualizarla*/

$edad = 20;
$altura = 1.8;
$encontrado = TRUE;
$Saludo = "buenos dias";
 
$edad = "veinte";
echo $edad;

/* cambia a una de la variable un caracter, por ejemplo de miniscula a mayuscula y visualizala.
que ocurre. es el momento de repasar como se nombra una variable en php 8*/

echo $Saludo;


/* debajo del script anterior define otro script <?php .........?> y untiliza las variables definidas en el primer 
script. ¿que ocurre?,¿cual es el alcance de las variables?, para que funcione pon un trozo de codigo html entre los dos script o uliliza 
las variables en el código html */ 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <h1>$resultado que se cálculo por la $edad y la $altura</h1>
    </form>
</body>
</html>
<?php
    $edad= 20;
    $altura = 1.9;

    echo $edad + $altura = $resultado;

?>