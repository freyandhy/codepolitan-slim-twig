<?php

session_start();

require __DIR__ . '/../vendor/autoload.php';

// Slim Configuration
$config = array(
    'displayErrorDetails' => true,
    'addContentLengthHeader' => false,
);

$app = new \Slim\App(['settings' => $config]);

// Get Dependency Injection Container
$container = $app->getContainer();

// Register Twig View Helper
$container['view'] = function($container){
    $view = new \Slim\Views\Twig(__DIR__ . '/Views', [
        'cache' => false,
        'debug' => true
    ]);

    // Add Extension
    $view->addExtension(new \Slim\Views\TwigExtension(
        $container->router,
        $container->request->getUri()
    ));

    return $view;
};

// Load Our Routes
require __DIR__ .'/routes.php';