<?php 
    // if(isset($_POST['submit'])){
    //     echo "Form Submit";
    // }



    if(isset($_POST['submit'])){
        $name = textfilter($_POST['name']);
        $email = textfilter($_POST['email']);
        $password = md5(textfilter($_POST['password']));

        // echo $name;
        // echo $email;
        // echo $password;


        // =>MySQLi Procedural 

        // DB Connect
        $conn  = mysqli_connect('localhost','root','','phpdbone');

        if(mysqli_connect_error()){
            echo "Failed to connect Mysqli: ".mysqli_connect_error();
            exit();
        }

        // echo "Connected Successfully <br/>";

        // Data Insert

        $stmt = "INSERT INTO users(name,email,password) VALUE (?,?,?)";
        $insertstmt = mysqli_prepare($conn,$stmt);
        mysqli_stmt_bind_param($insertstmt,'sss',$name,$email,$password);

        mysqli_stmt_execute($insertstmt);

        echo "New User Created Successfully";

        mysqli_close($conn);

    }

    function textfilter($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);

        return $data;
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
        <title>Register Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>

    <div class="container">
        <div class="col-md-6 mx-auto">
            <h3 class="text-center my-3">Register Form</h3>
            <form action="" method="post">
                <div class="form-group mb-3">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name" class="form-control" />
                </div>

                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" />
                </div>

                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" />
                </div>

                <input type="submit" name="submit" class="btn btn-primary float-end" value="Sign Up" />


            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    </body>
</html>


<!-- 
    Zoom ID = 528 716 1189

 -->