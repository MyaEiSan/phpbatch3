<?php 

// Note :: Session store on Server (Super Global Variable)

session_start();

if(isset($_SESSION['idxcount'])){
    $_SESSION['idxcount']++;
}else{
    $_SESSION['idxcount'] = 1;
}

echo "IDX count = ".$_SESSION['idxcount'];

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Session</title>
    </head>
    <body>
        <ul>
            <li><a href="./l56session.php">Set Session</a></li>
            <li><a href="./l56destroysession.php" target="_blank">Delete Session</a></li>
        </ul>
    </body>
</html>

<!-- 23CC -->