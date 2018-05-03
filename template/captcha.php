<?php
	session_start();
	$string = "";
	for ($i = 0; $i < 5; $i++)
		$string .= chr(rand(97, 122));
	
	$_SESSION['rand_code'] = $string;

	$dir = "fonts/";

	$image = imagecreatetruecolor(170, 60);
	$black = imagecolorallocate($image, 10, 110, 0);
	$color = imagecolorallocate($image, 200, 180, 90); // Цвет символов на картинке
 
	$bg = imagecolorallocate($image, 255, 255, 0); // фоновое изображение картинки

	imagefilledrectangle($image,0,0,399,99,$white);
	imagettftext ($image, 30, 0, 10, 40, $color, $dir."verdana.ttf", $_SESSION['rand_code']);

	header("Content-type: image/png");
	imagepng($image);
?>