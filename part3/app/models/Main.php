<?php 

class Main{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getarticles(){
        $this->db->dbquery("SELECT * FROM articles");
        return $this->db->getmultidata();
    }


}

?>