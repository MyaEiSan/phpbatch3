<?php 

class mysro{
    const GREETING = "Hello Friend. Good evening from Thailand";

    public $fullname = "Aung Kyaw Kyaw";
}

echo "This is Scope Resolution Operator."."<br/>";

$obj = new mysro();
echo $obj->fullname. "<br/>"; // Aung Kyaw Kyaw
echo $obj::GREETING . "<br/>"; //Hello Friend. Good evening from Thailand
echo mysro::GREETING . "<br/>"; //Hello Friend. Good evening from Thailand

echo "<hr/>";

?>