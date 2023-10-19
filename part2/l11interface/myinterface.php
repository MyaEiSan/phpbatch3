<?php 

ini_set('display_errors',0);
// Note :: Interface can't include body
            // Modifier must be public in interface , cuz we need to override 
            // A class must use the implements keyword.


interface article{

    public function create();
    public function read($id);
    public function update($id, $title);
    public function delete();
}

class myinterface implements article{
    
    public function setid(){
        echo "I am setid ID. <br/>";
    }

    public function create(){
        echo "I am create article. <br/>";
    }

    public function read($id){
        echo "I am read article. ID is ${id} <br/>";
    }

    public function update($id, $title){
        echo "I am update article. ID is ${id} and Title is ${title} <br/>";
    }

    public function delete(){
        echo "I am delete article. ID is ${id} <br/>";
    }
}

echo "This is Interface <br/>";

$obj = new myinterface();
$obj->setid();

$obj->create();
$obj->read(10);
$obj->update(10, "This new article 10");
$obj->delete();


echo "<hr/>";

?>