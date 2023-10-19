<?php 

// Note ::define() can't set in class method 

class mysro{

    const GREETING = "Hello Friend. Good evening from Thailand";
    const THANKS = 'Hi Friend. Thanks for visiting our country.';

    public $fullname = "Honey Nway Oo";

    public function sayhi() {
        echo self::GREETING;
    }

    public function saythanks() {
        echo static::THANKS;
    }

    public function __construct(){
        echo "I am start working by automatically from Main Class. hee hee :P";
    }

    public function asset(){
        echo "I bought a new Toyota Car. <br/>";
    }
}


class child1 extends mysro{

}

class child2 extends mysro{

    const GREETING = "Hello Friend. Good Morning from Srilanka.";
    const THANKS = 'Hi Friend. See you again.';

    public function sayhifi(){
        echo self::GREETING; //in here echo self and static are same result ,
    }

    public function saybye(){
        echo static::THANKS; //in here echo self and static are same result ,
    }
}

class child3 extends mysro{

    // Method Override - Parent Method Override 
    public function __construct(){
        parent::__construct();
        echo "I am start working by automatically from Sub class <br/>";
    }

    public function asset(){
        parent::asset();
        echo "I bought a new Mazada Car. <br/>";
    }
}

echo "This is Scope Resolution Operator."."<br/>";

$obj = new mysro(); // I am start working by automatically from Main Class. hee hee :PHoney Nway Oo
echo $obj->fullname. "<br/>"; // Honey Nway Oo
echo $obj::GREETING . "<br/>"; //Hello Friend. Good evening from Thailand
echo mysro::GREETING . "<br/>"; //Hello Friend. Good evening from Thailand

$obj->sayhi(); // Hello Friend. Good evening from Thailand
echo "<br/>";
$obj->saythanks(); // Hi Friend. Thanks for visiting our country.

echo "<hr/>";

echo "This is Scope Resolution Operator Child 1."."<br/>";

$ch1 = new child1(); // I am start working by automatically from Main Class. hee hee :PHoney Nway Oo
echo $ch1->fullname . "<br/>"; // Honey Nway Oo
echo $ch1::GREETING . "<br/>"; // Hello Friend. Good evening from Thailand
echo child1::GREETING . "<br/>"; // Hello Friend. Good evening from Thailand

$obj->sayhi(); // Hello Friend. Good evening from Thailand
echo "<br/>";
$obj->saythanks(); // Hi Friend. Thanks for visiting our country.

echo "<hr/>";

echo "This is Scope Resolution Operator Child 2."."<br/>";

$ch2 = new child2(); // I am start working by automatically from Main Class. hee hee :PHoney Nway Oo
echo $ch2->fullname . "<br/>"; // Honey Nway Oo
echo $ch2::GREETING . "<br/>"; // Hello Friend. Good Morning from Srilanka
echo child2::GREETING . "<br/>"; // Hello Friend. Good Morning from Srilanka
echo child2::THANKS . "<br/>"; // Hi Friend. See you again.


$ch2->sayhi(); // Hello Friend. Good evening from Thailand //echo with self::
echo "<br/>";
$ch2->saythanks(); // Hi Friend. See you again. // echo with static::

echo "<br/>";
$ch2->sayhifi(); // Hello Friend. Good evening from Thailand //echo with self::
echo "<br/>";
$ch2->saybye(); // Hi Friend. See you again. // echo with static::

echo "<hr/>";


echo "This is Scope Resolution Operator Child 3."."<br/>";

$ch3 = new child3(); // I am start working by automatically from Main Class. hee hee :PHoney Nway Oo
echo $ch3->fullname . "<br/>"; // Honey Nway Oo
echo $ch3::GREETING . "<br/>"; // Hello Friend. Good evening from Thailand
echo child1::THANKS . "<br/>"; // Hi Friend. Thanks for visiting our country.

$ch3->sayhi(); //Hello Friend. Good evening from Thailand
echo "<br/>";
$ch3->saythanks(); // Hi Friend. Thanks for visiting our country.
echo "<br/>";
$ch3->asset(); // I bought a new Toyota Car. / I bought a new Mazada car.

echo "<hr/>";



?>