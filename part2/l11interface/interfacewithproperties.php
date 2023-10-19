<?php 

interface post{

    public function setid($id);
    public function create();
    public function read($id);
    public function update($id, $title);
    public function delete();
}

class interfacewithproperties implements post{
    
    private $id;
    private $title;

    public function setid($id){
        $this->id = $id;
    }

    public function create(){
        echo "I am create article. <br/>";
    }

    public function read($id){
        $this->id = $id;
        echo "I am read article. ID is $this->id <br/>";
    }

    public function update($id, $title){
        $this->id = $id;
        $this->title = $title;
        echo "I am update article. ID is $this->id and Title is $this->title <br/>";
    }

    public function delete(){
        echo "I am delete ID $this->id <br/>";
    }
    
}
echo "This is Interface with Properties <br/>";

$obj = new interfacewithproperties();

$obj->setid(50);
$obj->create();
$obj->read(30);
$obj->update(20, "This is new post 20");
$obj->delete();

echo "<hr/>";

?>