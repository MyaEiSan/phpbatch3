<?php 

require_once "./music.php";

require_once "./video.php";

$music = new music();
$music->play();

$video = new video();
$video->play();

?>