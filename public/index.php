<?php


require_once __DIR__ . '/../vendor/autoload.php';
use app\core\Application ;
$app = new Application(dirname(__DIR__));


/* example use anonymous function
$app->router->get('/' , function (){
    echo "hello world " ;
});

 end example  */

$app->router->get('/' , 'home');
$app->router->get('/welcome' , 'welcome');


$app->run();