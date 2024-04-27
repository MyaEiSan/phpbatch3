<?php 

ini_set('display_errors',1);

class Subscribes extends Controller{

    protected $subscribemodel;

    public function __construct()
    {

        if(!auth()){
            redirect('public/users/login');
        }else{
            $this->subscribemodel = $this->model('Subscribe');
        }
    }

    public function create(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){


        // sanitize POST array 
        $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

            $data = [
                'name' =>  trim($_POST['name']),
                'email' => trim($_POST['email']),
                'status_id' => trim($_POST['status_id'])
            ];

                if($this->subscribemodel->createsubscribe($data)){
                    flash('subscribe_success','Subscribe Created');

                    // echo "<pre>".print_r($data,true)."</pre>";
                    redirect('/public/mainpage');
                }else{
                    die('Error Found');
                }


        }
    }
    
}

?>