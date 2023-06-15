<?php 


// =>PDO 

// $dbhost = "localhost";
// $dbuser =  "root";
// $dbpass = "";
// $dbname = "phpdbthree";

// try{
//     $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
//     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//     $stmt = $conn->prepare("INSERT INTO students(firstname,lastname,citye) VALUES(:firstname,:lastname,:city)");
//     $stmt->bindParam(":firstname",$firstname);
//     $stmt->bindParam(":lastname",$lastname);
//     $stmt->bindParam(":city",$city);

//     $firstname="kyaw kyaw";
//     $lastname = "aung";
//     $city = "bago";
//     $stmt->execute();

//     $firstname="hnin";
//     $lastname = "mya";
//     $city = "bago";
//     $stmt->execute();

//     $firstname="aye";
//     $lastname = "mya";
//     $city = "bago";
//     $stmt->execute();

//     echo "New Records Created Successfully";
// }catch(PDOException $e){
//     echo "Error Found : ". $e->getMessage();
// }
 







// =>MySQLi Object-Oriented 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "phpdbtwo";

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if($conn->connect_error){
    die("Connection Failed :".$conn->connect_error);
}


$stmt = $conn->prepare("INSERT INTO students(firstname,lastname,city) VALUES(?,?,?)");
$stmt->bind_param("sss",$firstname,$lastname,$city);

$firstname = "kyaw kyaw";
$lastname = "aung";
$city = "bago";
$stmt->execute();

$firstname = "hnin";
$lastname = "mya";
$city = "bago";
$stmt->execute();

$firstname = "aye";
$lastname = "mya";
$city = "mawlamyine";
$stmt->execute();

echo "New Records Created Successfully";

$stmt->close();
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

    $stmt = $conn->prepare("INSERT INTO students(firstname,lastname,city) VALUES(:firstname,:lastname,:city)");
    $stmt->bindParam(':firstname',$firstname);
    $stmt->bindParam(':lastname',$lastname);
    $stmt->bindParam(':city',$city);


    $firstname = "kyaw kyaw";
    $lastname = "aung";
    $city = "bago";
    $stmt->execute();

    $firstname = "hnin";
    $lastname = "mya";
    $city = "bago";
    $stmt->execute();

    $firstname = "aye";
    $lastname = "mya";
    $city = "mawlamyine";
    $stmt->execute();


    echo "New Records Created Successfully";

}catch(PDOException $e){
    echo "Error Found : ".$e->getMessage();
}

// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "";
// $dbname = "phpdbthree";

// try{
//     $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
//     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//     // begin the transaction 
//     $conn->beginTransaction();

//     // Insert Data
//     $conn->exec("INSERT INTO students (firstname,lastname,city)
//     VALUES ('aung','kyaw','yangon')");
//     $conn->exec("INSERT INTO students (firstname,lastname,city)
//     VALUES ('su','hlaing','yangon')");
//     $conn->exec("INSERT INTO students (firstname,lastname,city)
//     VALUES ('tun','aung','yangon')");

//     $conn->commit();

//     echo "Insert Successfully";

// }catch(PDOException $e){
//     echo "Error Found : ".$e->getMessage();
// }