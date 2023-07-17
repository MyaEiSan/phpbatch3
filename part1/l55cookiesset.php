<?php 
// =>Syntax(Note :: gone after browser end)
// setcookie('cookiename','value');

// setcookie('mmk','Myanmar Kyat');
// echo "Cookies Set Successfully";



// =>Syntax (Note :: gone after browser end)
// setcookie('cookiename','value',expire);

// setcookie('mmk','Myanmar Kyat',time()+60*60*24*3); // 3days
setcookie('mmk','Myanmar Kyat',time()+(86400+5)); //3days
echo "Cookies Set Successfully";
?>