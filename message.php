<?php 
use App\classes;
include 'config.php';

session_start();

$page = new PageTemplates; 

$page->set_title( 'Error' );
$page->get_header();

$page->get_message();

$page->get_footer();

session_destroy();
?>