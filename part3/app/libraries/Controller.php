<?php 

class Controller{
    public function view($view,$data=[]){

    //    check view file exist or not 
        if(file_exists('../app/views/'.$view.'.php')){
            require_once '../app/views/'.$view.'.php';
        }else{
            die("View file does not exists");
        }
    }

    public function model($model){
        
        //    check model file exist or not 
        if(file_exists('../app/models/'.$model.'.php')){
            // require model file 
            require_once '../app/models/'.$model.'.php';
            return new $model();
        }else{
            die("Model file does not exists");
        }
    }
}

?>