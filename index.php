<?php
require 'vendor/autoload.php';

$app = new Slim\App();

$app->get('/hello/{name}', function ($req, $res, $arg) {
    $res->write('Hello, '. $arg['name']);
    return $res;
});

$app->run();