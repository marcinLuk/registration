<?php 
namespace App\classes;


class User extends DatabaseConn
{
    
    /**
    * @param string $email
    * @return bool
    * 
    * check if user exist in database 
    */
    public function check_if_user_exist($email) {

        $result = $this->select_user( $email ); 
        if( $result ) {

            return true;

        } else {

            return false;

        }
    }

    /**
    * @param string $email
    * @return mixed
    * 
    * select user from database, on sucess returns array on faliure - null
    */
    public function select_user( $email ) {

        $sql = "SELECT * FROM  users WHERE email = ?";

        $stmt= $this->db->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();

        $result = $stmt->get_result();
        $array = $result->fetch_assoc();

        return $array;

    }

    /**
    * @param string $user_name
    * @param string $password
    * @param string $email
    * @return null
    * 
    * register new user 
    */
    public function register($user_name, $password, $email) {

        if ( !$this->check_if_user_exist( $email ) ) {

            $sql = 'INSERT INTO users (user_name, email, password) VALUES (?,?,?)';
            $stmt = $this->db->prepare($sql);
            $stmt->bind_param('sss', $user_name, $email, $password);
            $stmt->execute();

        }    
        
    }

    /**
    * @param string $email
    * @return null
    * 
    * delete user from database 
    */
    public function delete( $email ) {

        if ( $this->check_if_user_exist( $email ) ) {

            $sql = 'DELETE FROM users WHERE email=?';
            $stmt = $this->db->prepare($sql);
            $stmt->bind_param( 's', $email );
            $stmt->execute();

        }    
        
    }

}

?>