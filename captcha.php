<?php  

header("content-type: image/png");


$captcha = substr( sha1( microtime() ),0,6);
$imagen = imagecreatefromjpeg( "fondo_captcha.jpg" );
$colortext = imagecolorallocate($imagen, 0, 0, 400);
setcookie('captcha', $captcha, time()+60*3);
imagestring($imagen, 5, 30, 8, $captcha, $colortext);
imagepng($imagen);
?>
