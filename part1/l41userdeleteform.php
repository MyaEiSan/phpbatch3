<?php 
    ini_set('display_errors',1);
    
    // =>PDO

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "phpdbone";

    try{
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("SELECT id,name,email FROM users");
        $stmt->execute();

        while($row = $stmt->fetch()){
            // echo "id i: ",$row['id']," Name : ".$row['name']." Email :".$row['email']." <br/>";
        
        }

    }catch(PDOException $e){
        echo "Error Found : ".$e->getMessage();
    }
    


    if(isset($_POST['submit'])){

        $stmt = $conn->prepare("DELETE FROM users WHERE id=:id");
        $stmt->bindParam(":id",$id);

        $id = $_POST['submit'];
        $stmt->execute();

        echo $stmt->rowCount()."User Delete Successfully";

        $conn = null;

        // Redirect 
        // $page = $_SERVER['PHP_SELF'];
        // header("Location:$page");
        // exit;

        // Redirect by javascript
        echo "<script type=\"text/javascript\">
            // Method 1 =    Redirect to current page
            // window.location.href= window.location.href;

            Note::href  က back key နဲ့ ပြန်သွားလို့ရတယ် browser history data တွေလည်း သုံးလို့ရတယ်။ replace assign က အဲလိုတွေ မရဘူး။

            // Method 2 =    Redirect to current page
            // window.location.replace(window.location.href);

            // Method 3 =    Redirect to current page
            // window.location.assign(window.location.href);

            </script>";
    }
?>


<!-- CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name VARCHAR(20),
    email VARCHAR(20),
    password VARCHAR(225)
); -->

<!DOCTYPE html>
<html>
    <head>
        <title>User Delete Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>

    <div class="container">
        <div class="col-md-6 mx-auto">
            <h3 class="text-center my-3">User Delete Form</h3>
            <table class="table border table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 

                    while($row = $stmt->fetch()){
                        $id = $row['id'];
                        $name = $name['name'];
                        $email = $row['email'];

                        echo "<tr>";
                        echo "<td>$id</td>";
                        echo "<td>$name</td>";
                        echo "<td>$email</td>";
                        echo "<td><form><button type='submit' name='submit' id='submit' class='btn btn-danger'  value='$id'>Delete</button></form></td>";
                        echo "</tr>";
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    </body>
</html>


<!-- 19RD -->
