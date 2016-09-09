<?php
require 'vendor/autoload.php';

$app = new Slim\App();

### redirect to /hello/azure_webapps
$app->get('/', function ($req, $res, $arg) {
    return $res->withStatus(302)
               ->withHeader('Location', '/hello/azure_webapps');
});

### output json
$app->get('/hello/{name}', function ($req, $res, $arg) {
    $data = array(message => 'Hello, '. $arg['name']);
    return $res->withJson($data);
});

$app->run();