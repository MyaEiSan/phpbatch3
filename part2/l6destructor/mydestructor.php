<?php 

class mydestructor{
  public $num1 = 100;
  private $num2 = 200;
  protected $num3 = 300;
  public $msg = "Total result is ";

  public function __construct(){
    $result = $this->num1 + $this->num2 + $this->num3; 
    echo "$this->msg : $result <br/>";
  }

  public function car($brand){
    echo "I bought a new ${brand} car. <br/>";
  }

  // Note:: Destructor can't set parameter
  public function __destruct(){
    echo "I am start working by automatically after all above ! hee hee :P <br/>";
  }

}

echo "This is Destructor <br/>";
$obj = new mydestructor();

$obj->car("Toyota");

echo "<hr/>";



?>