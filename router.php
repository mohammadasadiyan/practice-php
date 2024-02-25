<?php
$URI = $_SERVER['REQUEST_URI'];
$routes = [
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/contact" => "controllers/contact.php",
];
function Abort($code = 404) {
    http_response_code($code);
    require "view/{$code}.php";
    die();
}
if (array_key_exists($URI, $routes)) {
    require $routes[$URI];
} else {
    Abort();
}