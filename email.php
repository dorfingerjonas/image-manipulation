<?php
$email = "dorfinger.jonas@gmx.at";
$textNr = 4;
$textWidth = imagefontwidth($textNr) * strlen($email);
$textHeight = imagefontheight($textNr);

header("Content-type: image/png");

$image = imagecreate($textWidth, $textHeight);

$backgroundColor = imagecolorallocate($image, 222, 222, 222);
$textColor = imagecolorallocate($image, 0, 0, 0);
imagestring($image, $textNr, 0, 0, $email, $textColor);

imagepng($image);

imagedestroy($image);