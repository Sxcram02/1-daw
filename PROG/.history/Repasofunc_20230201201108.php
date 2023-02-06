
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
echo C2;



// arreglalo

define('C2',C1);
echo C2;

// llegado este punto es importante que se entienda el apartado del alcance de una constante,
//si no lo ves claro pide que se explique en clase.
//fin
?>