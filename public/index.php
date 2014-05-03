<?php
require '../vendor/autoload.php';

$app = new \Slim\Slim(array(
    'debug' => true,
    'view' => new \Slim\Views\Twig(),
    'templates.path' => '../templates',
));

$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
);

$view->parserExtensions = array(
    new \Slim\Views\TwigExtension(),
);

$app->get('/', function () use ($app) {
    $app->render('pages/home.html.twig', array(
        'active'=>'home'
        ));
})->name('home');

$app->get('/products', function () use ($app) {
    $app->render('pages/products.html.twig', array(
        'active'=>'products'
        ));
})->name('products');

$app->get('/collections', function () use ($app) {
    $app->render('pages/collections.html.twig', array(
        'active'=>'collections'
        ));
})->name('collections');

$app->get('/sales', function () use ($app) {
    $app->render('sales.html.twig', array(
        'active'=>'sales'
        ));
})->name('sales');

$app->get('/about', function () use ($app) {
    $app->render('about.html.twig', array(
        'active'=>'about'
        ));
})->name('/about');

$app->get('/contacts', function () use ($app) {
    $app->render('contacts.html.twig', array(
        'contacts'=>'contacts'
        ));
})->name('/contacts');

$app->run();