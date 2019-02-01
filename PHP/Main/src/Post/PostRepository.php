<?php 
namespace App\Post;
 use App\Core\AbstractRepository;

class PostRepository extends AbstractRepository
{
    public function getTableName()
    {
        return "posts";
    }
   
    public function getModelName()
    {
        return "App\\Post\\PostModel";
    }

    public function edit($post_Id,$titel,$content)
    {
        $table = $this->getTableName();
        $stmt = $this->pdo->prepare("UPDATE `$table` SET `title` = '$titel', `content` = '$content' WHERE `posts`.`id` = $post_Id");
        $stmt->execute();
    }
}

?>