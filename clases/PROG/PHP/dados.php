<?php
$num = array(
    0 => rand(1,9),
    1 => rand(1,9),
    2 => rand(1,9),
    3 => rand(1,9),
    4 => rand(1,9),
);

for($i=0;$i<=4;$i++){
    if($num[$i]==array_reverse($num)){
        echo "hola";
    }; 

};
?>