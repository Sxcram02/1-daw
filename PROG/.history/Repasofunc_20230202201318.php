
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
echo "<br />";
echo "<br />";

?>



<?php
/* define cuatro variables de distintos tipos, "edad" numerica entera, "altura" numerica real, "encontrado" lógica,
"saludo" cadena. visualizalas; prueba a cambiar "edad" por la cadena "veinte", observa que ocurre al visualizarla*/

$edad = 20;
$altura = 1.8;
$encontrado = TRUE;
$Saludo = "buenos dias";
$resultado = $edad + $altura;
echo $resultado;
echo "<br />";

$edad = "veinte";
echo $edad;

echo "<br />";
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
        <h1><?php echo "$resultado que se cálculo por la $edad y la $altura";?></h1>
    </form>
</body>
</html>
<?php
    $edad= 25;
    $altura = 1.9;

?>

<?php
// las llamados variables por referencias pueden ser útiles en algunos casos
// se explicó con detenimiento en clase, si no se entiende correctamente lo volvemos a explicar
// veamos como se pueden utilizar
//definimos una var $num
$num=50;
//definimos una var de cadena con el nombre de la var anterior
$edad = 'num';
//cuando visualizamos $num
echo 'valor de $num = ',$num, '<br />';
//cuando visualizamos $edad
echo 'valor de $edad = ', $edad, '<br />';
// si queremos utilizar una variable por referencia tendemos que hacer que dos var distintas señalen la misma zona de memoria
//esto lo podemos hacer utilizando doble $
echo 'valor de $$edad = ', $$edad, '<br />';

// lo que ocurre es que '$edad' se sustituye por 'num', quedando '$num', con lo cual 
// lo que hace es visualizar $num que es 50
/* teniendo encuenta esto realiza algo similar con '$saldo' una cantidad numerica
y '$cuenta' de tipo cadena.*/
// o otra que se ocurra 

$saldo = 200;
$cuenta = "Marcos";

$disponible = "saldo";
$usuario = "cuenta";

echo "la cuenta de ", $$usuario, " tiene el saldo de ", $$disponible;

echo "<br />";
echo "<br />";

?>

<?php
//con la configuracion actual que tenemos ¿enteros de 32 o 64 bits?
echo "valor minimo = ",PHP_INT_MIN, "<br />";
echo "valor maximo = ",PHP_INT_MAX, "<br />";


//¿que precisión tenemos en los números flotantes?

echo "valor minimo = ",PHP_FLOAT_MIN, "<br />";
echo "Valor maximo = ",PHP_FLOAT_MAX, "<br />";

// ¿QUE PRECISION EN LA PARTE DECIMA?
echo "Numero de digitos = ",PHP_FLOAT_DIG, "<br />";
echo "Valor de precisión de los numero en coma flotante = ",PHP_FLOAT_EPSILON, "<br />";
//observa los resutados

//tanto en enteros como reales se puede utilizar el caracter subrayado en tro los dígitos
// 23_45 o 23_45,78, comprueba si esto modifica los resultados de una operación aritmetica 


?>

<?php
//define dos variables string, cada una de una forma diferente. comprueba diferencias

$cadena = "Antonio";
$cadena2 = 'Mandarin';

//la barra invertida tiene un significado y comportamiento muy especifico
//echo "Hola, "JUAN", hace tiempo que no te veo<br />"; 
// realiza las modificaciones para que sea correcto en las dos
//echo 'Let's run''; 

echo "Hola, 'JUAN', hace tiempo que no te veo.<br />\n";
echo 'Let\'s run\'';

$num=30;
$nombre="Pedro"; 

echo "esta es mi edad, $num";
echo 'este es mi nombre, $nombre';

echo "este es mi nombre, $nombre', y mi edada,' $num";
//muestra $num con un mensaje entre comillas y $nombre con un mensaje entre apostrofe
//comprueba lo que sucede. solucionalo



//las secuencias {$variable} y {{$variable}} permiten hacer que la visualización de mensajes con variables en ""
//se corresponda con la realidad, por ejemplo permitiendo utilizar el plural añadiando la "s" o "es" .
// inventate un ejemplo para practicarlo.

echo "A esa famila se le llaman los, {$nombre}s";

/* la " " permite utlilizar secuencias de escape, cosa que no permite ' '.
tomando como referencia la tabla del libro comprueba su funcionmiento con ejemplos, visualiza 5 emoticonos  */

$frase="en la casa \110\101\131 palomas"; //visualiza "hay"

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

Echo '20 + 12b5 = ',(1 + "1abc"),'<br />'; //determina si es posiple hacer lo
echo '20 + "zx67" = ',(20 + "zxc1"),'<br />';  //determina si es posible 


// EL PRIMERO DA COMO RESULTADO 145 = 2 --> FALSE
// EL SEGUNDO DA COMO RESULTADO 87 = 21 --> FALSE


?>