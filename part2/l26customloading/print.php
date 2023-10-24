<?php 
require_once("./mycustomload.php");

use gallery\slideshow as viewer;
use gallery\slideshow\picture as picture;

mycustomload::loader("music");
$music = new music();
$music->play();


mycustomload::loader("video");
$video = new video();
$video->play();

mycustomload::loader("gallery\photo");
$photo = new gallery\photo();
$photo->play();

mycustomload::loader("gallery\animateshow\portrait");
$portrait = new gallery\animateshow\portrait();
$portrait->play();

mycustomload::loader("gallery\slideshow\image");
$image = new viewer\image();
$image->play();


mycustomload::loader("gallery\slideshow\picture");
$picture = new picture();
$picture->play();

?>