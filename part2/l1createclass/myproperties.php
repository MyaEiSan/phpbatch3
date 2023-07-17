<?php 

// echo "hay";

// Define Class Object


// class classname {
//     // properties 
//     // methods
// }

// new classname(); //invoke class

class myproperties{
    
    //Properties 
    var $firstname = "Data Land";
    var $lastname = "Technology";

}

$obj = new myproperties();
echo "THis is Class Object <br/>";

echo $obj->firstname.$obj->lastname;
echo "<hr/>"

?>