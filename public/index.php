<?php
// Load Config
require_once '../config/config.php';

// Composer
require_once __DIR__.'/../vendor/autoload.php';

use app\Router;
use app\controllers\MainController;


$router = new Router();

$router->get('/', [MainController::class, 'index']);
$router->get('/projects', [MainController::class, 'projects']);
$router->get('/about', [MainController::class, 'about']);
$router->get('/contact', [MainController::class, 'contact']);
$router->post('/contact', [MainController::class, 'contact']);

?>

