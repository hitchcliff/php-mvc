<?php

require_once __DIR__ . '/../vendor/autoload.php';

use app\core\Application;
use app\controllers\SiteController;

$rootPath = dirname(__DIR__);

$app = new Application($rootPath);

$app->router->get('/', [SiteController::class , 'home']);

$app->router->get('/contact', [SiteController::class , 'contact']);
$app->router->post('/contact', [SiteController::class , 'handleContact']);

$app->run();