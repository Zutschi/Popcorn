<?php 
namespace App\User;
 use App\Core\AbstractRepository;

class UsersRepository extends AbstractRepository
{
    public function getTableName()
    {
        return "users";
    }
   
    public function getModelName()
    {
        return "App\\User\\UserModel";
    }

    public function findUserName($username)
    {
        
        $table = $this->getTableName();
        $model = $this->getModelName();
        $stmt = $this->pdo->prepare("SELECT * FROM `$table` WHERE `username= :username`");
        $user = $stmt -> fetch(PDO::FETCH_CLASS);   
        return $user;
       
    }
}

?>