<?php
require_once __DIR__ . '/../vendor/autoload.php';

use app\core\Application;
use app\core\Template;

$app = new Application();

$app->router->get('/', function (){
    Template::view('home');
});
$app->router->get('/contact', function (){
    Template::view('contact');
});
$app->router->get('/about', function (){
    Template::view('about');
});
$app->run();

