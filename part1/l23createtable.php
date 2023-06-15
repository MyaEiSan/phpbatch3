<?php 

ini_set('display_errors',1);

// =>MySQLi Procedural 

$conn = mysqli_connect('localhost','root','','phpdbone');

if(mysqli_connect_error()){
    echo "Failed to connect to Mysql :".mysqli_connect_error();
    exit();
}

echo "Connected Successfully <br/>";


// Create Table 
$sql = "CREATE TABLE IF NOT EXISTS students(
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        city VARCHAR(50),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if(mysqli_query($conn,$sql)){
    echo "Table Created Successfully";
}else{
    echo "Error Found : ".mysqli_error($conn);
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

// Create Table 
$sql = "CREATE TABLE IF NOT EXISTS students(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    city VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if($conn->query($sql) === TRUE){
    echo "Table Created Successfully";
}else{
    echo "Error Found: ".$conn->error;
}

$conn->close();

echo "<hr/>";

// =>PDO 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "phpdbthree";

try{
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    // Create Table 

    $sql = "CREATE TABLE IF NOT EXISTS students(
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        city VARCHAR(50),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    $conn->exec($sql);

    echo "Table Created Successfully";

}catch(PDOException $e){
    echo "Error Found : ".$e->getMessage();
}

?>