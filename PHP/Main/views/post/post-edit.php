<?php require __DIR__ . "/../layouts/header.php"; ?>
<?php if(!empty($savedSuccess)): ?>
    <p>Der Post wurde gespeichert.</p>
<?php endif; ?>
<form class="form-group" method="post" action="post-edit?id=<?php echo e($entry->id);?>">
    <div class="panel-body">
                <label for="title">Titel:</label>
                <input type="text" class="form-control" rows="1" id="title" name="title" value="<?php echo e($entry["title"]);?>">
            <label for="content">Kontent:</label>
            <textarea class="form-control" rows="5" id="content" name="content"><?php echo e($entry["content"]);?></textarea>
            <br/>
            <input type="submit" class="btn btn-info" value="Speichern">
    </div>            
</form>    

<?php require __DIR__ . "/../layouts/footer.php"; ?> 