<?php 
namespace App\classes;

abstract class DatabaseConn
{

    /**
     * connect to database 
     */
    public function __construct() {
        $this->db = new \mysqli (
            DATABASE_HOST,
            DATABASE_USER,
            DATABASE_PASSWORD,
            DATABASE_NAME
        );
    } 

}



?>