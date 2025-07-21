<?php
session_start();

require_once dirname(__DIR__) . '/config/constants.php';
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../core/Model.php';
require_once __DIR__ . '/../core/View.php';


// Autoload des classes 
spl_autoload_register(function ($class) {
    foreach (['controllers', 'models'] as $folder) {
        $file = __DIR__ . "/../app/$folder/$class.php";
        if (file_exists($file)) {
            require_once $file;
        }
    }
});

// Routage simple
$url = $_GET['url'] ?? 'home/index';
list($controllerName, $method) = explode('/', $url) + [1 => 'index'];

$controllerClass = ucfirst($controllerName) . 'Controller';

if (class_exists($controllerClass) && method_exists($controllerClass, $method)) {
    $controller = new $controllerClass();
    $controller->$method();
} else {
    http_response_code(404);
    echo "Page non trouvée";
}