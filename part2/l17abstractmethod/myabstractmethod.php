<?php 

abstract class info{
    abstract protected function name();
    abstract protected function age();
    abstract protected function professional($sex);

    public function getname(){
        return $this->name();
    }

    public function getage(){
        return $this->age();
    }

    public function getprofessional($sex){
        return $this->professional($sex);
    }
}

class boyclass extends info{
    public function name(){
        return "Ko Tha";
    }
    public function age(){
        return 25;
    }

    public function professional($sex){
        switch($sex){
            case 'male':
                $job = "Engineer";
                break;
            case 'female':
                $job = "Doctor";
                break;
            default: 
                $job = "Developer";
                break;
        }

        return $job;
    }
}

class girlclass extends info{
    public function name(){
        return "Ms.July";
    }
    
    public function age(){
        return 30;
    }
    
    public function professional($sex){
        switch($sex){
            case 'male':
                $job = "Engineer";
                break;
            case 'female':
                $job = "Doctor";
                break;
            default: 
                $job = "Developer";
                break;
        }

        return $job;
    }
}

echo "<hr/>";

$objboy = new boyclass();

$boyname = $objboy->name();
$boyage = $objboy->age();
$boypro = $objboy->professional('male');

echo "${boyname} is a ${boyage} years old & he is an ${boypro} <br/>";


$objgirl = new girlclass();

$girlname = $objgirl->name();
$girlage = $objgirl->age();
$girlpro = $objgirl->professional('female');

echo "${girlname} is a ${girlage} years old & she is a ${girlpro} <br/>";

echo "<hr/>";
