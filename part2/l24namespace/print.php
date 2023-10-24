<?php 

require_once "./music.php";

require_once "./video.php";

require_once "./gallery/photo.php"; //method 1


use gallery\photo;

$music = new music();
$music->play();

$video = new video();
$video->play();

// method 1
// $photo = new gallery\photo();
// $photo->play();

// method 2
$photo = new photo();
$photo->play();

?>