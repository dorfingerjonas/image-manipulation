<?php
header("Content-type: image/png");

$image = imagecreatetruecolor(400, 300);
imagecolorallocate($image, 110, 110, 150);

$color1 = imagecolorallocate($image, 66, 255, 109);
$color2 = imagecolorallocate($image, 54, 185, 255);
$color3 = imagecolorallocate($image, 255, 0, 0);

imagefilledellipse($image, 200, 150, 250, 250, $color1);
imagefilledellipse($image, 150, 110, 60, 60, $color2);
imagefilledellipse($image, 250, 110, 60, 60, $color2);
imagefilledrectangle($image, 195, 150, 205, 185, $color2);
imagefilledellipse($image, 200, 230, 130, 15, $color3);

imagepng($image);

imagedestroy($image);
