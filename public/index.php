<?php


//LOADER
require __DIR__ . "/../vendor/autoload.php";

$method = strtolower(filter_input(INPUT_SERVER, "REQUEST_METHOD"));
//$method = strtolower($_SERVER["REQUEST_METHOD"]);
$url = filter_input(INPUT_SERVER, "REDIRECT_URL");
//$url = $_SERVER["REDIRECT_URL"];
$baseUrl = "/php-initiation/public";
$routes = json_decode(file_get_contents(__DIR__ . "/../config/routes.json"));
$baseClassName = "PHPInitiation\\Controller\\";

$_POST = $_GET = $_SERVER = null;


//Matching
foreach ($routes as $value) {
    if ($url !== $baseUrl . $value->url) {
        continue;
    }
    $methods = explode(",", strtolower($value->method));


    if (!in_array($method, $methods)) {
            header("HTTP/1.1 405 Method Not Allowed");
            exit('Method Not Allowed');
        }
        $className =
            $baseClassName . str_replace(
                "/",
                "\\",
                $value->controller);

        //Dispatching
        $controller = new $className();
        $controller->{$value->action}();
        exit();
}
header("HTTP/1.1 404 Not Found");
exit('Not Found');