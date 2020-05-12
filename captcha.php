<?php
$captcha_bg_img = './img/bg_captcha.png';
$captcha_over_img = './img/bg_captcha_over.png';
$font_file = dirname(__FILE__) . '/font/railway-webfont.ttf';
$font_size = 25;
$text_angle = mt_rand(0, 5);
$text_x = mt_rand(0, 18);
$text_y = 35;
$text_chars = 5;
$text_color = array(0, 0, 0);

function rand_string($length) {
    $letters = array_merge(range('A', 'H'), range('J', 'N'), range('P', 'Z'), range(2, 9));
    $lettersCount = count($letters) - 1;
    $result = '';

    for ($i = 0; $i < $length; $i++) {
        $result .= $letters[mt_rand(0, $lettersCount)];
    }

    return $result;
}

$text = rand_string($text_chars);

header('Content-type: image/png');

$img = ImageCreateFromPNG($captcha_bg_img);
$text_color = ImageColorAllocate($img, $text_color[0], $text_color[1], $text_color[2]);
imagettftext($img, $font_size, $text_angle, $text_x, $text_y, $text_color, $font_file, $text);
imagecopy($img, ImageCreateFromPNG($captcha_over_img), 0, 0, 0, 0, 140, 40);

imagepng($img);
imagedestroy($img);
