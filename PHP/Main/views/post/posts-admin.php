<?php require __DIR__ . "/../layouts/header.php"; ?>
<h1>Edit Posts:</h1>
<ul>
<?php foreach ($posts as $post):?>
    <li> 
        <a href="post-edit?id=<?php echo e($post->id); ?>"/>
            <?php echo e($post->title);?>            
    </li>
<?php endforeach?>
</ul> 
<?php require __DIR__ . "/../layouts/footer.php"; ?> 