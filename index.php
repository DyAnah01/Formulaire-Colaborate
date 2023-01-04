<?php

require __DIR__ . '/vendor/autoload.php'; 


use Twig\Environment;
use Twig\Loader\FilesystemLoader; 

$loader = new FilesystemLoader(__DIR__ .'/views');
$twig = new Environment($loader, [
    'cache' => false   
]);

$page = isset($_GET['page']) ? $_GET['page'] : null;

switch ($page){
    case 'accueil':
        echo $twig->render('index.html.twig',[
        ]);
    break;

    case 'sinscrire':
        echo $twig->render('form.html.twig',[
        ]);
    break;
    case 'seconnecter':
        echo $twig->render('connection.html.twig',[
        ]);
    break;
    case 'contact':
        echo $twig->render('contact.html.twig',[
        ]);
    break;
    default :
    echo $twig->render('index.html.twig',[

    ]);
}
