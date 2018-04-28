<?php
require 'vendor/autoload.php';

$router = new AltoRouter();

// Test BDD
$router->map( 'GET|POST', '/api/test', function() {
    require __DIR__ . '/modele/BDD.php';
});