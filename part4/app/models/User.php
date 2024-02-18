<?php 

class User{
    private $db; 

    public function __construct()
    {
        $this->db = new Database();
    }

    public function register($data){
        $this->db->dbquery("INSERT INTO users(name,email,password) VALUES(:name,:email,:password)");

        $this->db->dbbind(":name",$data['fullname']);
        $this->db->dbbind(":email",$data['email']);
        $this->db->dbbind(":password",$data['password']);

        if($this->db->dbexecute()){
            return true;
        }else{
            return false;
        }
    }

    public function registeremailcheck($email){
        $this->db->dbquery("SELECT * FROM users WHERE email=:email");
        $this->db->dbbind(":email",$email);
        $this->db->getsingledata();

        if($this->db->dbrowcount() > 0){
            return true;
        }else{
            return false;
        }
    }
}

?>