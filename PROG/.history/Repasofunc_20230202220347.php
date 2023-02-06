
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

    echo "<br />";
    echo "<br />";
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

echo "<br />";
echo "<br />";

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

echo "<br />";
echo "<br />";


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

echo "<br />";
echo "<br />";

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

echo "este es mi nombre, $nombre', y mi edad,' $num";
//muestra $num con un mensaje entre comillas y $nombre con un mensaje entre apostrofe
//comprueba lo que sucede. solucionalo

echo "<br />";
echo "<br />";


//las secuencias {$variable} y {{$variable}} permiten hacer que la visualización de mensajes con variables en ""
//se corresponda con la realidad, por ejemplo permitiendo utilizar el plural añadiando la "s" o "es" .
// inventate un ejemplo para practicarlo.

echo "A esa famila se le llaman los, {$nombre}s";

/* la " " permite utlilizar secuencias de escape, cosa que no permite ' '.
tomando como referencia la tabla del libro comprueba su funcionmiento con ejemplos, visualiza 5 emoticonos  */

$frase="en la casa \110\101\131 palomas"; //visualiza "hay"
echo "los emojis,  \"&#9193;, \"&#9195;, \"&#9196;";
// apartir de la version php 8 los cambios automaticos de tipos de cadena a numero sean simplificado
//observa von detenimiento el ejemplo del libro

echo "<br />";
echo "<br />";

echo '1 + "1" = ',(1 + "1"),'<br />';
echo '1 + "1.5" = ',(1 + "1.5"),'<br />';
echo '1 + ".5" = ',(1 + ".5"),'<br />';
echo '1 + "1.5E2" = ',(1 + "1.5E2"),'<br />';
echo '1 + "1e3" = ',(1 + "1e3"),'<br />'; 
echo '1 + "-5" = ',(1 + "-5"),'<br />'; 
echo '1 + " \t\n\r 5  " = ',(1 + " \t\n\r 5  "),'<br />'; 

// intenta determinar el resultado sin ejecutarlo.

echo '20 + 12b5 = ',(1 + "1abc"),'<br />'; //determina si es posiple hacer lo
echo '20 + 1zxc = ',(20 +  "1zxc"),'<br />'; //determina si es posible 


// EL PRIMERO DA COMO RESULTADO 2 
// EL SEGUNDO DABA RESULTADO PORQUE PHP INGONARÁ LA CONVERSIÓN AL PRINCIPIO Y AL FINAL, 
//SIN EMBARGO, SI CAMBIAMOS EL ORDEN SI LO ACEPTA.


?>

<?php
/* para el operador de asignación vemos solo algunas cosas que te pueden chocar, ya lo has utilizados en infinidad de veces*/
/* recuerda que es destructiva, se hace con el "=",*/


    $edad=45;
    $mes=($enero=1) + 1; //que valor toma $mes TOMA EL VALOR 2

    $a=$b=$c=$d=1000; //si visualizamoas $a y $b que mostrara MOSTRARA EL VALOR 1000


    echo "<br />";
    echo "<br />";

// el operador de asignación por referencia tiene diferencias con el anterior
//pero el simbolo es el mismo
//que representa el siguiente código
 $pueblo="Casatejada";
 $nativo=&$pueblo; //visualizalos y busca la explicación

 ECHO $nativo;

 echo "<br />";
 echo "<br />";

 $pueblo="Torrecilla";
 ECHO $nativo;

 // EN EL PRIMER CASO PODEMOS OBSERVAR QUE &$PUEBLO HACE REFERENCIA A CASATEJADA,
 // MIENTRAS QUE EL SEGUNDO HACE REFERENCIA A TORRECILLA DADA LA NUEVA ASIGNACIÓN
 //visualiza los dos, explicas lo que está pasando

 echo "<br />";
 echo "<br />";

 //paralos operadores básicos no debes tener ningún problema, define dos variables 
 //y realiza los operadores hasta el "contrario". siguiendo el orden del libro
    $numero1 = 15;
    $numero2 = 20;

    echo $numero1 + $numero2;

    echo "<br />";

    echo $numero1 - $numero2;

    echo "<br />";

    echo $numero1 * $numero2;

    echo "<br />";

    echo $numero1 ** $numero2;

    echo "<br />";

    echo $numero1 % $numero2;

    echo "<br />";

    echo -$numero1;

 //Sin embargo para los pos, pre, incremento, decremento hayque tener
 //un poco de cuidado

 echo "<br />";
 echo "<br />";

 $a=10;
 $b=5;
 $c=5 + --$a; 
 //visualizado y comprende lo ocurrido, visualiza $a
 echo $a;

 $d=$b++ - 5; //Idem a lo anterior. realiza por tu cuenta algunas pruebas

    $e = $c++ *$a;

    echo "<br />";

    echo $e;

 //para los operadores de comparación las unicas novedades son "===" y "!=="
 // dando dos valores a variables numericas y con echo practica todos los operadores de comparación
    
 echo "<br />";


    echo "cadena 1"== "cadena 1";
    echo "1" === 1;
    echo "1" === "1";
    echo "1" !== 1;
    echo "1" != 1;

 //hay un detalle importante en el cambio de tipos automáticos de php entre numeros 
 //y cadenas, que supone un cambio radical en php 8 respecto de las versiones anteriores
 //escribe un trozo de código para su comprobación
 




 //para los opderadores lógicos solo el"xor" os puede resultar desconocido
 // debeis conocer las tables de valores que teneís en el libro.
 //define dos variables lógicas, da las un valor y con echo prueba los distintos operadores
 //cambiando los valores iniciales de las variables

    echo "<br />";
    echo "<br />";

    echo true or true;
    echo true and false;
    echo false??true;
    echo !true;
    echo true xor false;

 // el operador ternario es el equivalente a if (condicion) ... instr1 ...else inst2
 $a=10;
 $b2=5;
 ($a>0||$b2==5)?$z='mayor A':$z='Mayor B';

 echo "<br />";

 echo $z;
 //tienes bastanter ej de principio de curso donde los if ... else... los puedes sustituir por
 //este operador, coloca aquí uno
 
 
?>
<?php
// para las sentencias if, if ....else, if... elseif...else, while, do ... while, for y switch
//ya hemos realizado muchos ej, todos los de pseint los debeis convertir 
// en php
// para la utilización de CONTINUE, realiza un programa que imprima los 
//numeros pares menores que 20

echo "<br />";

$num = 0;
for($i=0;$i<=100;$i++){
    $num[$i]=$num + 1;
    if($num[$i] / 2 == 0){
        continue;
    };
    echo $num, "par \n";
};

// para la utilización de BREAK realiza un programa que que genere números comprendidos entre 0 y 10,
// con los número introducidos que los sume, cuando genere un 0 (cero), que se salga y visualice la suma




// la expresion nueva para php es match, en muchos casos se puede sustituir por switch
// por ejemplo si queremos mostrar el día de una semana

$dia_semana=rand(1,7);
echo match ($dia_semana) {
    1 => 'Lunes',
    2 => 'Martes',
    3 => 'Miercoles',
    4 => 'Jueves',
    5 => 'Viernes',
    6 => 'Sábado',
    7 => 'Domingo',
    default => 'Dia erroneo'
};

// igual que la introducimos dentro de un echo, la podemos asignar a una varable
// realiza por tu cuenta para los meses del año



// hay dos intrucciones para incluir un archivo externo en un script php
// estudialo y ponte un ejemplo. Si no lo ves claro pide explicación

// un script lo podemos interrumpir y salirse de la aplicacion con EXIT y DIE

// pon una sentencia que salga de esta aplicacion antes de finalizar 


// rompe aquí la aplicación utilizando un IF, si se cumplo lo rompe, sino continua.



echo '<br /> este es el fin de la aplicacion';
?>