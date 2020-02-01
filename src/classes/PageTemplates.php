<?php
namespace App\classes;


class PageTemplates
{

    public $title;

    public function get_header( ) {
        
        include_once 'html\header.php';

    }

    public function get_footer() {
        
        include_once 'html\footer.php';

    }

    public function get_login_form() {
        
        include_once 'html\login_form.php';
    }

    public function get_registration_form() {
                
        include_once 'html\registration_form.php';

    }

    public function get_message ( ) {
                
        include_once 'html\message.php';

    }

    public function get_account() {
                
        include_once 'html\account.php';
    }

    public function set_title( $title ) {
                
        $_SESSION['page_title'] = $title;

    }

}
?>