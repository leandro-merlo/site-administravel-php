<?php 

function resolve($route) {
    $redirect_url = preg_replace("/\/public/", "", $_SERVER['REDIRECT_URL'], 1);
    $path_info = $_SERVER['PATH_INFO'] ?? NULL; 
    if ($path_info) {
        $path = $path_info ?? '/';    
    } else {
        $path = $redirect_url ?? '/';        
    }
    
    $route = str_replace('/', '\/', $route);
    $route_pattern = "/^{$route}$/";
    // $route_pattern = "/^\/([a-z]+)$/";
    if (preg_match($route_pattern, $path, $params)) {
        return $params;
    }
    return false;
}