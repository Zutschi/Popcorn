<?php 

namespace App\Post;

use App\Core\AbstractController;
use App\Comment\CommentsRepository;

class PostsAdminController extends AbstractController
{

    public function __construct(PostRepository $postRepository){
        $this->postRepository = $postRepository;        
    }

    
    public function index()
    {
        $posts = $this-> postRepository->all();
        $this->render("post/posts-admin",['posts' => $posts]);
        
      
    }

    public function show()
    {
        $id =$_GET['id'];
        if(isset($_POST['content']))
        {
            $content = $_POST['content'];
        }
        
        $post = $this-> postRepository->find($id);      
        $this->render("post/post-edit",['post' => $post]);
    }

    public function edit()
    {
        
    }
       
}



?>