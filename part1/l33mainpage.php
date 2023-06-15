<?php 
// => include or require


// include "path/filename.format";
// include ("path/filename.format");
// require "path/filename.format";
// require ("path/filename.format");

// include_once "path/filename.format";
// include_once ("path/filename.format");
// require_once "path/filename.format";
// require_once ("path/filename.format");

// echo "This is Article 1 <br/>";

// include "./l34headerpage.php";
// echo "<br/>";
// require "./l35contentpage.php";
// echo "<br/>";
// include ("./l36footerpage.php");

echo "<hr/>";

echo "This is Article 2 <br/>";

include_once "./l34headerpage.php";
echo "<br/>";
require_once ("./l35contentpage.php");
echo "<br/>";
include_once "./l36footerpage.php";


// echo "<hr/>";


// echo "This is Article 3 <br/>";

// include "./l34headerpage.php";
// echo "<br/>";
// require ("./l35contentpage.php");
// echo "<br/>";
// include "./l36footerpage.php";

?>