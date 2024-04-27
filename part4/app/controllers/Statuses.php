<?php 

ini_set('display_errors',1);

class Statuses extends Controller{

    protected $statusmodel;
    protected $usermodel;

    public function __construct()
    {

        if(!auth()){
            redirect('public/users/login');
        }else{
            $this->statusmodel = $this->model('Status');
            $this->usermodel = $this->model('User');
        }
    }

    public function index(){
        $statuses = $this->statusmodel->allstatuses();
        $data = [
            'statuses' => $statuses
        ];
        $this->view('statuses/index',$data);
    }

    public function create(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // sanitize POST array 
        $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

        //    echo "<pre>".print_r($_POST,true)."</pre>";


            $data = [
                'name' => trim($_POST['name']),
                'user_id' => $_SESSION['user_id'],
                'nameerr' => ''
            ];

            // validate data 

            if(empty($data['name'])){
                $data['nameerr'] = 'Please enter name';
            }

            // no errors 

            if(empty($data['nameerr'])){
                // validated

                if($this->statusmodel->createstatus($data)){
                    flash('status_success','New Status Created');

                    // echo "<pre>".print_r($data,true)."</pre>";
                    redirect('/public/statuses');
                }else{
                    die('Error Found');
                }

            }else{

                // load view page with error 
                
                $this->view('statuses/create',$data);
            }


        }else{
            $data = [
                'name' => ''
            ];

            $this->view('statuses/create', $data);
        }
    }


    public function edit($id){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // sanitize POST array 
        $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

        //    echo "<pre>".print_r($_POST,true)."</pre>";


            $data = [
                'id' => $id,
                'name' => trim($_POST['name']),
                'user_id' => $_SESSION['user_id'],
                'nameerr' => ''
            ];

            // validate data 
    
            if(empty($data['name'])){
                $data['nameerr'] = 'Please enter name';
            }

            // no errors 

            if(empty($data['nameerr'])){
                // validated 
                if($this->statusmodel->updatestatus($data)){
                    flash('status_success','Status Updated');
                    redirect('/public/statuses');
                }else{
                    die('Error Found');
                }

            }else{

                // load view page with error 
                
                $this->view('statuses/edit',$data);
            }


        }else{

            $post = $this->statusmodel->getstatusbyid($id);

            // check post owner 
            if($post['user_id'] != $_SESSION['user_id']){
                redirect('statuses');
            }


            $data = [
                'id' => $id,
                'name' => $post['name']
            ];

            $this->view('statuses/edit', $data);
        }
    }

    public function destroy($id){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $post = $this->statusmodel->getstatusbyid($id);

            if($post['user_id'] != $_SESSION['user_id']){
                redirect('statuses');
            }


            if($this->statusmodel->deleteStatus($id)){
                flash('status_success','Status Deleted');
                redirect('public/statuses');
            }else{
                die('Error Found!');
            }
        }else{
            redirect('statuses');
        }
    }
}

?>