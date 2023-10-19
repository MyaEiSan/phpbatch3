<?php 

class lady{

    public $name = "Honey Nway Oo";

    public function friend(){
        return "My friend name is $this->name";
    }

}

function showresult(lady $val){
    echo $val->friend();
}

echo "This is Object Type hinting <br/>";

showresult(new lady());

echo "<hr/>";

class brand{

    public function getjpnbrand(){
        return "Toyota Brand <br/>";
    }

    public function getchinabrand(){
        return "BYD Brand <br/>";
    }

}

class car{

    public function getbrand(brand $val){
        return $val;
    }

    public function getjpn(brand $val){
        return $val->getjpnbrand();
    }

    public function getchn(brand $val){
        return $val->getchinabrand();
    }
}

$objbrand = new brand();
$objcar = new car();

echo $objcar->getbrand($objbrand)->getjpnbrand();
echo $objcar->getbrand($objbrand)->getchinabrand();

echo $objcar->getjpn($objbrand);
echo $objcar->getchn($objbrand);


echo "<hr/>";
?>