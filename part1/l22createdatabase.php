<?php 
ini_set('display_errors',1);

// =>MySQLi Procedural 

$conn = mysqli_connect("localhost","root","");

if(mysqli_connect_error()){
    echo "Failed to Connect : ". mysqli_connect_error();
    exit();
}

echo "Connected Successfully"."<br/>";

// Create Database'

// $sql = "CREATE DATABASE phpdbone";
$sql = "CREATE DATABASE IF NOT EXISTS phpdbone";

if(mysqli_query($conn,$sql)){
    echo "Database Created Successfully";
}else{
    echo "Error Found : ". mysqli_error($conn);
}

mysqli_close($conn);

echo "<hr/>";


// => MySQLi Object-Oriented

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";

// Create Connection 

$conn = new mysqli($dbhost,$dbuser,$dbpass);

if($conn->connect_errno){
    // echo "Connection Failed :".$conn->connect_errno;
    // exit();

    // die("Connection Failed : ".$conn->connect_errno);
    die("Connection Failed :".$conn->connect_error);
}

echo "Connected Successfully"."<br/>";

// Create Database 

$sql = "CREATE DATABASE IF NOT EXISTS phpdbtwo";

if($conn->query($sql) === TRUE){
    echo "Database Created Successfully";
}else{
    echo "Error Found : ".$conn->error;
}

$conn->close();

echo "<hr/>";

// =>PDO

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";

try{
    $conn = new PDO("mysql:host=$dbhost",$dbuser,$dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE IF NOT EXISTS phpdbthree";
    $conn->exec($sql);

    echo "Database Created Successfully";

}catch(PDOException $e){
    echo "Error Found : ".$e->getMessage();
}

// 14PD

?>