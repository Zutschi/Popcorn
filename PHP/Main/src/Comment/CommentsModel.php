<?php
namespace App\Comment;

use App\Core\AbstractModel;

class CommentsModel extends AbstractModel
{
       public $id;
       public $content;
       public $post_id;
}        


?>