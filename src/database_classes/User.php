<?php 

    class User extends DatabaseConn
    {
        
        private $user_details;

        public function check_if_user_exist($email) {

            $user = $this->select_user($email);

            if($user->num_rows > 0 ) {
                return true;
            } else {
                return false;
            }

        }

        public function verify_user($email, $pass) {

            $result = $this->select_user($email);
            $row = $result->fetch_assoc();

            if($row['password'] === $pass ) {
                $this->set_user_details($row);
                return true;
            } else {
                return false;
            }

        }

        protected function select_user( $email ) {
            $query = $this->db->query( "SELECT * FROM user WHERE email='$email'");
            return $query;
        }

        public function register($user_name, $password, $email) {
            $query = $this->db->query(
            'INSERT INTO user (user_name, password, email)
            VALUES ("'.$user_name.'" , "'.$password.'" , "'.$email.'")
            ');
            return $query;
        }

        public function get_user_details() {
            return $this->user_details;
        }

        public function set_user_details($user_details) {
            $this->user_details = $user_details;
        }

    }




?>