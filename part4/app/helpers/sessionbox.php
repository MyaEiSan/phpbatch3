<?php 

// check user login  (true or false)
function auth(){
    if(isset($_SESSION['user_id'])){
        return true;
    }else{
        return false;
    }
}

?>