<?php 

function myfun3(...$val){
    echo $val[1]."<br/>";
}

myfun3("maung maung","aung aung","zaw zaw"); //aung aung 
myfun3(["maung maung","aung aung","zaw zaw"],"su su");

function myfun4(...$val):string{
    return $val[2] . $val[0][2] . $val[1];
}

echo myfun4(["maung maung","aung aung","zaw zaw"]," is my elder brothers","Mr.");

echo "<br/>";

function myfun5(string $name,int ...$age):string{
    return "${name} is ${age[0]} years old <br/>";
}

echo myfun5("su su", 25); // su su is 25 years old 

function myfun6(int ...$numbers):int{
    return array_sum($numbers);
}

echo myfun6(1,2,3);

echo "<hr/>";