<?php
//define dos constantes para cada uno de los metodos que existen
//una llamada PI con valos 3,14 y la otra SALUDO con valor 'BUENOS DÍAS' con el método const
//una llamad PI1 con valor 3,1416 y la otra SALUDO1 con valor 'NO TAN BUENOS', visualizalas 

define('PI', 3.14);
    const saludo = "buenos días";

    define('PI2', 3.1416);
    const saludo2 = "No tan buenos";

    echo "pi= ", PI, " ,pi2 = ", PI2," ,saludo = ", saludo," ,saludo2 = ", saludo2;


//Define una constante númerica que tome como valor el resultado de una expresión númerica y
//una expresión de cadena. ¡qué metodo debes utilizar?
//llamada EXPRESION con el valor de $z*5-2
//la otra llamada LIBRO con la union de DIA , DEL , TERROR. visualizalas

define('libro', "dia"&&"del"&&"terror");
$z = 1;
define('expresion', $z*5-2); 
define('num',expresion + libro);

echo var_dump((int)num);
//Define una constante en la cual sea sensible a mayosculas y minusculas
//¿que ocurre y porqué?. ¿qué ocurre con el nombre de la cosntante en "define"?

define ('minusculas', "minuscula",true);
define('constante', minusculas);


const constan = "VALOR"."juan";
echo var_dump((int)constante);

// arreglalo




// llegado este punto es importante que se entienda el apartado del alcance de una constante,
//si no lo ves claro pide que se explique en clase.
//finEJERCICIO1


/* define cuatro variables de distintos tipos, "edad" numerica entera, "altura" numerica real, "encontrado" lógica,
"saludo" cadena. visualizalas; prueba a cambiar "edad" por la cadena "veinte", observa que ocurre al visualizarla





/* cambia a una de la variable un caracter, por ejemplo de miniscula a mayuscula y visualizala.
que ocurre. es el momento de repasar como se nombra una variable en php 8*/


/* debajo del script anterior define otro script <?php .........?> y untiliza las variables definidas en el primer 
script. ¿que ocurre?,¿cual es el alcance de las variables?, para que funcione pon un trozo de codigo html entre los dos script o uliliza 
las variables en el código html */ 
?>
<?php
//con la configuracion actual que tenemos ¿enteros de 32 o 64 bits?
/*echo "valor minimo = ",PHP_INT_MIN, "<br />";
echo "valor maximo = ",PHP_INT_MAX, "<br />";*/

//COMO ESTA COMPRENDIDO ENTRE -2E-31 Y -2E+31-1 ESTOS VALORES SON DE 32 BITS AUNQUE 
// ACEPTA VALORES DE 64 BITS

//¿que precisión tenemos en los números flotantes?

/*echo "valor minimo = ",PHP_FLOAT_MIN, "<br />";
echo "Valor maximo = ",PHP_FLOAT_MAX, "<br />";*/

// ¿QUE PRECISION EN LA PARTE DECIMA?
/*echo "Numero de digitos = ",PHP_FLOAT_DIG, "<br />";
echo "Valor de precisión de los numero en coma flotante = ",PHP_FLOAT_EPSILON, "<br />";*/
//observa los resutados

echo $valor_maximo = PHP_FLOAT_MAX;
echo $valor_minimo = PHP_FLOAT_MIN;
echo "valor maximo =", settype($valor_maximo, "integer");
echo "valor minimo =", settype($valor_minimo, "integer");

//tanto en enteros como reales se puede utilizar el caracter subrayado en tro los dígitos
// 23_45 o 23_45,78, comprueba si esto modifica los resultados de una operación aritmetica 


$suma = 23_45 OR 23_45 * 78;
echo "total ", $suma, "no modifica la operacion dado que es lo mismo ponerf 2345 que 23_45";


?>
<?php
//define dos variables string, cada una de una forma diferente. comprueba diferencias
$cadena1 = "etsa es una forma";
$cadena2 = 'esta es otra forma';


//la barra invertida tiene un significado y comportamiento muy especifico
echo "Hola, 'JUAN', hace tiempo que no te veo.<br />\n";  // realiza las modificaciones para que sea correcto en las dos
echo 'Let\"s run\"'; 

$num=30;
$nombre="Pedro"; 
//muestra $num con un mensaje entre comillas y $nombre con un mensaje entre apostrofe
//comprueba lo que sucede. solucionalo

echo '$num y $nombre, esta es la prueba';
echo "$num y $nombre, 'esta es la prueba'";

//las secuencias {$variable} y {{$variable}} permiten hacer que la visualización de mensajes con variables en ""
//se corresponda con la realidad, por ejemplo permitiendo utilizar el plural añadiando la "s" o "es" .
// inventate un ejemplo para practicarlo.

echo "mañana vermemos {cadena1}s.<br />";

/* la " " permite utlilizar secuencias de escape, cosa que no permite ' '.
tomando como referencia la tabla del libro comprueba su funcionmiento con ejemplos, visualiza 5 emoticonos  */

$frase="en la casa hay palomas"; //visualiza "hay"



// apartir de la version php 8 los cambios automaticos de tipos de cadena a numero sean simplificado
//observa von detenimiento el ejemplo del libro

echo '1 + "1" = ',(1 + "1"),'<br />';
echo '1 + "1.5" = ',(1 + "1.5"),'<br />';
echo '1 + ".5" = ',(1 + ".5"),'<br />';
echo '1 + "1.5E2" = ',(1 + "1.5E2"),'<br />';
echo '1 + "1e3" = ',(1 + "1e3"),'<br />'; 
echo '1 + "-5" = ',(1 + "-5"),'<br />'; 
echo '1 + " \t\n\r 5  " = ',(1 + " \t\n\r 5  "),'<br />'; 

// intenta determinar el resultado sin ejecutarlo.

/*  echo '20 + 12b5 = ',(1 + "1abc"),'<br />'; determina si es posiple hacer lo
echo '20 + "zx67" = ',(20 + "zxc1"),'<br />';  determina si es posible 
*/



?>