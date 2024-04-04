<?php 

ini_set('display_errors',1);

class Posts extends Controller{

    protected $postmodel;
    protected $usermodel;

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
        }
    }

    public function index(){
        $posts = $this->postmodel->allposts();
        $data = [
            'posts' => $posts
        ];
        $this->view('posts/index',$data);
    }

    public function create(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // sanitize POST array 
        $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

        //    echo "<pre>".print_r($_POST,true)."</pre>";


            $data = [
                'title' => trim($_POST['title']),
                'content' => trim($_POST['content']),
                'user_id' => $_SESSION['user_id'],
                'titleerr' => '',
                'contenterr' => ''
            ];

            // validate data 
            if(empty($data['title'])){
                $data['titleerr'] = 'Please enter title';
            }

            if(empty($data['content'])){
                $data['contenterr'] = 'Please enter content';
            }

            // no errors 

            if(empty($data['titleerr']) && empty($data['contenterr'])){
                // validated 

                if($this->postmodel->createpost($data)){
                    flash('post_success','New Post Created');
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
                'title' => '',
                'content' => ''
            ];

            $this->view('posts/create', $data);
        }
    }

    public function show($id){
        $post = $this->postmodel->getpostbyid($id);
        $user = $this->usermodel->getuserbyid($post['user_id']);

        $data = [
            'post'=>$post, 
            'user' => $user
        ];

        $this->view('posts/show',$data);
        
    }

    public function edit($id){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // sanitize POST array 
        $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

        //    echo "<pre>".print_r($_POST,true)."</pre>";


            $data = [
                'id'=>$id,
                'title' => trim($_POST['title']),
                'content' => trim($_POST['content']),
                'user_id' => $_SESSION['user_id'],
                'titleerr' => '',
                'contenterr' => ''
            ];

            // validate data 
            if(empty($data['title'])){
                $data['titleerr'] = 'Please enter title';
            }

            if(empty($data['content'])){
                $data['contenterr'] = 'Please enter content';
            }

            // no errors 

            if(empty($data['titleerr']) && empty($data['contenterr'])){
                // validated 

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
                'title' => $post['title'],
                'content' => $post['content']
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

            if($this->postmodel->deletePost($id)){
                flash('post_success','Post Delete');
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