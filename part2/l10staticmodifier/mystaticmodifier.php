<?php 

class mystaticmodifier{

    // Static properties
    public static $count = 0;

    // Non-static properties
    public $idx = 0;


    // Static Method

    // Non-static Method 

    public function getvalue(){

        self::$count++;
        echo self::$count . "<br/>";

        $this->idx++;
        echo $this->idx . "<br/>";
    }

    public function getresult(){

        self::$count++;
        echo self::$count . "<br/>";

        $this->idx++;
        echo $this->idx . "<br/>";
    }
}

class baby1 extends mystaticmodifier {

}

class baby2 extends mystaticmodifier {
    
    public function getmore(){

        static::$count++;
        echo static::$count . "<br/>";

        $this->idx++;
        echo $this->idx . "<br/>";
    }

}


echo "This is Static Modifier <br/>";

$obj = new mystaticmodifier();
echo $obj::$count; // 0 Calling from Static property
echo "<br/>";
echo $obj->idx; // 0 Calling from Non-static property 
echo "<hr/>";

echo "<hr/>";

$obj->getvalue(); //1 1
$obj->getvalue(); //2 2
$obj->getvalue(); //3 3
$obj->getvalue(); //4 4 

$obj->getresult(); //5 5
$obj->getresult(); //6 6
$obj->getresult(); //7 7
$obj->getresult(); //8 8

echo "<hr/>";

$bcj = new mystaticmodifier();

$bcj->getvalue(); // 9 1
$bcj->getvalue(); // 10 2 
$bcj->getvalue(); // 11 3
$bcj->getvalue(); // 12 4

$obj->getresult(); //13 5
$obj->getresult(); //14 6
$obj->getresult(); //15 7
$obj->getresult(); //16 8

echo "<hr/>";

$bb1 = new baby1();

$bb1->getvalue(); // 17 1
$bb1->getvalue(); // 18 2
$bb1->getvalue(); // 19 3
$bb1->getvalue(); // 20 4

$bb1->getresult(); // 21 5
$bb1->getresult(); // 22 6
$bb1->getresult(); // 23 7
$bb1->getresult(); // 24 8

echo "<hr/>";

$bb2 = new baby2();

$bb2->getmore(); // 25 1
$bb2->getmore(); // 26 2
$bb2->getmore(); // 27 3
$bb2->getmore(); // 28 4

?>