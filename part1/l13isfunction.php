<?php

// is_string(variable) Function 

$val1 = "Save Myanmar";
echo "val1 is ". is_string($val1). "<br/>";

$val2 = 0;
echo "val2 is ".is_string($val2). "<br/>";

$val3 = 50;
echo "val3 is ".is_string($val3)."<br/>";

// *****
$val4 = "50";
echo "val4 is ".is_string($val4). "<br/>";

$val5 = true;
echo "val5 is ".is_string($val5)."<br/>";

$val6 = "";
echo "val6 is ".is_string($val6)."<br/>";

echo "<hr/>";


// is_numeric(variable) Function
// is_int(variable) Function / is_integer (variable) Function

$val1 = 50;
echo "val1 is ". is_numeric($val1). "<br/>"; //1
echo "val1 is ". is_int($val1). "<br/>"; //1
echo "val1 is ". is_integer($val1). "<br/>"; //1

$val2 = 34.56;
echo "val2 is ". is_numeric($val2). "<br/>"; //1
echo "val2 is ". is_int($val2). "<br/>"; //1
echo "val2 is ". is_integer($val2). "<br/>"; //1 

// ****
$val3 = "50";
echo "val3 is ". is_numeric($val3). "<br/>"; //1
echo "val3 is ". is_int($val3). "<br/>"; //1
echo "val3 is ". is_integer($val3). "<br/>"; //1 

echo "<hr/>";

// is_float(variable) Function 

$val1 = 40; 
echo "val3 is ".is_float($val1) ."<br/>";

$val2 = 34.56; 
echo "val3 is ".is_float($val2) ."<br/>"; // 1

$val3 = "34.56"; 
echo "val3 is ".is_float($val3) ."<br/>";

echo "<hr/>";

// is_bool(variable) Function 
$val1 = false; 
$val1 = FALSE;
echo "val1 is ". is_bool($val1) . "<br/>"; // 1

$val2 = "true"; 
echo "val2 is ". is_bool($val2) . "<br/>"; // 1

$val3 = 1; 
echo "val3 is ". is_bool($val3) . "<br/>"; // 1

echo "<hr/>";

// is_array(variable) Function 

$val1 = "Help Myanmar";
echo "val1 is ".is_array($val1). "<br/>";

// $val2 = ["aung aung","su su"];
$val2 = array("aung aung","susu");
echo "val2 is ".is_array($val2). "<br/>"; //1 

echo "<hr/>";

// is_null(variable) Function 
$val1 = 0;
echo "val1 is ".is_null($val1)."<br/>"; 

$val2 = null;
echo "val2 is ".is_null($val2)."<br/>"; 

$val3 = NULL;
echo "val3 is ".is_null($val3)."<br/>"; 

$val4 = "null";
echo "val4 is ".is_null($val4)."<br/>"; 

echo "<hr/>";


// is_double
// is_object





// empty(variable) Function VS isset(variable)

// The following values are empty:
// 0
// 0.0
// "0"
// ""
// NULL 
// FALSE 
// array 
// []

$val1 = [];

if(empty($val)){
    echo "Your variable 1 is empty";
}

if(isset($val)){
    echo "Your variable 1 is set";
}

echo "<hr/>";




// gettype(variable) Function

$val1 = 50;
echo var_dump($val1). "<br/>";
echo gettype($val1). "<br/>";

$val2 = 5.6;
echo var_dump($val2). "<br/>";//float
echo gettype($val2) . "<br/>"; //double 

$val3 = "SAVE CRPH";
echo var_dump($val3). "<br/>";
echo gettype($val3). "<br/>";

$val4 = array();
echo var_dump($val4). "<br/>";
echo gettype($val4). "<br/>";

$val5 = false;
echo var_dump($val5). "<br/>";
echo gettype($val5). "<br/>";

$val6 = NULL;
echo var_dump($val6). "<br/>";
echo gettype($val6). "<br/>";

echo "<hr/>";

//settype(variable,type) Function

$val1 = "32";
var_dump($val1);
echo "<br/>";
settype($val1,"integer");
var_dump($val1);
echo "<br/>";
echo "<br/>";

$val2 = 50;
var_dump($val2);
echo "<br/>";
settype($val2,"string");
var_dump($val2);
echo "<br/>";
echo "<br/>";

$val3 = true;
var_dump($val3);
echo "<br/>";
settype($val3,"integer");
var_dump($val3);
echo "<br/>";
echo "<br/>";


?>