<?php 
// 	echo phpinfo();
$image = imagecreatetruecolor(100, 30);
header("Content-type: image/png");
imagepng($image);
imagedestroy($image);
?>