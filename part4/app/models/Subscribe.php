<?php 

class Subscribe{
    private $db; 

    public function __construct()
    {
        $this->db = new Database();
    }

  

    public function createsubscribe($data){
        $this->db->dbquery("INSERT INTO subscribes(name,email,status_id) VALUE(:name,:email,:status_id)");
        
        $this->db->dbbind(':name',$data['name']);
        $this->db->dbbind(':email',$data['email']);
        $this->db->dbbind(':status_id',(int)$data['status_id']);

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
<!-- 
CREATE TABLE IF NOT EXISTS subscribes(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(50), 
    email VARCHAR(100), 
    status_id INT DEFAULT 0, 
    created_at TIMESTAMP DEFAULT now()
)

DESC subscribes;
 -->

