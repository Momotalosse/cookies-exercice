<!-- Faire une première pageindex.php, et sur la page il a 3 boutons (c'est des liens a)

"Français" -> Et il redirige vers une autre page ou il y a écris "je suis :a version française"
"Anglais" -> ...
"Allemand" ->

Si il y a deja un cookie enregistré, alors on est automatiquement redirigé vers la langue que l'on a choisi la dernière fois. -->

<?php

if (isset($_COOKIE['germanCookies'])) {
    header('Location: deu.php');
}

if (isset($_COOKIE['englishCookies'])) {
    header('Location: en.php');
}

if (isset($_COOKIE['frenchCookies'])) {
    header('Location: fr.php');
}

?>

<!doctype html>

<head>
  <meta charset="utf-8">
  <title>COOKIES</title>
  <link rel="shortcut icon" href="images/cookieImg.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
</head>

<html>

    <body>

        <div 
        style ="text-align: center;
                background-color: #dddddd;">
            <a href="fr.php" style="color: blue;">
                Fr
            </a>
            <a href="fr.php" style="color: white;">
                anç
            </a>
            <a href="fr.php" style="color: red;">
                ais
            </a>
        </div>

        <br>

        <div
        style ="text-align: center;
                background-color: #dddddd;">
            <a href="en.php" style="color: red;">
                En
            </a>
            <a href="en.php" style="color: blue;">
                gl
            </a>
            <a href="en.php" style="color: white;">
                ish
            </a>
        </div>

        <br>

        <div
        style ="text-align: center;
                background-color: #dddddd;">
            <a href="deu.php" style="color: black;">
                Deu
            </a>
            <a href="deu.php" style="color: red;">
                ts
            </a>
            <a href="deu.php" style="color: yellow;">
                ch
            </a>
        </div>

    </body>

</html>