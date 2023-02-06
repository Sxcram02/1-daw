<?php

define('Pi', 3.14);
define('Pi2', 3.1416);
const saludo = "buenos dias";
const saludo2 = "no tan buenos";

$z=1;
define('exp', $z*5-2);
define('libro', "dia"&&"del"&&"terror");

define('num',exp+libro);
echo var_dump(num);

echo "<br />";
echo "<br />";

const CONSTANTE = "valor de constante";
const CONSTANTE2 = "constante";
const CONSTANTE3 = CONSTANTE;
echo " 1. constante sin mayusculas = ",CONSTANTE2;
echo " 2. constante con mayusculas = ",CONSTANTE3;

define('CONSTANTE4', CONSTANTE);
define("CONSTANTE5", "constante4");

echo CONSTANTE4;
echo CONSTANTE5;
echo "<br />";
?>