<?php

session_start();

require __DIR__ . '/../vendor/autoload.php';

// Slim Configuration
$config = array(
    'displayErrorDetails' => true,
    'addContentLengthHeader' => false,
);

$app = new \Slim\App(['settings' => $config]);

// Load Our Routes
require __DIR__ .'/routes.php';