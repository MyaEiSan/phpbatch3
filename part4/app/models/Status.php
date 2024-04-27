<?php 

class Status{
    private $db; 

    public function __construct()
    {
        $this->db = new Database();
    }

    public function allstatuses(){

        // $this->db->dbquery("SELECT * FROM statuses");


        $this->db->dbquery("SELECT *,
        statuses.id AS statusid, 
        statuses.name AS originalname,
        statuses.created_at AS publicdate 
        FROM statuses 
        INNER JOIN users
        ON statuses.user_id = users.id 
        ORDER BY statuses.created_at DESC
        ");

        $rows = $this->db->getmultidata();
        return $rows; 

    }

    public function createstatus($data){

        $this->db->dbquery("INSERT INTO statuses(name,user_id) VALUE(:name,:user_id)");
        
        $this->db->dbbind(':name',$data['name']);
        $this->db->dbbind(':user_id',$data['user_id']);

        if($this->db->dbexecute()){
            return true;
        }else{
            return false;
        }
    }

    public function getstatusbyid($id){
        $this->db->dbquery("SELECT * FROM statuses WHERE id = :id");
        $this->db->dbbind(":id",$id);

        $row = $this->db->getsingledata();

        return $row; 
    }

    public function updatestatus($data){
        $this->db->dbquery("UPDATE statuses SET name=:name WHERE id=:id");

        $this->db->dbbind(':id',$data['id']);
        $this->db->dbbind(':name',$data['name']);

        if($this->db->dbexecute()){
            return true;
        }else{
            return false;
        }
    }

    public function deletestatus($id){

        $this->db->dbquery("DELETE FROM statuses WHERE id=:id");

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
CREATE TABLE IF NOT EXISTS statuses(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(50), 
    user_id INT, 
    created_at TIMESTAMP DEFAULT now(), 
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, 
    FOREIGN KEY(user_id) REFERENCES users(id) ON UPDATE CASCADE  ON DELETE CASCADE
);


DESC statuses; 
-->