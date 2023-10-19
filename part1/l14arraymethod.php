<?php 
// array_chunk();
// array_chunk(array,size,perserve_key);

$couples = ["aung aung","su su","nu nu","kyaw kyaw","mya mya","tun tun","maung maung","yin yin"];

echo "<pre>".print_r(array_chunk($couples,2),"true")."</pre>";
echo array_chunk($couples,2)[0][1]; //su su

echo "<pre>".print_r(array_chunk($couples,4),"true")."</pre>";

echo "<pre>".print_r(array_chunk($couples,2,true),"true")."</pre>"; //0 1 2 3 4 5 6
echo "<pre>".print_r(array_chunk($couples,2,false),"true")."</pre>"; //01 01 01 01 

echo "<hr/>";

// 17AM

// array_combine() Function 
// array_combine(array1,array2) Function 

$name = array("aung aung","su su","maung maung","hla hla");
$age = ["30","25","35","40"];

echo "<pre>".print_r(array_combine($name,$age),"true")."</pre>";

echo array_combine($name,$age)["aung aung"]; //30

echo "<hr/>";



// array_count_values() Function
// array_count_values(array)

// $cars = ["toyota","suzuki","mazada","force"];
$cars = ["toyota","suzuki","mazada","force","suzuki","force","force"];
echo "<pre>".print_r(array_count_values($cars),"true")."</pre>";

echo "<hr/>";

// count() Function 
// count(array)

$cars = ["toyota","suzuki","mazada","force","suzuki","force","force"];
echo "<pre>".print_r(count($cars),"true")."</pre>";

echo "<hr/>";

// array_diff() Function 
// array_diff(array1,array2,array3,...)
// Note:we dont need to consider any index or keyname

$colors1 = ["red","green","blue","pink"];
$colors2 = ["red","blue","pink","silver"];
$colors3 = ["green","blue","orange","violet"];

echo "<pre>".print_r(array_diff($colors1,$colors2),"true")."</pre>"; //green
echo "<pre>".print_r(array_diff($colors2,$colors1),"true")."</pre>"; //silver
echo "<pre>".print_r(array_diff($colors1,$colors2,$colors3),"true")."</pre>"; //no //တူတဲ့ဟာတွေချေပစ်လိုက်ပြီး ရှေ့ဆုံး array မှာ ဘာမှမကျန်တော့ လို့

$col1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$col2 = array("e"=>"red","f"=>"green","g"=>"black");

echo "<pre>".print_r(array_diff($col1,$col2),"true")."</pre>"; //blue yellow
echo "<pre>".print_r(array_diff($col2,$col1),"true")."</pre>"; //black 

echo "<hr/>";

// array_diff_assoc() Function
// array_diff_assoc(array1,array2,array3,...) 
// Note:we need to consider keyname and value (just for assoc array)

$col1 = array("a"=>"red","b"=>"yellow","c"=>"blue","d"=>"green");
$col2 = array("a"=>"red","b"=>"green","c"=>"blue");

echo "<pre>".print_r(array_diff_assoc($col1,$col2),"true")."</pre>";//yellow green
echo "<pre>".print_r(array_diff_assoc($col2,$col1),"true")."</pre>"; // green

echo "<hr/>";

// array_diff_key Function 
//array_diff_key(array1,array2,array3,...)

$col1 = array("a"=>"red","b"=>"yellow","c"=>"blue","d"=>"green","f"=>"pink");
$col2 = array("a"=>"red","b"=>"green","c"=>"blue","e"=>"orange");

echo "<pre>".print_r(array_diff_key($col1,$col2),"true")."</pre>"; //green pink 
echo "<pre>".print_r(array_diff_key($col2,$col1),"true")."</pre>"; //orange

echo "<hr/>";

// array_interset() Function
// array_intersect(array1,array2,array3,...) Function

$num1 = [10,20,30,60,70,80];
$num2 = array(10,20,30,40,50,90,80);

echo "<pre>".print_r(array_intersect($num1,$num2),"true")."</pre>"; //10 20 30 80 
echo "<pre>".print_r(array_intersect($num2,$num1),"true")."</pre>"; //10 20 30 80 

$col1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$col2 = array("a"=>"red","f"=>"green","d"=>"orange");

echo "<pre>".print_r(array_intersect($col1,$col2),"true")."</pre>"; //red green
echo "<pre>".print_r(array_intersect($col2,$col1),"true")."</pre>";//red green 

echo "<hr/>";

// array_fill() Function
// array_fill(index,number,value)

echo "<pre>".print_r(array_fill(0,5,"green"),"true")."</pre>"; //0 green 1 green  2 green 3 green 4 green
echo "<pre>".print_r(array_fill(2,5,"blue"),"true")."</pre>";//2 blue 3 blue ...6 blue 

echo "<hr/>";

// array_fill_keys() Function 
// array_fill_keys(keys,value)

$keys = array("a","b","c","d");
echo "<pre>".print_r(array_fill_keys($keys,"pink"),"true")."</pre>"; //a pink b pink c pink d pink

echo "<hr/>";

// array_filter() Function 
// array_filter(array,callbackfunction);

$num = [1,2,3,4,3];

function getodd($var){
    return ($var & 1);
}

echo "<pre>".print_r(array_filter($num,"getodd"),"true")."</pre>"; //

echo "<hr/>";

// array_key_exists() Function
// array_key_exists(key,array)

$phones = ["mpt"=>"ftth","ooredoo"=>"broadban"];

if(array_key_exists("mpt",$phones)){
    echo "Key exists";
}else{
    echo "Key does not exists";
}

echo "<hr/>";

// array_keys() Function
// array_keys(array,value,strict)

$phones = ["mpt"=>"ftth","ooredoo"=>"broadband","ais"=>"wifi"];

echo "<pre>".print_r(array_keys($phones),"true")."</pre>"; 
echo array_keys($phones)[0];//mpt

echo "<pre>".print_r(array_keys($phones,"broadband"),"true")."</pre>"; 
echo array_keys($phones,"broadband")[0]; //ooredoo 

$numbers = [10,20,30,"10"];

echo "<pre>".print_r(array_keys($numbers,"10",true),"true")."</pre>"; // [0] => 3
echo "<pre>".print_r(array_keys($numbers,10,true),"true")."</pre>"; // [0] => 0

echo "<pre>".print_r(array_keys($numbers,10,false),"true")."</pre>"; // [0] => 0 [1] => 3
echo "<pre>".print_r(array_keys($numbers,"10",false),"true")."</pre>"; // [0] => 0 [1] => 3

echo "<hr/>";

// array_map() Function 
// array_map(callbackfunction,array1,array2,array3,...)

$males = ["Tun Tun","Zaw Zaw","Aung Aung","Kyaw Kyaw","Thura"];
$females = array("Hla Hla","Mya Mya","Su Su","Nu Nu","Yu Yu");

function genderone($name){
    return ("Mr.".$name);
}

function gendertwo($male,$female){
    return $male. " & ".$female;
}

echo "<pre>".print_r(array_map("genderone",$males),"true")."</pre>";
echo "<pre>".print_r(array_map("gendertwo",$males,$females),"true")."</pre>";

echo "<hr/>";

// array_merge() Function 
// array_merge(array1,array2,array3,...)

$arr1 = ["red","green"];
$arr2 = ["blue","yellow"];
$arr3 = ["orange","violet"];

echo "<pre>".print_r(array_merge($arr1,$arr2),"true")."</pre>"; // "red" "green" "blue" "yellow"
echo "<pre>".print_r(array_merge($arr1,$arr2,$arr3),"true")."</pre>"; // "red" "green" "blue" "yellow" "orange" "violet"

echo "<hr/>";

// array_multisort() Function 
// array_multisort(array)

$animals = ["Dog","Cat","Mouse","Lion","Zebra","Rat","Bear","Cow"];
array_multisort($animals);
echo "<pre>".print_r($animals,"true")."</pre>"; // a to z 

$numbers = array(10,50,80,90,35,100,130,250,70);
array_multisort($numbers);
echo "<pre>".print_r($numbers,"true")."</pre>"; // 0 to 10

$numbers = array(10,50,"80",90,35,"100",130,"250",70);
array_multisort($numbers);
echo "<pre>".print_r($numbers,"true")."</pre>"; // 0 to 10 

echo "<hr/>";

// sort() Function 
// sort(array)

$cars = ["volvo","bmw","toyota","mazda","suzuki"];
sort($cars);
echo "<pre>".print_r($cars,"true")."</pre>"; // a to z

$numbers = array(10,50,"80",90,35,"100",130,"250",70);
sort($numbers);
echo "<pre>".print_r($numbers,"true")."</pre>"; // 0 to 10 

echo "<hr/>";

// array_pad() Function 
// array_pad(array,size,value)

$colors = ["red","green"];
echo "<pre>".print_r(array_pad($colors,5,"blue"),"true")."</pre>"; 

echo "<hr/>";

// array_pop() Function
// array_pop(array)

$colors = ["red","green","blue"];
array_pop($colors);
echo "<pre>".print_r($colors,"true")."</pre>"; // "red","green"  

echo "<hr/>";

// array_reduce() Function 
// array_reduce(array,callbackfunction,initial)

$num = [10,20,30];

function calfun($total,$val){
    return $total += $val;
}

echo "<pre>".print_r(array_reduce($num,"calfun",0),"true")."</pre>"; //60

echo "<hr/>";


// array_reverse() Function
// array_reverse(array);

$arr = ["a","b","g","d","e"];
echo "<pre>".print_r(array_reverse($arr),"true")."</pre>";

$arr = ["a"=>"red","b"=>"green","g"=>"violet","c"=>"blue"];
echo "<pre>".print_r(array_reverse($arr),"true")."</pre>";

echo "<hr/>";

// array_search() Function 
// array_search(value,array)


$arr = ["a","b","g","d","e"];
echo "<pre>".print_r(array_search("d",$arr),"true")."</pre>";//3 

$arr = ["a"=>"red","b"=>"green","g"=>"violet","c"=>"blue"];
echo "<pre>".print_r(array_search("green",$arr),"true")."</pre>"; // b

echo "<hr/>";

// array_shift() Function 
// array_shift(array)

$colors = array("red","green","blue");
array_shift($colors);
echo "<pre>".print_r($colors,"true")."</pre>";

$colors = ["a"=>"red","b"=>"green","g"=>"violet","c"=>"blue"];
array_shift($colors);
echo "<pre>".print_r($colors,"true")."</pre>";

echo "<hr/>";

// array_unshift() Function 
// array_unshift(array,value1,value2,value3,...);

$colors = array("red","green","blue");
array_unshift($colors,"silver","violet");
echo "<pre>".print_r($colors,"true")."</pre>";

$colors = ["0"=>"red","1"=>"green","2"=>"violet","3"=>"blue"];
array_unshift($colors,"silver");
echo "<pre>".print_r($colors,"true")."</pre>";

$colors = ["a"=>"red","b"=>"green","g"=>"violet","c"=>"blue"];
array_unshift($colors,"silver");
echo "<pre>".print_r($colors,"true")."</pre>";

echo "<hr/>";


// array_push() Function 
// array_push(array,value1,value2,value3,...)

$colors = array("red","green","blue");
array_push($colors,"silver","violet");
echo "<pre>".print_r($colors,"true")."</pre>";

$colors = ["0"=>"red","1"=>"green","2"=>"violet","3"=>"blue"];
array_push($colors,"silver");
echo "<pre>".print_r($colors,"true")."</pre>";

$colors = ["a"=>"red","b"=>"green","g"=>"violet","c"=>"blue"];
array_push($colors,"silver","orange");
echo "<pre>".print_r($colors,"true")."</pre>";

echo "<hr/>";

// array_slice() Function
                //  idx    length
// array_slice(array,start,length,preserve);

$colors = array("red","green","blue","yellow","black");
echo "<pre>".print_r(array_slice($colors,0),"true")."</pre>"; // red to black 
echo "<pre>".print_r(array_slice($colors,2),"true")."</pre>"; // blue to black 

echo "<pre>".print_r(array_slice($colors,-1),"true")."</pre>"; // balck
echo "<pre>".print_r(array_slice($colors,-2),"true")."</pre>"; // yellow balck
echo "<pre>".print_r(array_slice($colors,-5),"true")."</pre>"; // red to black 


echo "<pre>".print_r(array_slice($colors,0,2),"true")."</pre>"; // red green 
echo "<pre>".print_r(array_slice($colors,2,2),"true")."</pre>"; // blue yellow
echo "<pre>".print_r(array_slice($colors,2,5),"true")."</pre>"; // blue yellow black nothing 


echo "<pre>".print_r(array_slice($colors,2,5,true),"true")."</pre>"; // blue yellow black nothing 
echo "<pre>".print_r(array_slice($colors,2,5,false),"true")."</pre>"; // blue yellow black nothing 

echo "<hr/>";

// array_splice() Function 
                    //  idx 
// array_splice(array,start,length,array2);       

$colors = array("red","green","blue","yellow","black");
// echo "<pre>".print_r(array_splice($colors,2),"true")."</pre>"; //blue to black

// echo "<pre>".print_r(array_splice($colors,2,1),"true")."</pre>"; //blue
// echo "<pre>".print_r(array_splice($colors,2,3),"true")."</pre>"; //blue  to black 

// echo "<pre>".print_r(array_splice($colors,2,-1),"true")."</pre>"; //blue yellow 
// echo "<pre>".print_r(array_splice($colors,0,-4),"true")."</pre>"; //red 


$males = ["aung aung","maung maung","kyaw kyaw","zaw zaw","naung naung"];
$females = ["su su","yu yu","nu nu"];
// array_splice($males,0,2,$females);
// echo "<pre>".print_r($males,"true")."</pre>";

// array_splice($males,0,3,$females);
// echo "<pre>".print_r($males,"true")."</pre>"; // susu yuyu nunu zwzw ngng

array_splice($males,1,3,$females);
echo "<pre>".print_r($males,"true")."</pre>"; //agag susu yuyu nunu ngng 


// 24AC

// array_sum() Function 
// array_sum(array)

$nums = [10,20,30,40,50]; //150 
echo "<pre>".print_r(array_sum($nums),"true")."</pre>"; //150 

$nums = [10,20,30,"40",-50]; //150 
echo "<pre>".print_r(array_sum($nums),"true")."</pre>"; //50 


$nums = ["a"=>10.2,"b"=>20.3,"c"=>30.3]; //150 
echo "<pre>".print_r(array_sum($nums),"true")."</pre>"; //60.8 

echo "<hr/>";

// array_unique() Function 
// array_unique(array)

$num = [10,20,30,50,10,30,60,70,80,10];
echo "<pre>".print_r(array_unique($num),"true")."</pre>"; //10 20 30 50 60 70 80 


$colors = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"red","e"=>"blue");
echo "<pre>".print_r(array_unique($colors),"true")."</pre>"; // red green blue

echo "<hr/>";

// array_values() Function 
// array_values(array)

$colors = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"red","e"=>"blue");
echo "<pre>".print_r(array_values($colors),"true")."</pre>"; //red green blue red blue

echo "<hr/>";


// array_walk() Function
// array_walk(array,callbackfunction,parameter)

$colors = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"red","e"=>"blue");

function myfunone($val,$key){
    echo "Key is = $key and value is $val <br/>"; //string 
}

array_walk($colors,"myfunone");

$colors = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"red","e"=>"blue");

function myfuntwo($val,$key,$p){
    echo "Key is = $key and value is $val $p <br/>"; //string
}

array_walk($colors,"myfuntwo","color");

echo "<hr/>";

$colors = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"red","e"=>"blue");

function myfunthree(&$val){
    $val = "black"; //string
}

array_walk($colors,"myfunthree");

echo "<pre>".print_r($colors,"true")."</pre>"; //black black black black by index array 

echo "<hr/>";


// compact() Function 
// compact(var1,var2,var3,...);

$name = "Aung Aung";
$age = "25";
$city = "Yangon";

$result = compact("name","age","city");
echo "<pre>".print_r($result,"true")."</pre>"; //assoc array 

echo "<hr/>";

// current() / ps() / end() / next() / prev() / reset()

$students = array("aung aung","maung maung","zaw zaw","tun tun","kyaw kyaw");

// echo "<pre>".print_r(current($students),"true")."</pre>"; //aung aung by string
// echo "<pre>".print_r(pos($students),"true")."</pre>"; //aung aung by string
// echo "<pre>".print_r(end($students),"true")."</pre>"; //kyaw kyaw by string 

// echo "<pre>".print_r(current($students),"true")."</pre>"; //aung aung by string
// echo "<pre>".print_r(next($students),"true")."</pre>"; //maung maung by string

echo "<pre>".print_r(end($students),"true")."</pre>"; //kyaw kyaw by string
echo "<pre>".print_r(prev($students),"true")."</pre>"; //tun tun by string

echo "<pre>".print_r(current($students),"true")."</pre>"; //aung aung by string
echo "<pre>".print_r(next($students),"true")."</pre>"; //maung maung by string
// echo "<pre>".print_r(prev($students),"true")."</pre>"; //aung aung by string
echo "<pre>".print_r(next($students),"true")."</pre>"; //zaw zaw by string
echo "<pre>".print_r(reset($students),"true")."</pre>"; //aung aung by string

echo "<hr/>";

// range() Function 
// range(low,high,step) 

$num1 = range(0,5);
echo "<pre>".print_r($num1,"true")."</pre>"; // to 5 by array 

$num1 = range(0,50,10);
echo "<pre>".print_r($num2,"true")."</pre>"; // 0 to 50 by array

$char = range("a","k");
echo "<pre>".print_r($char,"true")."</pre>"; // a to k by array 

$char = range("k","g");
echo "<pre>".print_r($char,"true")."</pre>"; // k to g by array 

echo "<hr/>";

// sizeof() Function
// sizeof(array)

$colors = ["red","green","blue","pink"];
echo "<pre>".print_r(sizeof($colors),"true")."</pre>";  //4 by string (int) 
echo var_dump(sizeof($colors));

echo "<hr/>";

// => serialize() vs unserialize()

$staffs = [
    ["aung aung","maung maung","kyaw kyaw","tun tun","thura"],
    ["su su","yu yu","nu nu","aye aye","hla hla"]
];

echo "<pre>".print_r($staffs,true)."</pre>";

$seridatas = serialize($staffs);
echo $seridatas;
echo "<br/>";
var_dump($seridatas);
echo "<br/>";
$unseridatas = unserialize($seridatas);
echo "<pre>".print_r($unseridatas,true)."</pre>";

echo "<hr/>";


?>