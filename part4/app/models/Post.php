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

        $rows = $this->db->getmultidata();
        return $rows; 

    }

    public function createpost($data){
        $this->db->dbquery("INSERT INTO posts(title,content,user_id) VALUE(:title,:content,:user_id)");

        $this->db->dbbind(':title',$data['title']);
        $this->db->dbbind(':content',$data['content']);
        $this->db->dbbind(':user_id',$data['user_id']);

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
        $this->db->dbquery("UPDATE posts SET title=:title,content=:content WHERE id=:id");

        $this->db->dbbind(':id',$data['id']);
        $this->db->dbbind(':title',$data['title']);
        $this->db->dbbind(':content',$data['content']);

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
}

?>

