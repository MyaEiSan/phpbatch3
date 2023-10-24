<?php 

//Same Method Name has different implementation of that method

class language{

    public $name;
    public $citizen;

    public function __construct($val1,$val2)
    {
        $this->name = $val1;
        $this->citizen = $val2;
    }

    public function speak(){
        echo "Say Something... <br/>";
    }
}

class burmese extends language{

    public function speak(){
        echo "Hello Mingalarpar... <br/>";
    }
}

class thai extends language{

    public function speak(){
        echo "Hello Sawadikap... <br/>";
    }
}

echo "This is Polymorphism Concept <br/>";

$obj1 = new burmese("Honey Nway Oo","Burmese");
echo $obj1->name;//Honey Nway Oo
echo "<br/>";
echo $obj1->citizen;//Burmese
echo "<br/>";
$obj1->speak();//Hello Mingalarpar...



$obj2 = new thai("Phi Chi","Thai");
echo $obj2->name;//Phi Chi
echo "<br/>";
echo $obj2->citizen;//Thai
echo "<br/>";
$obj2->speak();//Hello Sawadikap...



echo "<hr/>";

?>