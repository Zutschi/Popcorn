<?php include __DIR__ . "/../layouts/header.php"; ?>
<ul>
<?php foreach ($posts as $post):?>
    <li> 
        <a href="post?id=<?php echo e($post->id); ?>"/>
            <?php echo e($post->title);?>            
    </li>
<?php endforeach?>
</ul> 
<?php include __DIR__ . "/../layouts/footer.php"; ?> 