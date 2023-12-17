<?php 

// ini_set('display_errors',1);

// (i) MySQL Procedural 
// (ii) MySQLi Object-Oriented 
// (iii) Using PDO (PHP Data Objects) 

// (i) MySQLi Procedural 
                    //   hostname username password databasename
$conn = mysqli_connect("localhost","root","","phpdbfour");

if(mysqli_connect_error()){
    echo "Failed to connect :".mysqli_connect_error();
    exit();
}

echo "Connect successfully";


// 7DB

echo "<hr/>";

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass);

if(!$conn){
    // // echo "Failed to connect :".mysqli_connect_error();
    // exit();

    die("Failed to connect :".mysqli_connect_error());
}

echo "Connect Successfully";

echo "<hr/>";



// (ii) MySQLi Object-Oriented


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";

$conn = new mysqli("localhost","root","");

if(mysqli_connect_error()){
    die("Failed to connect :".mysqli_connect_error());
}

echo "Connect Successfully";

echo "<hr/>";



$conn = new mysqli("localhost","root","","phpdbfour");

if($conn->connect_errno){
    echo "Failed to connect :". $conn->connect_errno;
    exit();
}


echo "Connect Successfully";

$conn->query("SELECt * FROM buyers");
echo $conn->affected_rows;

$conn->close();

echo "<hr/>";

function openconn(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";

    $dbconnect = new mysqli($dbhost,$dbuser,$dbpass);

    return $dbconnect;
}

function closeconn($conn){
    $conn->close();
}

$conn = openconn();
echo "Connect Successfully";
closeconn($conn);

echo "<hr/>";



// (iii) Using PDO (PHP Data Objects) 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "phpdbfour";

try{
    // $conn = new PDO("mysql:host=$dbhost",$dbuser,$dbpass);
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    var_dump($conn);
    echo "Connect Successfullykjk";
}catch(PDOException $e){
    echo "Connection Failed : ". $e->getMessage();
}

echo "<hr/>";

?>