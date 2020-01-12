<?php 

class DatabaseConn
{
    protected $host = 'localhost';
    protected $user = 'root';  
    protected $pass = ''; 
    protected $db_name = 'registration';
    protected $db;

    public function __construct() {
        $this->db = new mysqli (
            $this->host,
            $this->user,
            $this->pass,
            $this->db_name,
        );
    } 

    public function get_connection() {
        return $this->db;
    }
}



?>