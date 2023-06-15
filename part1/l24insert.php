<?php 

ini_set('display_errors',1);

// =>MySQLi Procedural 

$conn = mysqli_connect('localhost','root','','phpdbone');

if(mysqli_connect_error()){
    echo "Failed to connect to Mysql :".mysqli_connect_error();
    exit();
}

echo "Connected Successfully <br/>";


// Data Insert
$sql = "INSERT INTO students(firstname,lastname,city) 
VALUE('aung','kyaw','yangon')";

if(mysqli_query($conn,$sql)){
    echo  "Insert Successfully";
}else{
    echo "Error Found : ". mysqli_error($conn);
}

mysqli_close($conn);

echo "<hr/>";

// =>MySQLi Object-Oriented 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "phpdbtwo";

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if($conn->connect_error){
    die("Connection Failed :".$conn->connect_error);
}

// Data Insert
$sql = "INSERT INTO students (firstname,lastname,city) 
VALUES ('aung','kyaw','yangon'),('su','hlaing','mandalay')";

if($conn->query($sql) === TRUE){
    echo "Insert Successfully";
}else{
    echo "Error Found: ".$conn->error;
}

$conn->close();

echo "<hr/>";


// =>PDO 

// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "";
// $dbname = "phpdbthree";

// try{
//     $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
//     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//     // Insert Data

//     $sql = "INSERT INTO students (firstname,lastname,city)
//     VALUES ('aung','kyaw','yangon');";
//     $sql .= "INSERT INTO students (firstname,lastname,city)
//     VALUES ('su','hlaing','yangon');";
//     $sql .= "INSERT INTO students (firstname,lastname,city)
//     VALUES ('tun','aung','yangon');";

//     $conn->exec($sql);

//     echo "Insert Successfully";

// }catch(PDOException $e){
//     echo "Error Found : ".$e->getMessage();
// }

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "phpdbthree";

try{
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    // begin the transaction 
    $conn->beginTransaction();

    // Insert Data
    $conn->exec("INSERT INTO students (firstname,lastname,city)
    VALUES ('aung','kyaw','yangon')");
    $conn->exec("INSERT INTO students (firstname,lastname,city)
    VALUES ('su','hlaing','yangon')");
    $conn->exec("INSERT INTO students (firstname,lastname,city)
    VALUES ('tun','aung','yangon')");

    $conn->commit();

    echo "Insert Successfully";

}catch(PDOException $e){
    echo "Error Found : ".$e->getMessage();
}

?>