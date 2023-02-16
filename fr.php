<?php

if (isset($_COOKIE['frenchCookies'])) { //-- You cannot access the index when the cookie is active 
    echo "
        <p>
            Vous avez été automatiquement redirigé.
        </p>
    ";
}

$fiveMinutesTime = time() + 60 * 5;

setcookie( "frenchCookies", "fr", $fiveMinutesTime); //-- Cookies will exist for 5minutes

?>

<head>
  <meta charset="utf-8">
  <title>COOKIES - Fr</title>
  <link rel="shortcut icon" href="images/cookieImg.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
</head>

<html>

    <body>
        <p>
            Je suis la page française.
        </p>

        <a href="index.php">
            > index <
        </a>
    </body>

</html>