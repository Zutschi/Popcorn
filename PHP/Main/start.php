<?php



function autoload($className)
    {
      $prefix = "App";
      $dir = "./src";

      $clss = substr($className,strlen($prefix));   


      $clss =str_replace("\\","/",$clss);

      if(file_exists(("{$dir}{$clss}.php")))
      {
        require "{$dir}{$clss}.php";
      }
    }
    spl_autoload_register("autoload");

        
    $post = new App\Blog\Post();
    var_dump($post);
    
    // $pdo = new PDO('mysql:host=localhost;dbname=blog','root','');
    
    // $result = $pdo->query("SELECT * FROM `posts`");
    // foreach($result AS $row)
    // {
    //   var_dump($row);
    // }



  ?> 