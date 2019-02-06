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

    public function update(PostModel $model)
    {
        $table = $this->getTableName();
        $stmt = $this->pdo->prepare("UPDATE `{$table}` SET `title` = :title, `content` = :content WHERE `id` = :id");
        $stmt->execute([
        'title' => $model->title,
        'content' => $model->content,
        'id' => $model->id
        ]);
    }
}

?>