<?php

if (isset($_COOKIE['germanCookies'])) { //-- You cannot access the index when the cookie is active 
    echo "
        <p>
            Sie wurden automatisch umgeleitet.
        </p>
    ";
}

$fiveMinutesTime = time() + 60 * 5;

setcookie( "germanCookies", "deu", $fiveMinutesTime); //-- Cookies will exist for 5minutes

?>

<!doctype html>

<head>
  <meta charset="utf-8">
  <title>COOKIES - Deu</title>
  <link rel="shortcut icon" href="images/cookieImg.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
</head>

<html>
    <body>
        <p>
            Ich bin die deutsche Seite.
        </p>

        <a href="index.php">
            > index <
        </a>
    </body>
</html>