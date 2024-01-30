<?php

class MainPage extends Controller{

    public function __construct()
    {
        // echo "I am Main Page <br/>";
        $this->mainmodel = $this->model('Main');
    }

    public function index(){
        // echo "I am Main Page - Index <br/>";
        // $this->view('mainpage/index);

        // $this->view('mainpage/index',["greeting"=>"Hello Sir"]);

        // $data = [
        //     "greeting" => "Hello Sir"
        // ];

        // $this->view('mainpage/index',$data);

        $articles = $this->mainmodel->getarticles();
        $data = [
            "title" => "We got all articles",
            "articles" => $articles
        ];

         $this->view('mainpage/index',$data);
    }

    public function show($id){
        echo "I am Main Page - Show and ID is $id <br/>";
    }
}
?>