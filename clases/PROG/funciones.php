<?php
$lista = array(
    'dias' => $lista2=array('lunes','martes','miercoles','jueves','viernes','sabado','domingo'),
    'semanas' => $lista3=array(1,2,3,4,5),
    'meses' => $lista4=array('enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'), 

);
foreach($lista as $clave => $valor){
    echo "<br /";
    foreach($lista2 as $clave => $valor){
        echo "<br />";
        foreach ($lista3 as $clave => $valor) {
            echo "<br />";
            foreach($lista4 as $clave => $valor){
                echo "{$clave} = {$valor}", "<br />";
            };
        };
    };
};
?>