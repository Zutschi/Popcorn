<?php include __DIR__ . "/../layouts/header.php"; ?>
<ul>
<?php foreach ($posts as $post):?>
    <li> 
        <a href="post.php?id=<?php echo $post->id; ?>"/>
            <?php echo $post->title;?>            
    </li>
<?php endforeach?>
</ul> 
<?php include __DIR__ . "/../layouts/footer.php"; ?> 