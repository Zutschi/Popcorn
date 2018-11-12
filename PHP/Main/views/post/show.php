<?php include __DIR__ . "/../layouts/header.php"; ?>
<div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <?php echo nl2br($post["title"]);?>
                </h3>
            </div>
            <div class="panel-body">
            <?php echo $post["content"];?>
            </div>
        </div>
<?php include __DIR__ . "/../layouts/footer.php"; ?> 