<?php

?>

<form method="POST" action="upload.php" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Upload">
</form>
<?php

$files = scandir("uploads");
for ($a=2; $a<count($files);$a++) {

    ?>
    <p>
        <a download="<?php echo $files[$a] ?>"href="uploads/<?php echo $files[$a] ?>"><?php echo $files[$a]; ?></a>>
    </p>    
    <?php
}