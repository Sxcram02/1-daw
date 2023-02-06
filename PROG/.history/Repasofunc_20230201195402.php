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


define('CONSTANTE4', CONSTANTE,TRUE);
define('CONSTANTE5', CONSTANTE);

echo " 3. ",CONSTANTE4;
echo "<br />";
?>