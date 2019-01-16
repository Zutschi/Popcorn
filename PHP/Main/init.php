<?php 
    require __DIR__ . "\autoload.php";
    require __DIR__ . "\database.php";

    $container = new App\Core\Container();
    
    function e($str)
    {
        return htmlentities($str,ENT_QUOTES, 'UTF-8');
    }
    
?>