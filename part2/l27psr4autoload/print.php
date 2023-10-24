<?php 

// require_once('./app/music.php');
// use app\music;

require_once("./vendor/autoload.php");

use app\music;
use app\video;
use app\gallery\photo;
use app\gallery\animateshow\portrait;
use app\gallery\slideshow as slider;
use app\gallery\slideshow\picture;
use app\Models\Article;
use config\auth;

$music = new music();
$music->play();

$video = new video();
$video->play();

$photo = new photo();
$photo->play();

$music = new music();
$music->play();

$portrait = new portrait();
$portrait->play();

$image = new slider\image();
$image->play();

$picture = new picture();
$picture->play();


$Article = new Article();
$Article->index();

$auth = new auth();
$auth->login();

?>

<!-- composer dump-autoload  -->
<!-- composer dump-autoload -o -->