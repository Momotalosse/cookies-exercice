<?php

if (isset($_COOKIE['englishCookies'])) { //-- You cannot access the index when the cookie is active 
    echo "
        <p>
            You have been automatically redirected.
        </p>
    ";
}

$fiveMinutesTime = time() + 60 * 5;

setcookie( "englishCookies", "en", $fiveMinutesTime); //-- Cookies will exist for 5minutes

?>

<head>
  <meta charset="utf-8">
  <title>COOKIES - En</title>
  <link rel="shortcut icon" href="images/cookieImg.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
</head>

<html>

    <body>
        <p>
            I am the English page.
        </p>

        <a href="index.php">
            > index <
        </a>
    </body>

</html>