<?php 

require_once('./Article.php');

$article = new Article();

// =>Select

// echo "<pre>".print_r($article->getarticles(),true)."</pre>";

// var_dump($article->getarticles());
// var_dump($article->getartilcebyid(1));
// var_dump($article->getartilcebyid(10));

// =>Insert 
// $data = ["title"=>"this is new article 11","content"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","user_id"=>3];
// $article->insertarticle($data);
// var_dump($article->getarticles());


// =>Update 
// $data = ["id"=>12,"title"=>"this is new article 12","content"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry.","user_id"=>1];
// $article->updatearticle($data);
// var_dump($article->getarticles());

// =>delete 
$article->deletearticle(10);
var_dump($article->getarticles());



?>