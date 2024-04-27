<?php 

ini_set('display_errors',1);

class Categories extends Controller{
    protected $categorymodel;
    protected $statusmodel;
    protected $usermodel;

    public function __construct()
    {

        if(!auth()){
            redirect('public/users/login');
        }else{
            $this->categorymodel = $this->model('Category');
            $this->statusmodel = $this->model('Status');
            $this->usermodel = $this->model('User');
        }
    }

    public function index(){
        $categories = $this->categorymodel->allcategories();
        $data = [
            'categories' => $categories
        ];
        $this->view('categories/index',$data);
    }

    public function create(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // sanitize POST array 
        $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

        //    echo "<pre>".print_r($_POST,true)."</pre>";
            $statuses = $this->statusmodel->allstatuses();

            $data = [
                'name' => trim($_POST['name']),
                'status_id' => $_POST['status_id'],
                'user_id' => $_SESSION['user_id'],
                'nameerr' => '',
                'status_iderr' => '',
                'statuses' => $statuses

            ];

            // validate data 

            if(empty($data['name'])){
                $data['nameerr'] = 'Please enter name';
            }

            if(empty($data['status_id'])){
                $data['status_iderr'] = 'Please choose status';
            }

            // no errors 

            if(empty($data['nameerr']) && empty($data['status_iderr'])){
                // validated

                if($this->categorymodel->createcategory($data)){
                    flash('category_success','New Category Created');

                    // echo "<pre>".print_r($data,true)."</pre>";
                    redirect('/public/categories');
                }else{
                    die('Error Found');
                }

            }else{

                // load view page with error 
                
                $this->view('categories/create',$data);
            }


        }else{
            $statuses = $this->statusmodel->allstatuses();
            $data = [
                'name' => '',
                'statuses' => $statuses
            ];

            $this->view('categories/create', $data);
        }
    }


    public function edit($id){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // sanitize POST array 
        $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

        $statuses = $this->statusmodel->allstatuses();

        //    echo "<pre>".print_r($_POST,true)."</pre>";


            $data = [
                'id' => $id,
                'name' => trim($_POST['name']),
                'status_id' => $_POST['status_id'],
                'user_id' => $_SESSION['user_id'],
                'nameerr' => '',
                'status_iderr' => '',
                'statuses' => $statuses
            ];

            

            // validate data 
    
            if(empty($data['name'])){
                $data['nameerr'] = 'Please enter name';
            }

            if(empty($data['status_id'])){
                $data['status_iderr'] = 'Please choose status';
            }

            // no errors 

            if(empty($data['nameerr']) && empty($data['status_iderr'])){
                // validated 
                if($this->categorymodel->updatecategory($data)){
                    flash('category_success','Category Updated');
                    redirect('/public/categories');
                }else{
                    die('Error Found');
                }

            }else{

                // load view page with error 
                
                $this->view('categories/edit',$data);
            }


        }else{

            $category = $this->categorymodel->getcategorybyid($id);
            $statuses = $this->statusmodel->allstatuses();

            // check post owner 
            if($category['user_id'] != $_SESSION['user_id']){
                redirect('categories');
            }


            $data = [
                'id' => $id,
                'name' => $category['name'],
                'status_id' => $category['status_id'],
                'statuses' => $statuses
            ];

            $this->view('categories/edit', $data);
        }
    }

    public function destroy($id){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $category = $this->categorymodel->getcategorybyid($id);

            if($category['user_id'] != $_SESSION['user_id']){
                redirect('categories');
            }


            if($this->categorymodel->deletecategory($id)){
                flash('category_success','Category Deleted');
                redirect('public/categories');
            }else{
                die('Error Found!');
            }
        }else{
            redirect('public/categories');
        }
    }
}

?>