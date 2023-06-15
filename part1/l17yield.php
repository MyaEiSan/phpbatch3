<?php 

// yield Keyword

function funone(){
    yield "1";
    yield "2";
    yield "3";
    yield "4";
    yield 5;
}

$numbers = funone();

foreach($numbers as $number){
    echo $number."<br/>";
}

echo "<hr/>";

function funtwo(){
    $index = 0;

    while($index < 10){
        yield $index;
        $index++;
    }
}

$numbers = funtwo();

foreach($numbers as $number){
    echo $number."<br/>";
} 

echo "<hr/>";

// =>yield with from

function funthree(){
    // yield from [1,2,3,4,5];

    // yield from [1,2,3,4,5];
    // yield 6;

    yield from [1,2,3,4,5];
    yield from [6,7,8,9,10,11,12];
}

foreach(funthree() as $number){
    echo $number."<br/>";
}

echo "<hr/>";

?>