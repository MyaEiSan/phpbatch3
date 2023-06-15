<?php 
// if statement

echo "hello";
echo "<br/>";

$x = 10;
$y = 20;

if($x > $y){
    echo "Your condition is yes";
}

if($x < $y){
    echo "Your condition is yes";
}

// if else

if($x > $y){
    echo "Yes x greater than y";
}else{
    echo "No, x lessthan y";
}

echo "<br/>";

if($x < $y) echo "Yes, x less than y"; else echo "No, x greater than y";

if($x < $y)
echo "Yes, x less than y";
else 
echo "No, x greater than y";

echo "<br/>";

$color = "gray";
$colorvalue = $color; //Assign by refrence 

// echo $color;
// echo $colorvalue;

// if($colorvalue === "red"){
//     echo "My fav color is red";
// }else{
//     echo "I hate red color";
// }

// if($colorvalue === "red"){
//     echo "My fav color is $color";
// }else{
//     echo "I hate $color color";
// }

if($colorvalue === "red"){
    echo "My fav color is ".$color;
}else{
    echo "I hate ".$color." color";
}

echo "<hr/>";

//Logical Operator 
// &&(And) || (OR) !(NOT)

$a = 100;
$b = 200;
$c = 300;

if($a < $b && $b > $c){
    echo "it is true";
}else{
    echo "it is false";
}

echo "<br/>";

if($a < $b && $b < $c){
    echo "it is true";
}else{
    echo "it is false";
}

echo "<br/>";

if($a < $b || $b > $c){
    echo "it is true";
}else{
    echo "it is false";
}

echo "<br/>";

if($a < $b || $b > $c && $a < $c){
    echo "it is true";
}else{
    echo "it is false";
}

echo "<br/>";

// true        false       false  result = true
if($a < $b || $b > $c && $a > $c){
    echo "it is true";
}else{
    echo "it is false";
}

echo "<hr/>";

// true          false      false  result = false
         // true            false  
if(($a < $b || $b > $c) && $a > $c){
    echo "it is true";
}else{
    echo "it is false";
}

echo "<hr/>";


if(!($a < $b)){
    echo "it is true";
}else{
    echo "it is false";
}

echo "<hr/>";

// if elseif else 

if($b > $c){
    echo "it is true";
}elseif($b === 200){
    echo "it is equal";
}else{
    echo "it is false";
}

echo "<br/>";

if($b > $c)echo "it is true"; elseif($b === 200) echo "it is equal"; else echo "it is false";


echo "<br/>";

if($b > $c)
    echo "it is true";
elseif($b === 200)
    echo "it is equal";
else 
    echo "it is false";

echo "<br/>";

// switch(condition){
//     case label1: 
//         // code to be executed;
//         break;
//         case label2:
//             code to be executed;
//         break;
//         ...... 
//         default:
//         code to be executed;
// }

$phone = "iphone";

switch($phone){
    case "sony":
        echo "i can't buy sony phone";
    break;
    case "iphone":
        echo "i hate apple product";
    break;
    case "mi":
        echo "oki , i can buy";
    break;
    case "samsung":
        echo "my fav mobile product is samsung";
    break;
    default: 
        echo "i love keypad";
}

?>