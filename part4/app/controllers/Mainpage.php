<?php

class MainPage extends Controller{

    public function __construct()
    {
        $this->mainmodel = $this->model('Main');
    }

    public function index(){

      
        $data = [
            "title" => "Main"
        ];

         $this->view('mainpage/index',$data);
    }

    public function about(){
        $data = [
            "title" => "About"
        ];

        $this->view('mainpage/about',$data);
    }

    public function properties(){
        $data = [
            "title" => "Properties"
        ];

        $this->view('mainpage/properties',$data);
    }

    public function services(){
        $data = [
            "title" => "Services"
        ];

        $this->view('mainpage/services',$data);
    }

    public function customer(){
        $data = [
            "title" => "Customer"
        ];

        $this->view('mainpage/customer',$data);
    }

    public function furniture(){
        $data = [
            "title" => "Furniture"
        ];

        $this->view('mainpage/furniture',$data);
    }

    public function contact(){
        $data = [
            "title" => "Contact"
        ];

        $this->view('mainpage/contact',$data);
    }
}
?>