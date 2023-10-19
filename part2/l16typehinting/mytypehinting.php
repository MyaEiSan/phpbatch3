<?php

// Note :: void is a return-only for type declaration indication  assign. the function does not return a value 

declare(stript_types=1);

class mytypehinting{

    public $name;

    public function getname():string{
        return $this->name;
    }

    public function setname(string $val):void{
        $this->name = $val;
    }

}

class person extends mytypehinting{

    public $userid;
    public $username;

    function setinfo(array $info):void{
        $this->userid = $info['id'];
        $this->username = $info['name'];
    }
}

echo "This is type hinting <br/>";

$obj1 = new mytypehinting();
$obj1->setname("aung kyaw kyaw");
echo $obj1->getname();

echo "<hr/>";

$obj2 = new person();
$obj2->setname("su su");
echo $obj2->getname(); //su su
echo "<br/>";

$datas = ["id"=>1,"name"=>"Honey Nway Oo"];

echo $obj2->setinfo($datas);

echo $obj2->userid;
echo "<br/>";
echo $obj2->username;

echo "<hr/>";




?>