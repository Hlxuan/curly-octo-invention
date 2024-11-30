<?php

require "../helpers.php";

$routes = [
    "/" => "controllers/home.php",
    "/listings" => "controllers/listings.php",
    "/listings/create" => "controllers/listings_create.php",
    "404" => "controllers/404.php"
];

$uri = $_SERVER["REQUEST_URI"];
inspectAndDie($uri);