<?php 

// Super Class or Main Class
class myinheritance{

    protected $fullname = "Nandar";
    public $city = "Mandalay";
    public $email = "nandar@gmail.com";
    public $password = "123456";

    public function getaccess(){
        echo "This is site login : email is $this->email & password is $this->password. <br/>";
    }

    public function getinfo(){
        echo "Name is $this->fullname & City is $this->city. <br/>";
    }
}


// Sub Class or Child Class
class devlogin extends myinheritance{

    public function githublogin(){
        echo "This is github login : email is $this->email . Profile name is $this->fullname. <br/>";
    }
}

class sociallogin extends myinheritance{

    // Own Method 
    public function gmaillogin(){
        echo "This is gmail login: email is $this->email. Profile name is $this->fullname. <br/>";
    }

    // Own Method 
    public function facebooklogin(){
        echo "This is facebook login: email is $this->email. Profile name is $this->fullname. <br/>";
    }

    // Method Override

    public function getinfo(){

        // Properties override 
        $this->fullname = "Hsu Lae";
        $this->city = "Bago";

        echo "Name is $this->fullname & City is $this->city. <br/>";
    }
}




echo "This is Inheritance"."<br/>";

$obj = new myinheritance();
$obj->getaccess();
$obj->getinfo();
echo "<hr/>";

echo "This is Inheritance"."<br/>";

$dev = new devlogin();
$dev->githublogin();
$dev->getaccess();
$dev->getinfo();

// Note:: public and protected can access from sub class . but private can't access from sub class 


echo "<hr/>";

echo "This is Inheritance"."<br/>";

$soc = new sociallogin();
$soc->gmaillogin();
$soc->facebooklogin();
$soc->getinfo();

echo "<hr/>";

?>
