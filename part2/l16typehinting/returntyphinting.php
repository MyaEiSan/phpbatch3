<?php 
declare(strict_types=1);

ini_set('display_errors',0);
// Note :: must return 

class myhint8{

    public function getdata($val){
        return $val;
    }
}

echo "This is Return Type hinting <br/>";

$obj8 = new myhint8();
echo $obj8->getdata("aungaung"); //aungaung 
echo $obj8->getdata(10); //10
echo $obj8->getdata(100); //100
echo $obj8->getdata(25.68); //25.68
echo $obj8->getdata(true); //1 
echo $obj8->getdata(['red','green','blue']); 

echo "<hr/>";

class myhint9{
    public function getdata(string $val):string{
        return $val;
    }
}

$obj9 = new myhint9();
echo $obj9->getdata("aungaung"); //aungaung

echo "<hr/>";

class myhint10{
    public function getdata(int $val):int{
        return $val;
    }
}

$obj10 = new myhint10();
echo $obj10->getdata(100); // 100

echo "<hr/>";

class myhint11{
    public function getdata(int $x,string $y):int{
        return $x+$y;
    }
}

$obj11 = new myhint11();
echo $obj11->getdata(10,"200"); // 100

echo "<hr/>";

class myhint12{
    public function getdata(bool $val):bool{
        return $val;
    }
}

$obj12 = new myhint12();
echo $obj12->getdata(true); // 100

echo "<hr/>";

class myhint13{
    public function getdata(float $val):float{
        return $val;
    }
}

$obj13 = new myhint13();
echo $obj13->getdata(100); // 100
echo "<br/>";
echo $obj13->getdata(25.68); // 25/68

echo "<hr/>";


?>