<?php require __DIR__ . "/../layouts/header.php"; ?>
<div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <?php echo nl2br(e($post["title"]));?>
                </h3>
            </div>
            <div class="panel-body">
            <?php echo nl2br(e($post["content"]));?>
            </div>
        </div>
        <ul class="list-group">
            <?php foreach($comments AS $comment) : ?>
                <li class="list-group-item">
                    <?php echo e($comment->content); ?>
                </li>
            <?php endforeach;?>
        </ul>
        <form class="form-group" method="post" action="post?id=<?php echo e($post['id']); ?>">
            <label for="comment">Comment:</label>
            <textarea class="form-control" rows="5" id="comment" name="content"></textarea>
            <br/>
            <input type="submit" class="btn btn-info" value="Comment">
        </form>
        <br/>
        <br/>
        <br/>

<?php require __DIR__ . "/../layouts/footer.php"; ?> 