<?php 

   class Core{

    protected $curcontroller = "Mainpage";
    protected $curmethod = "index";
    protected $params = [];

    public function __construct(){

        $url = $this->geturl();

        if(file_exists("../app/controllers/".ucwords($url[0]).".php")){
            $this->curcontroller = ucwords($url[0]);

          
            unset($url[0]);
        }

        // Require Controller 
        require_once("../app/controllers/".$this->curcontroller.".php");
        $this->curcontroller = new $this->curcontroller;

        if(isset($url[1])){
            if(method_exists($this->curcontroller,$url[1])){
                $this->curmethod = $url[1];
                unset($url[1]); 
            }
        }

        
        $this->params = $url ? array_values($url) : [];  
        call_user_func_array([$this->curcontroller,$this->curmethod],$this->params);

    }

    public function geturl(){

        $url = isset($_GET['url']) ? rtrim($_GET['url'],'/') : '';
                  
        $url = filter_var($url,FILTER_SANITIZE_URL); 
        $url = explode('/',$url);
        return $url;

    }
    
   }

?>