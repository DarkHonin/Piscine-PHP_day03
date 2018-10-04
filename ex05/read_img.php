<?php
header("Content-Type: image/png");
$data = file_get_contents("42.png");
echo $data;
?>
