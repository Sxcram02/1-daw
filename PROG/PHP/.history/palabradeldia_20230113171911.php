<?php
    $adivinanza = "skill";

    $respuesta1 = $_POST['respuesta1'];
    $respuesta2 = $_POST['respuesta2'];
    $respuesta3 = $_POST['respuesta3'];
    $respuesta4 = $_POST['respuesta4'];
    $respuesta5 = $_POST['respuesta5'];



    $palabra = str_split($adivinanza);
    $palabra2 = array($respuesta1, $respuesta2, $respuesta3, $respuesta4, $respuesta5);
    $colores = array("gris", "gris", "gris", "gris", "gris");

    
    if(count($palabra2) == 5){
        for($i= 0;$i< 5; $i++){
            if($palabra2[$i] == $palabra[$i]){
                $colores[$i] = "verde";
            }
            elseif(in_array($palabra2[$i], $palabra)){
               $colores[$i] = "amarillo";
            }
            elseif($palabra2[$i] != $palabra[$i]){
                $colores[$i] = "azul";
            }
            else{
                echo "Error";
            }
        }   
    }
    else {
        error_reporting(E_ERROR|E_WARNING|E_PARSE|E_NOTICE);
;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wclassth=device-wclassth, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style1.css">
    <title>lapalabradelcifp</title>
</head>
<body>
    <div class="container">
        <header class="nav-bar">
            <div class="title">
                <h1 class="title">La palabra
                    <br />
                <span>del dia</span>
                </h1>
            </div>
            <img src="https://images.unsplash.com/photo-1567446537708-ac4aa75c9c28?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8bG9nb3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="logo">
        </header>
        <section class="box-content">
            <table class="content">
            <form action="#" method="POST" class="adivinanza">
                <thead>
                    <tr>
                        <td colspan="5"><h1 class="sub-title">La palabra del dia</h1></td>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td><input type="text" name="letra1" value="R" class="verde" disabled></td>
                            <td><input type="text" name="letra2" value="A" class="verde" disabled></td>
                            <td><input type="text" name="letra3" value="T" class="azul" disabled></td>
                            <td><input type="text" name="letra4" value="O" class="amarillo" disabled></td>
                            <td><input type="text" name="letra5" value="N" class="azul" disabled></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="letra1" value="D" class="azul" disabled></td>
                            <td><input type="text" name="letra2" value="A" class="azul" disabled></td>
                            <td><input type="text" name="letra3" value="T" class="amarillo" disabled></td>
                            <td><input type="text" name="letra4" value="O" class="verde" disabled></td>
                            <td><input type="text" name="letra5" value="S" class="amarillo" disabled></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="letra1" value="M" class="amarillo" disabled></td>
                            <td><input type="text" name="letra2" value="A" class="verde" disabled></td>
                            <td><input type="text" name="letra3" value="R" class="amarillo" disabled></td>
                            <td><input type="text" name="letra4" value="C" class="amarillo" disabled></td>
                            <td><input type="text" name="letra5" value="O" class="azul" disabled></td>
                        </tr>       
                        <tr>
                            <td><input type="text" name="letra1" value="A" class="azul" disabled></td>
                            <td><input type="text" name="letra2" value="R" class="verde" disabled></td>
                            <td><input type="text" name="letra3" value="M" class="verde" disabled></td>
                            <td><input type="text" name="letra4" value="A" class="verde" disabled></td>
                            <td><input type="text" name="letra5" value="R" class="azul" disabled></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="respuesta1" value="<?php echo "$respuesta1"?>" class="<?php echo $colores[0];?>"></td>
                            <td><input type="text" name="respuesta2" value="<?php echo "$respuesta2"?>" class="<?php echo $colores[1];?>"></td>
                            <td><input type="text" name="respuesta3" value="<?php echo "$respuesta3"?>" class="<?php echo $colores[2];?>"></td>
                            <td><input type="text" name="respuesta4" value="<?php echo "$respuesta4"?>" class="<?php echo $colores[3];?>"></td>
                            <td><input type="text" name="respuesta5" value="<?php echo "$respuesta5"?>" class="<?php echo $colores[4];?>"></td>
                        </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5"><button name="enviar" class="enviar" value="enviar">enviar</button></td>
                    </tr>
                </tfoot>
                </form>
            </table>
            <div class="box-info">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, non accusamus a minus sapiente sequi voluptas impedit error nemo ipsum reprehenderit nulla porro eius beatae. Nihil accusamus corrupti adipisci molestias.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. maiores tempora nemo quos unde! Ullam, possimus.</p>
                <div class="colors">
                    <p class="verde">Correcto Verde</p>
                    <p class="amarillo">Existe Amarillo</p>
                    <p class="azul">Incorrecto Azul</p>
                </div>
            </div>
        </section>
        <footer class="copyright">
            <h2>© Copyright & ℗ Phonographic copyright</h2>
        </footer>
    </div>
</body>
</html>