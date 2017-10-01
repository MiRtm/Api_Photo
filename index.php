<?php
$background = 'profilename.jpg';
$filefont = 'Mj_Titr Particle_0.ttf';
$fontsize= '100';
$Height = '400';
$Width = '200';
$Rotation = '25';
$color = $_GET['color'] or 'white';
if(!$_GET['text']) {
	$string="تیم کرول";
} else {
	$string=$_GET['text'];
}
header("Content-type: image/png");
include("fagd.php");
$im = imageCreateFromJPEG($background);
if($color == 'white'){
$color = imagecolorallocate($im, 255, 255, 255);
}elseif($color == 'grey'){
$color = imagecolorallocate($im, 128, 128, 128);
}elseif($color == 'black'){
$color = imagecolorallocate($im, 0, 0, 0);
}elseif($color == 'test'){
$color = imagecolorallocate($im, 238, 225, 173);
}else{
$color = imagecolorallocate($im, 238, 225, 173);
}

// The text to draw
$text = fagd($string,'fa','Mj_Titr Particle_0');
// Replace path by your own font path

$font = dirname(__FILE__).'/'.$filefont;

// Add some shadow to the text


// Add the text
imagettftext($im, $fontsize, $Rotation , $Width, $Height, $color , $font, $text);

// Using imagepng() results in clearer text compared with imagejpeg()
imagepng($im);
imagedestroy($im);
?>
