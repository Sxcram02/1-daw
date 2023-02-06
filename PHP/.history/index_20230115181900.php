<?php
    $adivinanza = "gafas";

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
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="website icon" href="/style/media/word.png" type="png" /> 
        <link rel="stylesheet" href="/style/style.css" type="text/css" />
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    </head>
    <body>
        <div class="container">
            <header class="headContainer">
                <h1>La palabra del dia</h1>
            </header>
            <section class="boxContainer">
                <div class="boxTable">
                    <form class="form" method="post" action="#">
                        <table class="table">
                            <thead class="headTable">
                                <tr>
                                    <td colspan="5">
                                        <ul>
                                            <li><h2>La palabra del dia</h2></li>
                                            <li><img src="/style/media/scrabble.png" alt="laPalabraDelDia"></li>
                                        </ul>
                                    </td>
                                </tr>
                            </thead>
                            <tbody class="bodyTable">
                                <tr>
                                    <td><input type=text class="<?php echo $colores[0]; ?>" value="<?php echo "$respuesta1"?>" name="respuesta1" /></td>
                                    <td><input type=text class="<?php echo $colores[1]; ?>" value="<?php echo "$respuesta2"?>" name="respuesta2" /></td>
                                    <td><input type=text class="<?php echo $colores[2]; ?>" value="<?php echo "$respuesta3"?>" name="respuesta3" /></td>
                                    <td><input type=text class="<?php echo $colores[3]; ?>" value="<?php echo "$respuesta4"?>" name="respuesta4" /></td>
                                    <td><input type=text class="<?php echo $colores[4]; ?>" value="<?php echo "$respuesta5"?>" name="respuesta5" /></td>
                                </tr>
                                <tr>
                                    <td><input type=text class="letra" value="<?php echo "$letra1"?>" name="letra1" disabled/></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra2"?>" name="letra2" disabled/></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra3"?>" name="letra3" disabled/></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra4"?>" name="letra4" disabled/></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra5"?>" name="letra5" disabled/></td>
                                </tr>
                                <tr>
                                    <td><input type=text class="letra" value="<?php echo "$letra1"?>" name="letra1" disabled/></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra2"?>" name="letra2" disabled/></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra3"?>" name="letra3" disabled/></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra4"?>" name="letra4" disabled/></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra5"?>" name="letra5" disabled/></td>
                                </tr>
                                <tr>
                                    <td><input type=text class="letra" value="<?php echo "$letra1"?>" name="letra1" disabled/></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra2"?>" name="letra2" disabled/></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra3"?>" name="letra3" disabled/></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra4"?>" name="letra4" disabled/></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra5"?>" name="letra5" disabled/></td>
                                </tr>disabled
                                <tr>
                                    <td><input type=text class="letra" value="<?php echo "$letra1"?>" name="letra1"disabled/></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra2"?>" name="letra2"disabled/></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra3"?>" name="letra3" disabled/></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra4"?>" name="letra4" disabled/></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra5"?>" name="letra5"disabled /></td>
                                </tr>
                            </tbody>
                            <tfoot class="footTable">
                                <tr>
                                    <td colspan="5"><input type="submit" class="sent" value="sent" placeholder="enviar" name="sent"></td>
                                </tr>
                            </tfoot>
                        </table>
                    </form>
                </div> 
            </section>
            <footer class="footContainer">
                <p><i class='bx bxs-copyright'></i> Copyright by Marcos from Andalucia pepe</p>
            </footer>
        </div>
    </body>
</html>