<?php
function get_img($dir){
    $files=scandir($dir);
    unset($files[0],$files[1]);
    return $files;
}


?>