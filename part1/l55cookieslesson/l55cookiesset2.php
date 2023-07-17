<?php 

// setcookie('thb','Thai Baht',time()+(86400+5)); //3days
// echo "Cookies Set Successfully";

// =>Syntax (Note :: gone after browser end)
// setcookie('cookiename','value',expire,path);
// path = '/' means any route 

setcookie('thb','Thai Baht',time()+(86400+5),'/'); //3days
echo "Cookies Set Successfully";

?>