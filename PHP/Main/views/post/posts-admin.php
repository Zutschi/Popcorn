<?php require __DIR__ . "/../layouts/header.php"; ?>
<h1>Edit Posts:</h1>
<ul>
<?php foreach ($posts as $entry):?>
    <li> 
        <a href="post-edit?id=<?php echo e($entry->id); ?>"/>
            <?php echo e($entry->title);?>            
    </li>
<?php endforeach?>
</ul> 
<?php require __DIR__ . "/../layouts/footer.php"; ?> 