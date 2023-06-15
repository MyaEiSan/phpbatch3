<?php 

// PHP Loops

// for 
// foreach 
// while 
// do...while

$colorones = ["red","green","blue","white","black","grey","pink"]; //indexed array 
var_dump($colorones);
echo "<br/>";
echo count($colorones);
echo "<br/>";
$coloroneskey = array_keys($colorones);
// echo $coloroneskey; //Array
echo "<br/>";
var_dump($coloroneskey);
echo "<br/>";
echo "<br/>";

// for loop
// for(statement1;statement2;statement3){
//     code to executed;
// }

// foreach loop

// foreach(mainarray as value){
    // code to be executed
// }

// foreach(mainarray as key=>value){
    // code to be executed
// }


// while loop

// start

// while(condition is true){
    // code to be executed;
    // inn or dec
// }

// do...while loop

// start 

// do{
//     code to be executed;
//     inn or dec
// }while(conditioin is true);


for($i = 0; $i < count($colorones); $i++){
    // echo "$i";
    // echo "<br/>";

    // echo "This is indexed array or manual array by forloop = index key is ".$i." and value is ".$colorones[$i];

    echo "This is indexed array or manual array by forloop = index key is ".$coloroneskey[$i]." and value is ".$colorones[$i]."<br/>";
}

echo "<hr/>";

$x = 1;

do{
    echo "this number is = $x <br/>";
    $x++; 
}while($x <= 5);

for($i = 0; $i < count($colorones); $i++){
    echo "$i";
    echo "<br/>";

    echo "This is indexed array or manual array by forloop = index key is ". $i . " and value ";

    echo "This is indexed array or manual array by forloop  = index key is ". $coloroneskey[$i]. " and value is ".$colorones[$i]."<br/>";
}

echo "<hr/>";

// foreach($colorones as $colorone){
//     echo "This is index array or manual array by foreach = ".$colorone . "<br/>";
// }

foreach($colorones as $key=>$colorone){
    echo "This is indexed array or manual array by foreach  = index key is ". $key. " and value is ".$colorone."<br/>";
}

echo "<hr/>";

$x = 0; 
while($x < count($colorones)){

    // echo $colorones[$x]."<br/>";
    // $x++;

    // echo "This is indexed array or manual array by foreach  = index key is ". $x. " and value is ".$colorones[$x]."<br/>";
    echo "This is indexed array or manual array by foreach  = index key is ". $coloroneskey[$x]. " and value is ".$colorones[$x]."<br/>";

    $x++;
}

echo "<hr/>";

$y = 0;

do{
    // echo "this is indexed array by dowhile = index key is ".$y." and value is ".$colorones[$y];
    echo "this is indexed array by dowhile = index key is ".$coloroneskey[$y]." and value is ".$colorones[$y];
    $y++;
}while($y < count($colorones));


echo "<hr/>";

$posts = [
    "postone"=>"this is news post one",
    "posttwo"=>"this is news post two",
    "postthree"=>"this is news post three",
    "postfour"=>"this is news post four",
]; // Associative array

$postskey = array_keys($posts);

var_dump($postskey);

for($x = 0 ; $x < count($posts); $x++){
    // echo "$x";
    // echo "<br/>";

    echo "This is associative array by forloop = index key is ".$postskey[$x]." and value is ".$posts[$postskey[$x]]."<br/>";

}

echo "<hr/>";

foreach($posts as $key=>$post){
    echo "This is associative array by forloop = key is ".$key." and value is ".$post."<br/>"; 
}

echo "<hr/>";

$x = 0;
while($x < count($posts)){
    echo "This is associative array by whileloop = key is ".$postskey[$x]." and value is ".$posts[$postskey[$x]]."<br/>"; 
    $x++;
}

echo "<hr/>";

$y = 0;

do{
    echo "This is associative array by dowhile = key is ".$postskey[$y]." and value is ".$posts[$postskey[$y]]."<br/>"; 
    $y++;
}while($y < count($posts));

echo "<hr/>";

$employees = [
    ["name"=>"Aung Aung","gender"=>"Male"],
    ["name"=>"Su Su","gender"=>"Female"],
    ["name"=>"Nu Nu","gender"=>"Female"],
    ["name"=>"Kyaw Kyaw","gender"=>"Female"],
    ["name"=>"Tun Tun","gender"=>"Male"]
];

$employeeskey = array_keys($employees);
var_dump($employeeskey);

// remove cover first array (multi array)
for($k = 0; $k < count($employees); $k++){
    $newkey = array_keys($employees[$employeeskey[$k]]);
    var_dump($newkey);
    // remove cover second array (asso array)

    for($j = 0; $j < count($newkey); $j++){
        // var_dump($employees[$k][$newkey[$j]]);

        echo "This is Multidimensional array by forloop  = key is ".$newkey[$j]." and value is ".$employees[$k][$newkey[$j]]."<br/>"; 
    }

}



foreach($employees as $index=>$employee){
    // echo $employee;

    foreach($employee as $key=>$value){
        // echo $value;

        echo "This is multidimensional array by foreach = key is ".$key." and value is ".$value."<br/>";
    }
}


$x = 0; 
$key = array_keys($employees);
while($x < count($employees)){

    // echo $x;
    $newkey = array_keys($employees[$key[$x]]);

    $y = 0;

    while($y < count($newkey)){
        echo "This is multidimensional array by while = key is ".$newkey[$y]." and value is ".$employees[$x][$newkey[$y]]."<br/>";
        $y++;
    }

    $x++;
}

echo "<hr/>";

$g = 0;
$key = array_keys($employees);
do{
    $newkey = array_keys($employees[$key[$g]]);

    $h = 0;
    do{
        echo "This is multidimensional array by dowhile = key is ".$newkey[$h]." and value is ".$employees[$g][$newkey[$h]]."<br/>";
        $h++;
    }while($h < count($newkey));

    $g++;
}while($g < count($employees));

?>

