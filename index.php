<?php
session_start();

require('vendor/autoload.php');
require('controller/controller.php');

$router = new AltoRouter();

$router->setBasePath('seriousgame/');

$router->map( 'POST|GET', '/api/allParcours', function() {
    
    $parcours = getAllParcours();

    echo json_encode($parcours);
});

$router->map('POST', '/connexion', function(){

    if(isset($_POST['username']) && isset($_POST['password'])){

        $login = login();

        header("Location: http://localhost/seriousgame/index.html");
    } else {
        header("Location: http://localhost/seriousgame/index.html");
    }

});

$router->map('POST', '/inscription', function(){

    if(isset($_POST['username']) && $_POST['password'] && $_POST['email'])
    {
        $register = register();

        if($register){
            header("Location: http://localhost/seriousgame/login.html");
        }
    } else {

    }

});

$router->map('GET', '/logout', function(){

    disconnect();

});

$match = $router->match();


if( $match && is_callable( $match['target'] ) ) {
call_user_func_array( $match['target'], $match['params'] );
} else {

header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
echo '<h1 style="text-align: center; margin-top: 200px;">Erreur 404</h1>';
}