<!-- 
    $palabra = array($_POST['letra1'], $_POST['letra2'], $_POST['letra3'], $_POST['letra4'], $_POST['letra5']);
    $palabra2 = array("s", "a", "b", "i", "o");

     while ($i < 7){
        if (isset($_POST['sent']){
            switch($palabra){
                case 1:
                    $palabra = in_array($palabra2);
            }
        }
    } 
 -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="website icon" href="/style/media/scrabble.png" type="png" /> 
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
                                            <li><img src="/style/media/word.png" alt="laPalabraDelDia"></li>
                                        </ul>
                                    </td>
                                </tr>
                            </thead>
                            <tbody class="bodyTable">
                                <tr>
                                    <td><input type=text class="letra" value="<?php echo "$letra1"?>" name="letra" /></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra2"?>" name="letra" /></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra3"?>" name="letra" /></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra4"?>" name="letra" /></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra5"?>" name="letra" /></td>
                                </tr>
                                <tr>
                                    <td><input type=text class="letra" value="<?php echo "$letra1"?>" /></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra2"?>" /></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra3"?>" /></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra4"?>" /></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra5"?>" /></td>
                                </tr>
                                <tr>
                                    <td><input type=text class="letra" value="<?php echo "$letra1"?>" /></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra2"?>" /></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra3"?>" /></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra4"?>" /></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra5"?>" /></td>
                                </tr>
                                <tr>
                                    <td><input type=text class="letra" value="<?php echo "$letra1"?>" /></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra2"?>" /></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra3"?>" /></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra4"?>" /></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra5"?>" /></td>
                                </tr>
                                <tr>
                                    <td><input type=text class="letra" value="<?php echo "$letra1"?>" /></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra2"?>" /></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra3"?>" /></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra4"?>" /></td>
                                    <td><input type=text class="letra" value="<?php echo "$letra5"?>" /></td>
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