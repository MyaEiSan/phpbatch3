<?php 

// if(isset($_POST['submit'])){
//     // echo "Hay";

//     // $result = $_POST["profile"];
//     // echo $result;

//     $result = $_FILES;
//     // echo $result;
//     echo "<pre>".print_r($result,true)."</pre>";

//     echo $_FILES['profile']['name'];
//     echo "<br/>";
//     echo $_FILES['profile']['full_path'];
//     echo "<br/>";
//     echo $_FILES['profile']['type'];
//     echo "<br/>";
//     echo $_FILES['profile']['tmp_name'];
//     echo "<br/>";
//     echo $_FILES['profile']['error'];
//     echo "<br/>";
//     echo $_FILES['profile']['size'];
//     echo "<br/>";


//     $fileext = explode('.',$_FILES['profile']['name']);

//     echo "<pre>".print_r($fileext,true)."</pre>";
//     echo $fileext[0]."<br/>";
//     echo $fileext[1]."<br/>";

//     $fileextformat = current(explode('.',$_FILES['profile']['name']));
//     echo $fileextformat."<br/>";

//     $fileextformat = end(explode('.',$_FILES['profile']['name']));
//     echo $fileextformat."<br/>";
    




// }

function getfilesize($filesize){
    // echo $filesize;

    if(is_numeric($filesize)){
        $idx = 0;
        $fixnum = 1024;
        $prefix = ["Bit","Kb","Mb","Gb","Tb","Pb","Eb","Zb","Yb"];

        // echo $prefix[$getsize];

        while(($filesize/$fixnum) > 0.9 ){
            $filesize = $filesize /$fixnum;
            $idx++;
        }

        return round($filesize,2).' '.$prefix[$idx];

    }else{
        return "NaN";
    }
}

// echo getfilesize(7000000);

function getfilesizetwo($filesize){
    // return $filesize;

    $idx = 0;
    $fixnum = 1024;
    $prefix = ["B","Kb","Mb","Gb","Tb","Pb","Eb","Zb","Yb"];

    if($filesize<$fixnum){
        return $filesize.' '.$prefix[$idx];
    }else{
        while($filesize > $fixnum){
            $filesize = round($filesize / $fixnum,2); 
            $idx++;
        }
        return $filesize.' '.$prefix[$idx];
    }
}


// echo getfilesizetwo(700000);


function getfilesizethree($filesize){
    $size = filesize($filesize);
    $fixnum = 1024;
    $prefix = ["B","Kb","Mb","Gb","Tb","Pb","Eb","Zb","Yb"];

    $power = $size > 0 ? floor(log($size,$fixnum)): 0;
    // log(617,1024); //0.91649069266757
    // floor(log(617,1024)) //0

    $result = round($size / pow($fixnum,$power),2) .' '.$prefix[$power];
                // 617 / pow(1024,0)
                // 617/1 = 617

    return $result;
}

// echo getfilesizethree("./l43file.txt");


// sudo chmod 777 -R assets/

// $uploaddir = "assets/";
// // $uploadfile = $uploaddir.$_FILES['profile']['name'];
// $uploadfile = $uploaddir.basename($_FILES['profile']['name']); //assets/street.jpg
// // echo $uploadfile;

// // move_uploaded_file(tmp,actualpathandname)

// if(isset($_POST['submit'])){
//     if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//         echo "File Successfully Uploaded";
//     }else{
//         echo "Try Again";
//     }
// }




// $uploaddir = "assets";
// $uploadfile = $uploaddir.basename($_FILES['profile']['name']);
// $uploadsize = $_FILES['profile']['size'];

// if(isset($_POST['submit'])){


//     if($uploadsize > 30000){
//         echo "Sorry, Your file is too large.";
//     }else{
//         if(file_exists($uploadfile)){
//             echo "Sorry, File already exists.";
//         }else{
//             if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//                 echo "File Successfully Uploaded";
//             }else{
//                 echo "Try Again";
//             }
//         }
//     }

// }



// $uploaddir = "assets/";
// $uploadfile = $uploaddir.basename($_FILES['profile']['name']);
// $uploadsize = $_FILES['profile']['size'];
// $uploadtype = strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));
// echo $uploadfile. "<br/>"; //assets/street.jpg
// echo $uploadtype; //jpg
// if(isset($_POST['submit'])){

//     if($uploadtype !== "jpg" && $uploadtype !== "jpeg" && $uploadtype !== "png" && $uploadtype !== "gif"){
//         echo "Sorry, We just allowed for JPG,JPEG,PNG & GIF file types";
//     }else{
//         if($uploadsize > 30000){
//             echo "Sorry, Your file is too large.";
//         }else{
//             if(file_exists($uploadfile)){
//                 echo "Sorry, File already exists.";
//             }else{
//                 if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//                     echo "File Successfully Uploaded";
//                 }else{
//                     echo "Try Again";
//                 }
//             }
//         }
//     }

// }





// $uploaddir = "assets/";
// $uploadfile = $uploaddir.basename($_FILES['profile']['name']);
// $uploadtype = strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION)); //jpg png txt 
// $uploadready = true;

// if(isset($_POST['submit'])){
    
//     // check file already exists
//     if(file_exists($uploadfile)){
//         echo "Sorry, file already exists <br/>";
//         $uploadready = false;
//     } 

//     // check file size 
//     if($_FILES['profile']['size'] > 30000){
//         echo "Sorry, your file is too large. <br/>";
//         $uploadready = false;
//     }

//     // check file format 
//     if($uploadtype !== 'jpg' && $uploadtype !== 'jpeg' && $uploadtype !== 'png' && $uploadtype !== 'gif'){
//         echo "Sorry, we just allowed JPG,JPEG ,PNG & GIF files.";
//         $uploadready = false;
//     }

//     // upload
//     if($uploadready){
//         if(move_uploaded_file($_FILES['profile']['tmp_name'],$uploadfile)){
//             echo "Uploaded successfully";
//         }else{
//             echo "Uploading Failed";
//         }
//     }else{
//         echo "Sorry,your file was not uploaded ";
//     }
// }




if(isset($_POST['submit']) && !empty($_FILES['profile']['name'])){
    // echo "Hello";

    $filename = $_FILES['profile']['name'];
    $filesize = $_FILES['profile']['size'];
    $filetmp = $_FILES['profile']['tmp_name'];
    
    $uploaddir = "assets/";
    $uploadfile = $uploaddir.basename($filename);
    $arr = explode('.',$filename);
    $ext = end($arr);
    $uploadtype = strtolower($ext); // jpg 

    $allowextensions = ["jpg","jpeg","png","gif"];

    if(isset($_FILES['profile'])){

        $errors = [];

        // check extension 
        if(in_array($uploadtype,$allowextensions) === false){
            $errors = "Sorry, we just allowed JPG,JPEG,PNG & GIF files type.";
        }

        // check size
        if($filesize > 30000){
            $errors[] = "Sorry, your file is too large.";
        }

        // upload

        if(empty($errors) === true){
            move_uploaded_file($filetmp,$uploadfile);
            echo "File Successfully Uploaded.";
        }else{
            echo "<pre>".print_r($errors,true)."</pre>";
        }

    }




}




?>


<!DOCTYPE html>
<html>
    <head>
        <title>Uploading File</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>

    <div class="col-md-6 mx-auto mt-5">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="profile">Profile Picture</label>
                <input type="file" name="profile" id="profile" class="form-control" />
            </div>
            <input type="submit" name="submit" class="btn btn-primary float-end" value="Upload" />
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>

<!--
bit 
byte 
kilo bytemega byte 
giga bytetera byte 
peta byte 
exa byte 
zetta byte 
yotta byte  
-->