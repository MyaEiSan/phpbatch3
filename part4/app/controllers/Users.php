<?php 

ini_set('display_errors',1);

class Users extends Controller{

    protected $usermodel;

    public function __construct()
    {
        $this->usermodel = $this->model("User");
    }

    public function register(){

        $data = [];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

            $data = [
                "fullname" => trim($_POST['fullname']),
                "email" => trim($_POST['email']),
                "password" => trim($_POST['password']),
                "confirmpassword" => trim($_POST['confirmpassword']),
                "fullnameerr" => "",
                "emailerr" => "",
                "passworderr" => "",
                "confirmpassworderr" => ""
            ];

            if(empty($data['fullname'])){
                $data["fullnameerr"] = "Please enter full name";
            }

            if(empty($data['email'])){
                $data["emailerr"] = "Please enter email";
            }else{
                // check email exist or not 

                if($this->usermodel->registeremailcheck($data['email'])){
                    $data['emailerr'] = "Email already exists";
                }
            }

            if(empty($data['password'])){
                $data["passworderr"] = "Please enter password";
            }elseif(strlen($data['password']) < 5){
                $data["passworderr"] = "Password must be at least 5 characters.";
            }

            if(empty($data['confirmpassword'])){
                $data["confirmpassworderr"] = "Please enter confirm password";
            }else{
                if($data['confirmpassword'] != $data['password']){
                    $data["confirmpassworderr"] = "Password do not match.";
                }
            }

            if(empty($data['fullnameerr']) && empty($data['emailerr']) && empty($data['passworderr']) && empty($data['confirmpassworderr'])){
                //Validated

                // die('success');

                $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);

                if($this->usermodel->register($data)){

                    $redirecturl = URLROOT."/public/users/login";
                    header('location:'.$redirecturl);
                }else{
                    die('Something Wrong');
                }
            }else{
                // Error 
                $this->view('users/register',$data);
            }

            

        }else{

            $data = [
                "fullname" => "",
                "email" => "",
                "password" => "",
                "confirmpassword" => "",
                "fullnameerr" => "",
                "emailerr" => "",
                "passworderr" => "",
                "confirmpassworderr" => ""
            ];


        }

        // echo $_POST['confirmpassword'];
        $this->view('users/register',$data);
       
    }

    public function login(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

            $data = [
                "email" => trim($_POST['email']),
                "password" => trim($_POST['password'])
            ];

          

            if(empty($data['email'])){
                $data["emailerr"] = "Please enter email";
            }

            if(empty($data['password'])){
                $data["passworderr"] = "Please enter password";
            }

            $this->view('users/login',$data);

        }else{

        }

        $this->view('users/login');
    }
}

?>