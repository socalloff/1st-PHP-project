<?php


$method = $_SERVER["REQUEST_METHOD"];
$url = $_SERVER["REDIRECT_URL"];

if ($url === "/php-initiation/public/home") {
    echo"Accueil";
} elseif ($url === "/php-initiation/public/contact") {
    echo"Contact";
} else {
    echo"Page non-trouvée";
}