<?php 

ini_set('display_errors',0);

class mymagic{

    public $num;
    private $name;
    protected $age;

    public function __construct($val){

        // property_exists(classname string,propertyname string);

        // if(property_exists('mymagic','num')){
        //     echo $this->num = $val;
        // }else{
        //     echo "Property doesn't exist.";
        // }

        // if(property_exists($this,'num')){
        //     echo $this->num = $val;
        // }else{
        //     echo "Property doesn't exist.";
        // }

        // if(property_exists('mymagic','name')){
        //     echo $this->name = $val;
        // }else{
        //     echo "Property doesn't exist.";
        // }

        // if(property_exists($this,'name')){
        //     echo $this->name = $val;
        // }else{
        //     echo "Property doesn't exist.";
        // }

        // if(property_exists('mymagic','age')){
        //     echo $this->age = $val;
        // }else{
        //     echo "Property doesn't exist.";
        // }

        if(property_exists($this,'age')){
            echo $this->age = $val;
        }else{
            echo "Property doesn't exist.";
        }


    }
}

class mymagicone{

    // မရှိတဲ့ properties ကို ခေါ်မိတဲ့အခါ အလုပ်လုပ်မှာ
    public function __get($var){
        echo "You not yet defined these \"$var\" properties.<br/>";
    }

    public function __set($var,$val){
        echo "You not yet defined these \"$var\" properties. so your value = \"$val\" is here.<br/>";
    }
}


class mymagictwo{

    // မရှိတဲ့ non-static method တွေကိုခေါ်မိရင် အလုပ်လုပ်မှာ
    // For Non-Static Method 
    public function __call($method,$vals){
        // echo "You not yet defined these \"${method}\" non-static method.so your value = \"${val}\" is here.<br/>";
        echo "You not yet defined these \"${method}\" non-static method.so your value ="."<pre>".print_r($vals,true)."</pre>"." is here <br/>";

    }

    // မရှိတဲ့ static method တွေကိုခေါ်မိရင် အလုပ်လုပ်မှာ
    // For Static Method
    public static function __callstatic($method,$vals){
        echo "You not yet defined these \"${method}\" static method.so your value ="."<pre>".print_r($vals,true)."</pre>"." is here <br/>";
    }
}

class mymagicthree{

    public $data;

    public function __construct(){
        $this->data = [1,2,3,4,5];
    }

    // serialize လုပ်တဲ့အခါ အလုပ်လုပ်မှာ
    public function __sleep(){
        echo "Hello sir,i am working.cuz you trying to serialize.<br/>";
    }
}

class mymagicfour{
    public $data;

    public function __construct(){
        $this->data = [1,2,3,4,5];
    }

    public function __wakeup(){
        echo "Hello sir,i am working.cuz you trying to unserialize. <br/>";
    }
}


class mymagicfive{

    // class objet တစ်ခုကို method လိုမျိုးခေါ်မိတဲ့အခါ အလုပ်အလုပ်မှာ 
    public function __invoke(){
        echo "Hello sir,i am working.cuz you trying to print out your class object as method <br/>";
    }

}

class mymagicsix{
    
    // class object  ကို print out လုပ်တဲ့အခါ အလုပ်လုပ်မှာ
    public function __toString(){
        return "Hello sir, i am working.cuz you trying to print-out class object. <br/>";
    }
}


echo "This is Magic Methods. <br/>";

$obj = new mymagic(100);

echo "<hr/>";

$obj = new mymagicone();
$obj->greeting;
$obj->bye = "Thank You";

echo "<hr/>";

$obj2 = new mymagictwo();
$obj2->greeting();
$obj2->greeting("Morning");
$obj2->greeting("Morning","Afternoon","Evening");

echo "<hr/>";

$obj2::bye();
mymagictwo::bye("Thank You");
mymagictwo::bye("Thank You","Regards");

echo "<hr/>";

$obj3 = new mymagicthree();
serialize($obj3);

$obj4 = new mymagicfour();
$sridatas = serialize($obj4);
unserialize($sridatas);

echo "<hr/>";

$obj5 = new mymagicfive();
$obj5();

echo "<hr/>";

$obj6 = new mymagicsix();
echo $obj6;

echo "<hr/>";

?>