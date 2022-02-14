<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <?php
    $theme= $_COOKIE["theme"] ?? ""; 
    switch ($theme){
        case 'style_Clair.css':
        break;
        case 'style_Sombre.css':
        break;
        default :
        $theme = 'style_Clair.css';
        break;
        }
    ?>
    <link rel="stylesheet" href= "<?= $theme ?>" />
    <title>Document</title>
</head>
<body>
    <div class="menu">
        <a href="accueil.php" target="_blank"> Accueil </a>
        <a href="article.php" target="_blank"> Article </a>
        <a href="preferences.php" target="_blank"> Préférences </a>
    </div>