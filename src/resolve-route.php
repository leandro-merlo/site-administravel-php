<?php 

function resolve($route) {
    $path = $_SERVER['PATH_INFO'] ?? '/';
    $route = str_replace('/', '\/', $route);
    $route_pattern = "/^{$route}$/";
    // $route_pattern = "/^\/([a-z]+)$/";
    if (preg_match($route_pattern, $path, $params)) {
        return $params;
    }
    return false;
}