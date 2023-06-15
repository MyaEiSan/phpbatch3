<?php 

date_default_timezone_set("Asia/Yangon");

$getdate = getdate();

// echo $getdate;
echo "<br/>";
var_dump($getdate);
echo "<br/>";

echo "This is seconds = ".$getdate["seconds"]."<br/>";
echo "This is minutes = ".$getdate["minutes"]."<br/>";
echo "This is hours = ".$getdate["hours"]."<br/>";

echo "This is weekday = ".$getdate["weekday"]."<br/>";// Saturday
echo "This is wday = ".$getdate["wday"]."<br/>";//6 // day of the week 0-sunday 1-monday
echo "This is yday = ".$getdate["yday"]."<br/>";// 111 // day of the year

echo "This is month = ".$getdate["month"]."<br/>";// April
echo "This is mday = ".$getdate["mday"]."<br/>";//22
echo "This is mon = ".$getdate["mon"]."<br/>";// 4 // month

echo "This is year = ".$getdate["year"]."<br/>";// 2023

echo "This is 0 = ".$getdate["0"]."<br/>";// 1682175534

$time = time();
echo "This is time = ".$time."<br/>"; ////1682176192

// DATE/TIME Format
// date(format,timestamp);

$date = date('a',$time);
echo "This is format a = ".$date."<br/>"; // am / pm
$date = date('A',$time);
echo "This is format A = ".$date."<br/>"; // AM / PM

$date = date('d',$time);
echo "This is format d = ".$date."<br/>"; // 22 //day leading zero 
$date = date('D',$time);
echo "This is format D = ".$date."<br/>"; // Sat / Sun /Mon 

$date = date('F',$time);
echo "This is format F = ".$date."<br/>"; // April //January/December

$date = date('g',$time);
echo "This is format g = ".$date."<br/>"; // 9 //hour by number (by 12hr format , no leading zero)
$date = date('G',$time);
echo "This is format G = ".$date."<br/>"; // 21 //hour by number (by 24h format, no leading  zero)

$date = date('h',$time);
echo "This is format h = ".$date."<br/>"; // 09  //hour by number (by 12hr format , leading zero)
$date = date('H',$time);
echo "This is format H = ".$date."<br/>"; // 21 //hour by number (by 24h format, leading  zero)

$date = date('i',$time);
echo "This is format i = ".$date."<br/>"; //55 

$date = date('j',$time);
echo "This is format j = ".$date."<br/>"; // 22 day of month no leading zero 

$date = date('l',$time);
echo "This is format l = ".$date."<br/>"; // Saturday
$date = date('L',$time);
echo "This is format L = ".$date."<br/>"; // 0 //Leap Year (1 = true, 0 = false)


$date = date('m',$time);
echo "This is format m = ".$date."<br/>"; // 04 // month(leading zero);
$date = date('M',$time);
echo "This is format M = ".$date."<br/>"; // Apr (Jan/Feb)

$date = date('n',$time);
echo "This is format n = ".$date."<br/>"; // 4 / month(no leading zero)


$date = date('r',$time);
echo "This is format r = ".$date."<br/>"; // This is format r = Sat, 22 Apr 2023 22:04:57 +0630


$date = date('s',$time);
echo "This is format s = ".$date."<br/>"; // 09 seconds 

$date = date('U',$time);
echo "This is format U = ".$date."<br/>"; // 1682177833


$date = date('y',$time);
echo "This is format y = ".$date."<br/>"; // 23 year shortcode
$date = date('Y',$time);
echo "This is format Y = ".$date."<br/>"; // 2023 year 


$date = date('z',$time);
echo "This is format z = ".$date."<br/>"; // 111 days of year

echo "<hr/>";

?>