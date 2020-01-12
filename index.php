<?php 

include_once('src/load_classes.php');

session_start();

$page = new Page;

if( 
    isset($_SESSION['login']) && 
    ( !isset($_GET['page']) || $_GET['page'] == 'account' ) 
){

    // displays account details
    $page->set_title('Account');
    $page->set_username($_SESSION['user_name']);
    $page->set_email($_SESSION['email']);
    $page->page_header(); 
    $page->account();

} elseif ( isset($_SESSION['login']) && $_GET['page'] == 'logout' ) {

    // log out
    session_destroy();
    header('Location: ./', true, 301);

} elseif ( isset($_GET['page']) && $_GET['page'] == 'registration' )  {

    // displays registration form 
    $page->set_title('Register');
    $page->page_header(); 
    $page->registration_form();

} elseif ( isset($_GET['page']) && $_GET['page'] == 'message' )  {

    // displays message
    $page->set_title($_SESSION['title']);
    $page->page_header();
    $page->set_msg($_SESSION['msg']);
    $page->msg();

} else {

    // displays login form 
    $page->set_title('Login');
    $page->page_header();
    $page->login_form();
}

$page->footer();

?>