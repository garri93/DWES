<?php
include("head.php");
session_start();

$NOM=$_REQUEST['name'];
$MAIL=$_REQUEST['email'];
$URL=$_REQUEST['url'];
$SEX=$_REQUEST['sex'];

if (
    !empty($NOM) &&
    !empty($MAIL) &&
    !empty($URL) &&
    !empty($SEX)
) {
    $posicion_arroba = strpos($MAIL, "@");
    $posicion_punto = strpos($MAIL, ".", $posicion_arroba);
    if (!$posicion_arroba || !$posicion_punto) {
        echo "
                <h2>Debes escribir un Email correcto, vuelve al formulario</h2>
                <div class='container'>
                    <a href='formulario1.php' class='button'>Volver</a>
                </div>
        ";
    } else {
        echo '
        <form method="post" action="formulario3.php">
            <div>
                <label for="nconv">Nª convivientes:</label>
                <input name="nconv" type="number" id="nconv" placeholder="4">
            </div>

            <div>
                <p>Aficiones:</p>
                <input name="aficiones[]" type="checkbox" id="tenis" value="tenis">
                <label for="tenis">Tenis</label>
                <input name="aficiones[]" type="checkbox" id="futbol" value="futbol">
                <label for="futbol">Futbol</label>
                <input name="aficiones[]" type="checkbox" id="pinpon" value="pinpon">
                <label for="pinpon">Pinpon</label>
                <input name="aficiones[]" type="checkbox" id="padel" value="padel">
                <label for="padel">Padel</label>
            </div>

            <div>
                <label>Menú favorito:</label>
                <select name="menu">
                    <option value="lentejas">Lentejas</option>
                    <option value="paella">Paella</option>
                    <option value="cocido">Cocido</option>
                    <option value="costra">Costra</option>
                </select>
            </div>

            <div class="container">
                <input name="Enviar" value="Enviar datos" type="submit" class="button"><br>
            </div>
        </form>
    ';

    $_SESSION['nameS']=$NOM;
    $_SESSION['emailS']=$MAIL;
    $_SESSION['urlS']=$URL;
    $_SESSION['sexS']=$SEX;

    }
} else {
    echo "
    <h2>Hay campos vacios, vuelve al formulario</h2>
    <div class='container'>
        <a href='formulario1.php' class='button'>Volver</a>
    </div>
";
}




?>
