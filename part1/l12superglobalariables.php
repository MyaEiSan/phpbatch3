<?php 
// Super Global Variables 
// 1.$GLOBALS 
// 2.$_SERVER 
// 3.$_REQUEST 
// 4.$_POST 
// 5.$_GET 
// 6.$_FILES 
// 7.$_ENV 
// 8.$_COOKIE 
// 9.$_SESSION 

// 1.$GLOBALS 

$num1 = 10;
$num2 = 20;

function totalresult(){
    $GLOBALS['result'] = $GLOBALS['num1'] + $GLOBALS['num2'];
}

totalresult(); //must invoke at least 1 times 
echo $result; 

echo "<hr/>";


// 2. $_SERVER 

echo $_SERVER["PHP_SELF"]; ///part1/l12superglobalvariables.php လက်ရှိ file ရှိနေတဲ့ folder ကနေစပြီး ပတ်လမ်းကြောင်းကိုရမှာ

echo "<hr/>";

echo $_SERVER["HTTP_USER_AGENT"]; //

echo "<hr/>";

echo $_SERVER["HTTP_HOST"]; //localhost

echo "<hr/>";

echo $_SERVER["SERVER_NAME"]; //localhost (Return the name of host server - www.domainname.com)

echo "<hr/>";

echo $_SERVER["SERVER_SOFTWARE"]; //Apache/2.4.41 (Ubuntu)

echo "<hr/>";

echo $_SERVER["SERVER_PORT"]; //80

echo "<hr/>";

echo $_SERVER["SERVER_PROTOCOL"]; //HTTP/1.1

echo "<hr/>";

echo $_SERVER["SERVER_SIGNATURE"]; // Apache/2.4.54 (Win64) OpenSSL/1.1.1p PHP/8.2.0 Server at localhost Port 80

echo "<hr/>";

echo $_SERVER["REQUEST_METHOD"]; // GET

echo "<hr/>";

echo $_SERVER["REMOTE_ADDR"]; //::1 Server ထဲကို လာ join တဲ့ သူတွေရဲ့ address 

echo "<hr/>";

echo $_SERVER["SCRIPT_FILENAME"]; //C:/xampp/htdocs/phpbatch3/part1/l12superglobalariables.php absolute path သဘောမျိုး server ထဲကနေ လက်ရှိ file ထိ ပတ်လမ်းကြောင်းကို ရမှာ 

echo "<hr/>";

// http://localhost/phpbatch3/part1/l12superglobalariables.php?aungaung
echo $_SERVER['QUERY_STRING']; //aungaung

echo "<hr/>";


//------------------------------------

?>