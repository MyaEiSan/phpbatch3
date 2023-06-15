<?php 
// echo readfile("l43file.txt");
// echo filesize("l43file.txt");

// $fileopen = fopen("l43file.txt","r");


// if($fileopen){
//     // echo "OKI";

//     $fileread = fread($fileopen,filesize("l43file.txt"));
//     fclose($fileopen);

//     echo $fileread;

// }else{
//     echo "File Not Found !!!";
// }

// For Linux (Give Permission)
// sudo chmod 777 -R/var/www/html
// sudo chmod 775 /var/www/html

// $fileopen = fopen("l44file.txt","w");
// if($fileopen){
//     fwrite($fileopen,"Hey guys!! I created new file");

//     $fileopen = fopen("l44file.txt","r");
//     $fileread = fread($fileopen,filesize("l44file.txt"));
//     fclose($fileopen);

//     echo $fileread;
// }else{
//      echo "File Not Found";
// }



// $fileopen = fopen("l45file.txt","x");
// if($fileopen){
//     fwrite($fileopen,"Hey guys!! I created new file by using x.");
//     fclose($fileopen);
// }else{
//      echo "File Not Found";
// }

// Note: "c" Write Only.
// Note : "c+" Read/Write
//  $fileopen = fopen("l46file.txt","c");
// if($fileopen){
//     fwrite($fileopen," I created new file");

//     $fileopen = fopen("l46file.txt","c+");
//     $fileread = fread($fileopen,filesize("l46file.txt"));
//     fclose($fileopen);

//     echo $fileread;
// }else{
//      echo "File Not Found";
// }




// $fileopen = fopen("l47file.txt","w");
// if($fileopen){
//     $message = "Welcome to our class.\n";

//     fwrite($fileopen,$message);
//     $message = "Thank you for using php file system.";
//     fwrite($fileopen,$message);

//     $fileopen = fopen("l47file.txt","r");
//     $fileread = fread($fileopen,filesize("l47file.txt"));
//     fclose($fileopen);

//     echo $fileread;
// }else{
//      echo "File Not Found";
// }


// =>Append 


// $fileopen = fopen("l48file.txt","a");
// if($fileopen){
//     $message = "Welcome to our class.\n";

//     fwrite($fileopen,$message);
//     $message = "Thank you for using php file system.\n";
//     fwrite($fileopen,$message);

//     $fileopen = fopen("l48file.txt","r");
//     $fileread = fread($fileopen,filesize("l48file.txt"));
//     fclose($fileopen);

//     echo $fileread;
// }else{
//      echo "File Not Found";
// }

// -------------------------------------------



// => Other File Functions

// file_get_contents() = Read
// file_put_contents = write
// file_exists() = check file exist or not 
// copy() = copies a file 
// rename() = renames a file 
// unlink = delete a file 


// echo file_get_contents("l43file.txt");

// $existingfile = "l43file.txt";
// $newfile = "l49file.txt";
// $message = file_get_contents($existingfile);
// $message .= "\n Thank you for using php file system. \n";
// file_put_contents($newfile,$message) or die("Unable to open file");


// $existingfile = "l43file.txt";
// $newfile = "l50file.txt";

// if(file_exists($existingfile)){
//     $message = file_get_contents($existingfile);
//     $message .= "\n Thank you for using php file system. \n";
//     file_put_contents($newfile,$message) or die("Unable to open file");
// }else{
//     echo "File Not Found";
// }

// $existingfile = "l43file.txt";
// $newfile = "l50file.txt";

// if(is_file($existingfile)){
//     $message = file_get_contents($existingfile);
//     $message .= "\n Thank you for using php file system. \n";
//     file_put_contents($newfile,$message) or die("Unable to open file");
// }else{
//     echo "File Not Found";
// }




// $file = "l44file.txt";
// copy($file,"l51file.txt");
// echo file_get_contents("l51file.txt");



// =>rename()
// $file = "l51file.txt";
// rename($file,"l52file.txt");
// echo file_get_contents("l52file.txt");

// =>unlink()

// $file = "l52file.txt";

// if(file_exists($file)){
//     unlink($file);
//     echo "File Delete Successfully";
// }else{
//     echo "File Not Found";
// }

// =>Show all  file
echo "<pre>".print_r(glob("*.*"),true)."</pre>" ;

?>

<!-- 26PHP -->