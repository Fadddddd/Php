<?php
if (isset($_POST["theme"])){
    $theme= $_POST["theme"];
    switch ($theme){
        case "clair":
            setcookie("theme", 'style_Clair.css', time()+60*60*24);
            header('location: preferences.php');
            exit();
        break;
        case "sombre":
            setcookie("theme", 'style_Sombre.css', time()+60*60*24);
            header('location: preferences.php');
            exit();
        break;
        }
}
require 'menu.php';
?>
<hr>
<h2> Préférences du site </h2>
<form action= "preferences.php" method="POST">
    <label for="theme">Faites votre choix :</label>
<input type="radio" name="theme" id="theme" value="sombre"> Sombre</input>
<input type="radio" name="theme" id="theme" value="clair"> Clair </input>
<button type="submit" id="button">Valider</button>
</form>
