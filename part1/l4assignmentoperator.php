<?php 
// Assignment Operators
// =
// +=
// -=
// *= 
// /=
// %= 
// ++ 
// --

// Assign ( = )
$city = ""; //Declare
$city = NULL; //Declare
$city = "Yangon"; //Assign or Initialize 
$city = "Mandalary"; //Overwrite or Reassign 

echo $city;
echo "<br/>";

$x = 100;
$y = 200;
// echo $x; //result = 100
// $x = $y;
// echo $x; //result = 200
$x = $y + $x;
echo $x; // result = 300

echo "<hr/>";

// Increment & Decrement (++,--);
$i = 10;
echo $i;
echo "<br/>";
// $i = $i + 1;
// echo $i; //result = 11
// echo "<br/>";
$i += 1;
echo $i; //result = 11
echo "<br/>";
// $i++;
// echo $i; //result = 11
// echo "<br/>";
// echo $i; //result = 11
// echo "<br/>";

$y = 20;
echo $y;
echo "<br/>";
// $y = $y - 1;
// echo $y; //result = 19
// $y -= 1;
// echo $y; //result = 19
$y--;
echo $y; //result = 19

echo "<hr/>";

$num3;
$num3 = 100;
// $num3 += 40;
// echo $num3; //result = 140
// $num3 -= 40;
// echo $num3; //result = 60
// $num3 *= 40;
// echo $num3; //result = 4000
// $num3 /= 40;
// echo $num3; //result = 2.5 
$num3 %= 40;
echo $num3; //result = 20 
?>