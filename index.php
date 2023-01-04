<?php

require __DIR__ . '/vendor/autoload.php'; 


use Twig\Environment;
use Twig\Loader\FilesystemLoader; 

$loader = new FilesystemLoader(__DIR__ .'/views');
$twig = new Environment($loader, [
    'cache' => false   
]);

// $page = isset($_GET['page']) ? $_GET['page'] : null;

// switch{


// }
echo $twig->render('index.html.twig',[



]);