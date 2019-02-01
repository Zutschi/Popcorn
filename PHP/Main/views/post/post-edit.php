<?php require __DIR__ . "/../layouts/header.php"; ?>
<form class="form-group" method="post" action="">
            <div class="panel-heading">
                <label for="title">Titel:</label>
                <textarea class="form-control" rows="1" id="title" name="title">
                        <?php echo e($post["title"]);?>
                </textarea
            </div>
            <label for="content">Kontent:</label>
            <textarea class="form-control" rows="5" id="content" name="content"> 
                <?php echo e($post["content"]);?>
            </textarea>
            <input type="submit" class="btn btn-info" value="Speichern">
</form>    

<?php require __DIR__ . "/../layouts/footer.php"; ?> 