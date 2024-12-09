<?php 

ini_set('display_errors',1);

class Posts extends Controller{

    protected $postmodel;
    protected $usermodel;
    protected $statusmodel; 
    protected $categorymodel;

    public function __construct()
    {

        // if(!isset($_SESSION['user_id'])){
        //     redirect('public/users/login');
        // }

        if(!auth()){
            redirect('public/users/login');
        }else{
            $this->postmodel = $this->model('Post');
            $this->usermodel = $this->model('User');
            $this->statusmodel = $this->model('Status');
            $this->categorymodel = $this->model('Category');
        }
    }

    public function index(){

        // Without Pagination 
        // $posts = $this->postmodel->allposts();
        // $categories = $this->categorymodel->allcategories();
        // $statuses = $this->statusmodel->allstatuses();
        // $data = [
        //     'posts' => $posts,
        //     'categories' => $categories, 
        //     'statuses' => $statuses
        // ];
        // $this->view('posts/index',$data);


        // = With Pagination ()
        $limit = 3; 
        $page = isset($_GET['page'])? $_GET['page']: 1;
        $offset = ($page -1) * $limit; 

        $posts = $this->postmodel->getpagination($limit,$offset);
        $totalpostscount = $this->postmodel->gettotalpost();
        
        $totalpages = ceil($totalpostscount/$limit); 

        $data = [
            'posts' => $posts, 
            'page' => $page, 
            'totalpages' => $totalpages
        ]; 

        $this->view('posts/index',$data);

    }

    public function create(){

        $categories = $this->categorymodel->allcategories();
        $statuses = $this->statusmodel->allstatuses();

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // sanitize POST array 
        $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

        //    echo "<pre>".print_r($_POST,true)."</pre>";


            $data = [
                'image' =>  $_FILES['image']['name'],
                'category_id' => $_POST['category_id'],
                'title' => trim($_POST['title']),
                'content' => trim($_POST['content']),
                'user_id' => $_SESSION['user_id'],
                'status_id' => $_POST['status_id'],
                'imageerr' => '',
                'category_iderr' => '',
                'titleerr' => '',
                'contenterr' => '',
                'status_iderr' => '',
                'categories' => $categories, 
                'statuses' => $statuses
            ];

            // validate data 
            if(empty($data['image'])){
                $data['imageerr'] = 'Please insert image';
            }

            
            if(empty($data['category_id'])){
                $data['category_iderr'] = 'Please select category';
            }

            if(empty($data['title'])){
                $data['titleerr'] = 'Please enter title';
            }

            if(empty($data['content'])){
                $data['contenterr'] = 'Please enter content';
            }

            if(empty($data['status_id'])){
                $data['status_iderr'] = 'Please select status';
            }

            // no errors 

            if(empty($data['imageerr']) && empty($data['category_iderr']) && empty($data['status_iderr']) && empty($data['titleerr']) && empty($data['contenterr'])){
                // validated
                
                $getroot =  dirname(dirname(dirname(__FILE__)));
                $uploaddir = $getroot."/public/assets/image/";
                $newfilename = $data['user_id'].time().basename($_FILES['image']['name']); 
                $uploadfile = $uploaddir.$newfilename;

                if(move_uploaded_file($_FILES['image']['tmp_name'],$uploadfile)){
                    // echo "Uploaded Successfully";
                    $data['image'] = $newfilename;
                }else{
                    echo "Uploading Failed";
                }

                if($this->postmodel->createpost($data)){
                    flash('post_success','New Post Created');

                    // echo "<pre>".print_r($data,true)."</pre>";
                    redirect('/public/posts');
                }else{
                    die('Error Found');
                }

            }else{

                // load view page with error 
                
                $this->view('posts/create',$data);
            }


        }else{
            $data = [
                'image' => '',
                'category_id' => '',
                'title' => '',
                'content' => '',
                'status_id' => '',
                'categories' => $categories, 
                'statuses' => $statuses
            ];

            $this->view('posts/create', $data);
        }
    }

    public function show($id){
        $post = $this->postmodel->getpostbyid($id);
        $user = $this->usermodel->getuserbyid($post['user_id']);
        $category = $this->categorymodel->getcategorybyid($post['category_id']);
        $status = $this->statusmodel->getstatusbyid($post['status_id']);

        $data = [
            'post'=>$post, 
            'category' => $category, 
            'status' => $status,
            'user' => $user
        ];

        $this->view('posts/show',$data);
        
    }

    public function edit($id){

        $categories = $this->categorymodel->allcategories();
        $statuses = $this->statusmodel->allstatuses();

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // sanitize POST array 
        $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

        //    echo "<pre>".print_r($_POST,true)."</pre>";


            $data = [
                'id'=>$id,
                'category_id' => $_POST['category_id'],
                'image'=> $_POST['old_image'],
                'title' => trim($_POST['title']),
                'content' => trim($_POST['content']),
                'user_id' => $_SESSION['user_id'],
                'status_id' => $_POST['status_id'],
                'imageerr' => '',
                'category_iderr' => '',
                'titleerr' => '',
                'contenterr' => '',
                'status_iderr' => '',
                'categories' => $categories,
                'statuses' => $statuses
            ];

            // validate data 
            if(empty($data['category_id'])){
                $data['category_iderr'] = 'Please select category';
            }


            if(empty($data['title'])){
                $data['titleerr'] = 'Please enter title';
            }

            if(empty($data['content'])){
                $data['contenterr'] = 'Please enter content';
            }

            if(empty($data['stattus_id'])){
                $data['stattus_iderr'] = 'Please select status';
            }


            // no errors 

            if(empty($data['titleerr']) && empty($data['category_iderr']) && empty($data['status_iderr']) && empty($data['contenterr'])){
                // validated 
                if(!empty($_FILES['image']['name'])){

                    $getroot =  dirname(dirname(dirname(__FILE__)));
                    $uploaddir = $getroot."/public/assets/image/";
                    $newfilename = $data['user_id'].time().basename($_FILES['image']['name']); 
                    $uploadfile = $uploaddir.$newfilename;

                    // remove old image 
                    $getoldimage = $uploaddir.$data["image"];

                    if(file_exists($getoldimage)){
                        unlink($getoldimage);
                    }

                    // replace new image 
    
                    if(move_uploaded_file($_FILES['image']['tmp_name'],$uploadfile)){
                        // echo "Uploaded Successfully";
                        $data['image'] = $newfilename;
                    }else{
                        echo "Uploading Failed";
                    }
                }else{
                    $data['image'] = $_POST['old_image'];
                }

               

                if($this->postmodel->updatepost($data)){
                    flash('post_success','Post Updated');
                    redirect('/public/posts');
                }else{
                    die('Error Found');
                }

            }else{

                // load view page with error 
                
                $this->view('posts/edit',$data);
            }


        }else{

            $post = $this->postmodel->getpostbyid($id);

            // check post owner 
            if($post['user_id'] != $_SESSION['user_id']){
                redirect('posts');
            }


            $data = [
                'id' => $id,
                'category_id' => $post['category_id'],
                'image' => $post['image'],
                'title' => $post['title'],
                'content' => $post['content'],
                'status_id' => $post['status_id'],
                'categories' => $categories,
                'statuses' => $statuses
            ];

            $this->view('posts/edit', $data);
        }
    }

    public function destroy($id){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $post = $this->postmodel->getpostbyid($id);

            if($post['user_id'] != $_SESSION['user_id']){
                redirect('posts');
            }

            // remove old image 
            $getroot =  dirname(dirname(dirname(__FILE__)));
            $uploaddir = $getroot."/public/assets/image/";
            $getoldimage = $uploaddir.$post["image"];

            if(file_exists($getoldimage)){
                unlink($getoldimage);
            }

            if($this->postmodel->deletePost($id)){
                flash('post_success','Post Deleted');
                redirect('public/posts');
            }else{
                die('Error Found!');
            }
        }else{
            redirect('posts');
        }
    }
}

?>
<!-- 

=>Limit / Offset Pagination Mysql Format
SELECT * FROM tablename 
ORDER BY 
    column name, column name 
LIMIT 
    5     -- only return 5 rows  (or) page size 
OFFSET 
    5     -- skip the first 5 rows 

=> Formula 
(pagenumber - 1) * page size  
-->