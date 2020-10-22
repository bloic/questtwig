<?php

require __DIR__. '/../vendor/autoload.php';

$products = ['product1', 'fifi', 'pro3', 'product4', 'product5'];

$loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/../src/view');
$twig = new Twig\Environment($loader);
echo $twig->render('index.html.twig', [ 'products'=>$products,]);