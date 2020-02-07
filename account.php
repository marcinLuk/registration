<?php 

include 'config.php';

session_start();

$page = new App\classes\PageTemplates; 

$page->set_title( 'Welcome!' );
$page->get_header();

$page->get_account();

$page->get_footer();
?>