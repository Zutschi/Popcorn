<?php
    session_start();
    require __DIR__ . "/../init.php";
    $pathInfo = $_SERVER['PATH_INFO'];

    $routes = [
        '/login' => ['controller' => 'loginController','method' => 'login'],
        '/logout' => ['controller' => 'loginController','method' => 'logout'],
        '/dashboard' => ['controller' => 'loginController','method' => 'dashboard'],
        '/index' => ['controller' => 'postsController','method' => 'index'],
        '/post' => ['controller' => 'postsController','method' => 'show'],
        '/posts-admin' => ['controller' => 'postsAdminController','method' => 'index'],
        '/post-edit' => ['controller' => 'postsAdminController','method' => 'show']

    ];

    if(isset($routes[$pathInfo])) {
        $route = $routes[$pathInfo];
        $controller = $container->make($route['controller']);

        $method = $route['method'];
        $controller->$method();
    }
   
?>