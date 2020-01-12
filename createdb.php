<?php 

include_once('src/load_classes.php');

class CreateDB
{
    protected $host = 'localhost';
    protected $user = 'root';  
    protected $pass = ''; 
    protected $db;
    
    public function __construct() {
        $this->db = new mysqli (
            $this->host,
            $this->user,
            $this->pass,
        );
        $this->create_db();
        $this->select_db();
        $this->create_table();
    }

    protected function create_db() {
        $this->db->query('CREATE DATABASE IF NOT EXISTS registration');
        echo 'database registration created <br>';
    }

    protected function select_db() {
        $this->db->select_db('registration');
    }

    protected function create_table() {
        $this->db->query('CREATE TABLE IF NOT EXISTS user (
            id INT not null primary key AUTO_INCREMENT,
            user_name varchar(20) not null,
            password char(40) not null,
            email varchar(100) not null
            )');
            echo 'table user created <br>';
    }

    public function add_user($name, $email, $pass) {
        $this->db->query('INSERT INTO user (user_name, password, email) 
        VALUES ("'.$name.'" , "'.$email.'" , "'.$pass.'")');
        echo 'user '.$name.' added to database <br>';
    }

}

$name = 'JonVanDoe';
$pass = 'Password123';
$email = $name.'@gmail.com';

$db = new CreateDB;

for ($i=1; $i <=20; $i++) {

    $new_name = $name.$i;
    $new_email = $new_name.'@gmail.com';

    $db->add_user($new_name, $pass, $new_email);

}



?>