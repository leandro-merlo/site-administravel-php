<?php 

function resolve_path($route) {
    $path = $_SERVER['PATH_INFO'] ?? '/';
    $route = str_replace('/', '\/', $route);
    $route_pattern = "/^{$route}$/";
    // $route_pattern = "/^\/([a-z]+)$/";
    if (preg_match($route_pattern, $path, $params)) {
        return $params;
    }
    return false;
}

if (resolve_path('/admin/?(.*)')) {
    require_once __DIR__ . "/admin/routes.php";
} elseif (resolve_path('/?(.*)')) {
    require_once __DIR__ . "/site/routes.php";
}