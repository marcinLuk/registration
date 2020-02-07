<?php 

include 'config.php';


session_start();

if( isset( $_SESSION['login'] ) ) {
    header('Location: account.php');
}

$page = new App\classes\PageTemplates; 

$page->set_title( 'Welcome' );
$page->get_header();

$page->get_login_form();
$page->get_footer();
?>