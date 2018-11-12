<?php

namespace App\Post;
 

class PostsController
{

    public function __construct(PostRepository $postRepository){
        $this->postRepository = $postRepository;
        
    }

    protected function render($view,$params)
    {
        extract($params);
        include __DIR__ . "/../../views/{$view}.php";
    }
    public function index()
    {
        $posts = $this-> postRepository->fetchPosts();

        $this->render("post/index",['posts' => $posts]);
        
      
    }

    public function show()
    {
        
        $id =$_GET['id'];
        $post = $this-> postRepository->fetchPost($id);
        $this->render("post/show",['post' => $post]);
        
    }
}

?>