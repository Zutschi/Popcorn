<?php 
namespace App\User;

use App\Core\AbstractController;

class LoginController extends AbstractController
{
    public function __construct(UsersRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login()
    {
       $this->render("user/login",[]);
    }
}

?>