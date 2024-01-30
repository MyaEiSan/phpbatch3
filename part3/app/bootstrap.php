<?php 

// Load Config 
require_once 'config/config.php';

// Load Libraries 
// require_once "libraries/Controller.php";
// require_once "libraries/Core.php";
// require_once "libraries/Database.php";

// Load Libraries (Autoload)
spl_autoload_register(function($classname){
    require_once('libraries/'.$classname.'.php');
});

// 0:52:42

?>