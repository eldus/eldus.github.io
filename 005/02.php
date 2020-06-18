<?php
require_once 'vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);
$template = $twig->load('home.html');
echo $template->render(array(
    'pageTitle' => 'Welcome to Penguins R Us!',
    'products' => array(
        'Tuxedo',
        'Bow tie',
        'Black Boxers',
    ),
));

//require_once 'vendor/autoload.php';
//$loader = new \Twig\Loader\FilesystemLoader('templates');
//$template = $twig->load('02.html');
//echo $template->render(['the' => 'variables', 'go' => 'here']);
?>
