<?php

define('Pi', 3.14);
define('Pi2', 3.1416);
const saludo = "buenos dias";
const saludo2 = "no tan buenos";

$z=1;
define('exp', $z*5-2);
define('libro', "dia"&&"del"&&"terror");

define('num',exp&&libro);
echo num;

echo "<br />";

const CONSTANTE = "valor de constante";
const CONSTANTE2 = "constante";
const CONSTANTE3 = CONSTANTE;
echo "constante sin mayusculas ",CONSTANTE2;
echo "constante con mayusculas ",CONSTANTE3;
?>