<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

use router\Router;
use handler\Handlers;
use handler\http\HttpStatusHandler;
use handler\view\ViewHandler;
use handler\http\HttpStatus;
use view\TemplateView;

include __DIR__ . '/../vendor/autoload.php';

// all dates in UTC timezone
date_default_timezone_set("UTC");
ini_set('date.timezone', 'UTC');

$router = new Router();
$handlers = Handlers::get();
$handlers->add(new ViewHandler());
$handlers->add(new HttpStatusHandler());


$router->route('/', '/', function () {
    return new TemplateView(__DIR__ . '/image/controllers.html');
});




$result = $router->match($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
$handler = $handlers->getHandler($result);

if ($handler) {
    $handler->handle($result);
} else {
    $error = new HttpStatus(404, ' ');
    $handler = $handlers->getHandler($error);
    $handler->handle($error);
}
