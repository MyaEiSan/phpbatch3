<?php 

ini_set('display_errors',1);

class Users extends Controller{

    protected $usermodel;

    public function __construct()
    {
        $this->usermodel = $this->model("User");
    }

    public function register(){

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

                    // $redirecturl = URLROOT."/public/users/login";
                    // header('location:'.$redirecturl);

                    flash("register_success","You are registered successfully.");
                    redirect('/public/users/login');
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
             // echo $_POST['confirmpassword'];
            $this->view('users/register',$data);


        }
       
    }

    public function login(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

            $data = [
                "email" => trim($_POST['email']),
                "password" => trim($_POST['password']),
                "emailerr" => "",
                "passworderr" => ""
            ];

            // validate email 
            if(empty($data['email'])){
                $data["emailerr"] = "Please enter email";
            }else{
                if($this->usermodel->registeremailcheck($data['email'])){
                    //user found
                }else{
                    $data['emailerr'] = "No user found";
                }
            }
            

            // validate password 
            if(empty($data['password'])){
                $data["passworderr"] = "Please enter password";
            }

            if(empty($data['emailerr']) && empty($data['passworderr'])){
                //Validated

                // die('success');

                $loginuser = $this->usermodel->login($data['email'],$data['password']);

                if($loginuser){
                    // die('Successfull login');
                    $this->createusersession($loginuser);
                }else{
                    $data['passworderr'] = 'Password incorrect';
                    $this->view('users/login',$data);
                }

            }else{
                // Error 
                $this->view('users/login',$data);
            }

            

        }else{

            $data = [
                "email" => "",
                "password" => "",
                "emailerr" => "",
                "passworderr" => ""
            ];
            $this->view('users/login',$data);


        }
    }

    public function createusersession($user){

        // echo $user->id; //err, cuz fetch(PDO::FETCH_ASSOC) in Database file 
        // echo $user['id'];

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['user_email'] = $user['email'];

        // $redirecturl = URLROOT.'/public/mainpage/index';
        // header('location:'.$redirecturl);

        redirect('/public/mainpage/index');


    }

    public function logout(){

        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
        unset($_SESSION['user_email']);
        session_destroy();

        redirect('/public/users/login');
    }
}

?>