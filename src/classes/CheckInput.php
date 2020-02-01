<?php 
namespace App\classes;

class CheckInput
{
    /**
     * @param string $email
     * @return string 
     * 
     * if email is not correct it return error message 
     */
    public function check_email ( $email ) {

        if ( !filter_var( $email , FILTER_VALIDATE_EMAIL)  ) {

            return 'Please enter valid email';

        } 

    }

    /**
     * @param string $name
     * @return string 
     * 
     * if name is not correct it return error message
     */
    public function check_name ( $name ) {
        
        
        /**
         * check if name is correct 
         */        
        if( !preg_match( '/^[a-zA-Z ]*$/' , $name)) {

            return 'Name should contain only letters';
        /**
        * check if lenght is ok
        */    
        } else if( strlen($name) > 25 || strlen($name) < 5 ) {

            return 'Name should contain 5 to 25 letters';

        }

    }

    /**
     * @param string $password1
     * @return string 
     * 
     * if password is not correct it return error message
     */
    public function check_password ( $password ) {
        
        /**
        * check if password contain at least one lowercase letter
        */ 
        if( !preg_match( '/[a-z]/' , $password )) {

            return 'Password should contain at least one lowercase letter';

        /**
        * check if password contain at least one capital letter
        */ 
        } else if( !preg_match( '/[A-Z]/' , $password )) {

            return 'Password should contain at least one capital letter';

        /**
         * check if password contain at least one number 
         */        
        } else if( !preg_match( '/[0-9]/' , $password ) ) {

            return 'Password should contain at least one number';

        /**
        * check if lenght is ok
        */    
        } else if( strlen($password ) > 20 || strlen($password ) < 8 ) {

            return 'Password should contain 8 to 20 characters';
        
        }

    }

    /**
     * @param string $password1
     * @param string $password2
     * @return bool
     * 
     * checking if both password are the same
     */
    public function check_both_passwords ( $password1, $password2 ) {

        /**
        * check if password contain at least one lowercase letter
        */ 
        if( $password1 != $password2  ) {

            return 'Both passwords must be the same';

        } 

    }
 }
?>