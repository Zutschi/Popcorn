<?php

namespace App\Post;

use App\Core\AbstractController;
use App\Comment\CommentsRepository;

class PostsController extends AbstractController
{

    public function __construct(PostRepository $postRepository,CommentsRepository $commentsRepository){
        $this->postRepository = $postRepository;        
        $this->commentsRepository = $commentsRepository;
    }

    
    public function index()
    {
        $posts = $this-> postRepository->all();

        $this->render("post/index",['posts' => $posts]);
        
      
    }

    public function show()
    {
        $id =$_GET['id'];
        if(isset($_POST['content']))
        {
            $content = $_POST['content'];
            $this->commentsRepository->insertForPost($id,$content);
        }
        
        $post = $this-> postRepository->find($id);
        $comments = $this->commentsRepository->allByPost($id);
        $this->render("post/show",[
            'post' => $post,
            'comments' => $comments
            ]);
    }
   
}

?>