<?php 

namespace App\Post;

use App\Core\AbstractController;
use App\Comment\CommentsRepository;
use App\User\LoginService;

class PostsAdminController extends AbstractController
{

    public function __construct(LoginService $loginService,PostRepository $postRepository){
        $this->postRepository = $postRepository;  
        $this->loginService = $loginService;      
    }

    
    public function index()
    {
        $this->loginService->check();

        $all = $this->postRepository->all();
        $this->render("post/posts-admin",['posts' => $all]);
        
      
    }

    public function show()
    {
        $this->loginService->check();

        $id =$_GET['id'];
        $entry = $this->postRepository->find($id);  
        $savedSuccess = false;
        if(!empty($_POST['title']) AND !empty($_POST['content']))
        {
            $entry->title = $_POST['title'];
            $entry->content = $_POST['content'];
            $this->postRepository->update($entry);
            $savedSuccess = true;
        }
          
        $this->render("post/post-edit",['entry' => $entry,'savedSuccess' =>  $savedSuccess]);
    }

       
}



?>