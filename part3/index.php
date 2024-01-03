<?php 

echo "I am main index";
echo "<br/>";
echo $_SERVER['QUERY_STRING'];



// http://localhost/Personal/phpbatch3/part3/index.php?name=susu
// http://localhost/Personal/phpbatch3/part3/index.php?name=susu&gender=female&age=20
// articles/show/20

echo $_GET['url'];

// =>For Linux 
// sudo a2enmod rewrite 
// sudo service apache2 stop 
// sudo service apache2 start 
// sudo service apache2 restart 
// sudo service apache2 reload 

// =>For Linux (Apache Edit for rewrite)
// sudo a2enmod rewrite 
// sudo nano /etc/apache2/sites-enabled/000-default.conf
// add these lines at the end 
// <Directory /var/www/html>
    // AllowOverride All 
// </Directory>

?>

