<?php 

// => Lambda Style 

function mycal($num1,$num2,$funone){
    $total = $num1 + $num2;
    $funone($total);
}

$fun = function($result){
    echo "Total result is = ${result} <br/>";
};

mycal(100,200,$fun); 

function showresult($addednum){
    echo "sum result is = ${addednum}";
}

$add = function($x,$y){
    return $x+$y;
};

showresult($add(100,500));

echo "<hr/>";


echo "This is Closure Function <br/>";

$num1 = 302;
$num2 = 402;

function colfun1(){
    global $num1, $num2;
    echo "This is regular function . my getting value is ".$num1 + $num2."<br/>";
}

colfun1(); 

$colfun2 = function() use($num1,$num2){
    echo "This is regular function. my getting value is ".$num1 + $num2."<br/>";
};

$colfun2(); 

echo "<hr/>";

function result($fun){
    $fun();
}

result(function() use($num1,$num2){
    echo "This is regular function. my getting value is ".$num1 + $num2."<br/>";
});

echo "<hr/>";
