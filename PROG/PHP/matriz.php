<?php
define('N',4);
echo "generar matriz <br />";
for ($f=0;$f<=N;$f++){
    for ($c=0;$c<=N; $c++){
        $matri[$f][$c]=rand(1,100);
        
    };
    
  };

  for ($f=0;$f<=N;$f++){
    for ($c=0;$c<=N; $c++){
            echo $matri[$f][$c];
            echo "     ";
    };
    echo "<br />";
  };
  echo "Visualizar la diagonal principal <br />";
  for ($f=0;$f<=N;$f++){
    
            echo $matri[$f][$f];
            echo "<br />";
    };
    echo "Sumar las filas <br />";
    for ($f=0;$f<=N;$f++){
        $suma=0;
        for ($c=0;$c<=N; $c++){
                $suma=$suma+$matri[$f][$c];
                echo $matri[$f][$c];
                echo"     ";
        };
        echo "  = $suma <br />";
    };
    echo "Sumar las columnas <br />";
    for ($c=0;$c<=N;$c++){
        $suma=0;
        for ($f=0;$f<=N; $f++){
                $suma=$suma+$matri[$f][$c];
                echo $matri[$f][$c];
                echo"     ";
        };
        echo "  = $suma <br />";
    }
    
?> 