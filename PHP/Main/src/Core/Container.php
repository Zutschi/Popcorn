<?php
namespace App\Core;


use App\Comment\CommentsRepository;
use App\Post\PostRepository;
use App\Post\PostsController;
use App\Post\PostsAdminController;
use App\User\UsersRepository;
use App\User\LoginController;
use App\User\LoginService;
use PDO;
use PDOException;


class Container
{
    private $builder = [];
    private $instances = [];

    public function __construct()
    {
        $this->builder = [
            'loginService' => function()
            {
                return new LoginService(
                    $this->make("usersRepository")
                );
            },
            'loginController' => function()
            {
                return new LoginController(
                    $this->make("loginService")
                );
            },
            'postsController' => function() {
                return new PostsController(
                  $this->make('postsRepository'),
                  $this->make('commentsRepository')
                );
              },
              'postsAdminController' => function() {
                return new PostsAdminController(
                    $this->make('loginService'),
                    $this->make('postsRepository')            
                );
              },
            'postsRepository' => function()
            {
                return new PostRepository(
                    $this->make("pdo")
                );
            },
            'usersRepository' =>  function ()
            {
                return new UsersRepository(
                    $this->make('pdo')
                );
            },
            'commentsRepository' => function() {
                return new CommentsRepository(
                    $this->make('pdo')
                );
            },
            'pdo' => function()
            {
                try {
                $pdo = new PDO(
                    'mysql:host=localhost;dbname=blog;charset=utf8',
                    'blog-Admin',
                    'GAeyhes9FNOAlwXI'
                    );
                }
                catch(PDOException $e)
                {
                    echo("Database connection failure!");
                    die();
                } 
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