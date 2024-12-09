<?php 

class Post{
    private $db; 

    public function __construct()
    {
        $this->db = new Database();
    }

    public function allposts(){
        // $this->db->dbquery("SELECT * FROM posts");

        // $this->db->dbquery("SELECT * FROM posts 
        // INNER JOIN users
        // ON posts.user_id = users.id 
        // ORDER BY posts.created_at DESC
        // ");

        $this->db->dbquery("SELECT *,
        posts.id AS postid, 
        posts.created_at AS publicdate 
        FROM posts 
        INNER JOIN users
        ON posts.user_id = users.id 
        ORDER BY posts.created_at DESC
        ");

        $rows = $this->db->getmultidatabyarray();
        return $rows; 

    }

    public function createpost($data){
        $this->db->dbquery("INSERT INTO posts(image,category_id,title,content,user_id,status_id) VALUE(:image,:category_id,:title,:content,:user_id,:status_id)");
        
        $this->db->dbbind(':image',$data['image']);
        $this->db->dbbind(':category_id',$data['category_id']);
        $this->db->dbbind(':title',$data['title']);
        $this->db->dbbind(':content',$data['content']);
        $this->db->dbbind(':user_id',$data['user_id']);
        $this->db->dbbind(':status_id',$data['status_id']);

        if($this->db->dbexecute()){
            return true;
        }else{
            return false;
        }
    }

    public function getpostbyid($id){
        $this->db->dbquery("SELECT * FROM posts WHERE id = :id");
        $this->db->dbbind(":id",$id);

        $row = $this->db->getsingledata();

        return $row; 
    }

    public function updatepost($data){
        $this->db->dbquery("UPDATE posts SET image=:image, category_id=:category_id, title=:title,content=:content, status_id=:status_id WHERE id=:id");

        $this->db->dbbind(':id',$data['id']);
        $this->db->dbbind(':category_id',$data['category_id']);
        $this->db->dbbind(':image',$data['image']);
        $this->db->dbbind(':title',$data['title']);
        $this->db->dbbind(':content',$data['content']);
        $this->db->dbbind(':status_id',$data['status_id']);

        if($this->db->dbexecute()){
            return true;
        }else{
            return false;
        }
    }

    public function deletepost($id){

        $this->db->dbquery("DELETE FROM posts WHERE id=:id");

        $this->db->dbbind(':id',$id);

        if($this->db->dbexecute()){
            return true;
        }else{
            return false;
        }
    }

     
     public function gettotalpost(){
        $this->db->dbquery("SELECT COUNT(*) as total FROM posts");
        return $this->db->getsingledata()['total'];
     }

    public function getpagination($limit, $offset){

        // $this->db->dbquery("SELECT * FROM posts LIMIT :limit OFFSET :offset");

        $this->db->dbquery("SELECT * , 
        posts.id AS postid, 
        posts.created_at AS publicdate FROM posts 
        INNER JOIN users 
        ON posts.user_id = users.id 
        ORDER BY posts.created_at DESC 
        LIMIT :limit OFFSET :offset
        ");
        $this->db->dbbind(':limit',$limit);
        $this->db->dbbind(':offset',$offset);

        return $this->db->getmultidatabyarray();
    }
}

?>

<!-- ALTER TABLE posts 
ADD COLUMN image VARCHAR(255) DEFAULT NULL AFTER id; -->

<!-- ALTER TABLE posts 
ADD COLUMN category_id INT UNSIGNED NOT NULL AFTER content, 
ADD COLUMN status_id INT UNSIGNED NOT NULL AFTER category_id; -->

