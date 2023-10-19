<?php 

class staticvsnonstatic{

    // Member Variables 
     // Non-static properties
     public $fullname = "Honey Nway Oo";

    // Static properties
    public static $city = "Mandalay";

    // Constant 
    const GENDER = "Female";
    

    // Member Functions
    // Non-static Method 
    // (Non-static method = static property & non-static property can call)
     // (Non-static method = static method & non-static method can call)
    public function getname(){
        echo "I am Non-Static method. <br/>";

        echo "Name is $this->fullname <br/>";
    }

    public function getcity(){
        echo "I am Non-Static method. <br/>";

        echo "City is ". self::$city." & Hometown is ".static::$city." <br/>";
    }

    public function getgender(){
        echo "I am Non-Static method. <br/>";

        echo "Gender is ". self::GENDER." <br/>";
    }

    public function car(){
        echo "I am Non-Static method. <br/>";

        $brand = static::carbrand();

        echo "I bought a new ${brand} car. <br/>";
    }

    public function mobilebrand(){
        return "iPhone 14 Pro Max";
    }

    public function beforebuy(){
        echo "I am Non-Static method. <br/>";

        $brand = $this->mobilebrand();
        echo "I am thinking about to buy a new ${brand} . <br/>";
    }

    // Static Method
    // (Static method can not use non-static property)
    // (Static method can not use non-static method )
    public static function getstaticcity(){
        echo "I am Non-Static method. <br/>";

        echo "City is ". self::$city." & Hometown is ".static::$city." <br/>";
    }

    public static function getstaticgender(){
        echo "I am Non-Static method. <br/>";

        echo "Gender is ". self::GENDER." <br/>";
    }

    public static function carbrand() {
        return "Toyota LEXUS LX570";
    }

    // can't set 
    // public static function mobile(){
    //     echo "I am Static method.";

    //     $brand = $this->mobilebrand();

    //     echo "I bought a new ${brand} <br/>";
    // }


    public static function afterbuy(){
        echo "I am Static method.";

        $brand = self::carbrand();

        echo "I am so lovely my new ${brand} car. <br/>";
    }


}



echo "This is Static vs Nonstatic Modifier <br/>";

$obj = new staticvsnonstatic();
// Calling Non Static Property
$obj->fullname; // Honey Nway Oo
echo "<br/>";

// Calling Static Property 
echo $obj::GENDER; //Female 
echo "<br/>";

echo "<hr/>";
// Callilng Non-Static Mehtod 

$obj->getname(); // Name is Honey Nway Oo 
$obj->getcity(); //I am Non-Static method.
$obj->getgender(); //Gender is Female 

echo "<hr/>";
// Calling Static Method 
$obj::getstaticcity(); //City is Mandalay & Hometown is Mandalay
$obj::getstaticgender(); //Gender is Female


staticvsnonstatic::getstaticcity();//City is Mandalay & Hometown is Mandalay
staticvsnonstatic::getstaticgender();//Gender is Female

echo "<hr/>";

$obj->car();

echo "<hr/>";

// $obj::mobile(); // error coz Static method can not call Non-Static method

echo "<hr/>";

$obj->beforebuy(); //I am thinking about to buy a new iPhone 14 Pro Max

echo "<hr/>";

$obj::afterbuy(); //I am so lovely my new Toyota LEXUS LX570 car.

?>

<!-- 25ST -->
