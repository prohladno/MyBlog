<?php

spl_autoload_register(function (string $className) {

    require_once __DIR__ . '/../src/' . str_replace('\\', '/', $className) . '.php';
});

$route = $_GET['route'] ?? '';

$routes = require __DIR__ . '/../src/routes.php';
$isRouteFound = false;
foreach ($routes as $pattern => $contollerAndAction) {
    if (preg_match($pattern, $route, $matches)) {
        $isRouteFound = true;
        break;
    }
}

if (!$isRouteFound) {
    echo 'Page not found';
    return;
}

unset($matches[0]);


$controllerName = $contollerAndAction[0];
$actionName = $contollerAndAction[1];

$controller = new $controllerName();
$controller->$actionName(...$matches);
