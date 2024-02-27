<?php 

session_start();

function flash($sessionname ="",$message = "",$class="alert alert-success"){

    if(!empty($sessionname)){

        if(empty($_SESSION[$sessionname]) && !empty($message)){
            $_SESSION[$sessionname] = $message;
            $_SESSION[$sessionname.'_class'] = $class;
        }elseif(!empty($_SESSION[$sessionname]) && empty($message)){

            $classcolor = !empty($_SESSION[$sessionname.'_class'])? $_SESSION[$sessionname.'_class'] : '';

            echo '<div class="'.$classcolor.'">'.$_SESSION[$sessionname].'</div>';

            unset($_SESSION[$sessionname]);
            unset($_SESSION[$sessionname.'_class']);
        }
    }
}

?>