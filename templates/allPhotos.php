<?php
require_once('../config/config.php');
require_once('../engine/db.php');
// 1, 2
function showImg()
{
    $file = getAssocResult('SELECT id, filename, watches FROM images');
    $fileName = array_column($file, 'filename');
    return $fileName;
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson4</title>
</head>
<body>
<div>

    <?php foreach (showImg() as $image):
        ?>
        <a href="<?= 'fullPhoto.php'.'?name='.$image ?>">
            <img src='<?= IMGL5_DIR . $image ?>' width='400'>
        </a>
    <?php endforeach; ?>
</div>
</body>
</html>