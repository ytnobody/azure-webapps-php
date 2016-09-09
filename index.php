<?php
require 'vendor/autoload.php';

$app = new Slim\App();

### output json
$app->get('/hello/{name}', function ($req, $res, $arg) {
    $data = array(message => 'Hello, '. $arg['name']);
    $res->withJson($data);
    return $res;
});

### redirect to /hello/azure_webapps
$app->get('/', function ($req, $res, $arg) {
    $res->withStatus(302)
        ->withHeader('Location', '/hello/azure_webapps');
    return $res;
});

$app->run();