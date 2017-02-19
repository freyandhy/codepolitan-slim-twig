<?php

$app->get('/', function($request, $response) {
    return $this->view->render($response, 'home.twig');
});

$app->get('/hello/{name}', function($request, $response, $args) {
    return $this->view->render($response, 'hello.twig', array('name' => $args['name']));
});