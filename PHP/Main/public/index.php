<?php
    require __DIR__ . "/../init.php";
    $pathInfo = $_SERVER['PATH_INFO'];

    $routes = [
        '/login' => ['controller' => 'loginController','method' => 'login'],
        '/index' => ['controller' => 'postsController','method' => 'index'],
        '/post' => ['controller' => 'postsController','method' => 'show'],
        '/about' => ['controller' => 'postsController','method' => 'about'],
        '/phpInfo' => ['controller' => 'postsController','method' => 'phpInfo']

    ];

    if(isset($routes[$pathInfo])) {
        $route = $routes[$pathInfo];
        $controller = $container->make($route['controller']);

        $method = $route['method'];
        $controller->$method();
    }
   
?>