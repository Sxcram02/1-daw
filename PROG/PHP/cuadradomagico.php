<?php
    define('N',2);
    $i = 1;
    $f = 0;
    $c= N / 2;


    $mayor = (N+1)**2;

    $m[$f][$c]= $i;
    $i++;
    $excepcion = false;
    while($i<=$mayor){
        if($excepcion){
            $f++;
            if($f > N){
                $f = 0; 
            };
            $m[$f][$c]=$i;
            $excepcion =! $excepcion;
        }else{
            $f--;
            if($f == 1){
                $f = n;
            };
            $c++;
            if($c > N){
                $c = 0;
            };
        }
    }
    ?>