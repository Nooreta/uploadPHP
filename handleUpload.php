<?php
if(isset($_POST('submit')))
{
    $img=$_FILES['img'];
    echo "<pre>";
    print_r($img);
    echo "</pre>";
    $imgName=$img['name'];
    $imgType=$img['type'];
    $imgTmpName=$img['tmp_name'];
    $img_error=$img['error'];
    $img_size=$img['size'];
    move_uploader_file($imgTmpName,"uploadFile/$imgName");
}


?>