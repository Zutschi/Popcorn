<?php
namespace App\Core;

use App\Post\PostRepository;
use App\Post\PostsController;
use PDO;

class Container
{
    private $builder = [];
    private $instances = [];

    public function __construct()
    {
        $this->builder = [
            'postsController' => function() {
                return new PostsController(
                  $this->make('postsRepository')
                );
              },
            'postsRepository' => function()
            {
                return new PostRepository(
                    $this->make("pdo")
                );
            },
            'pdo' => function()
            {
                $pdo = new PDO(
                    'mysql:host=localhost;dbname=blog;charset=utf8',
                    'blog-Admin',
                    'GAeyhes9FNOAlwXI'
                    ); 
                    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);   
                    return $pdo;
            }
        ];
    }


    public function make($name)
    {
        if(!empty($this->instances[$name]))
        {
            return $this->instances[$name];
        }
        if(isset($this->builder[$name]))
        {
            $this->instances[$name] = $this->builder[$name]();
        }

        return $this->instances[$name];

    }
 }

?>