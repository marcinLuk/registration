<?php 
namespace App\classes;
include 'config.php';

session_start();

$page = new PageTemplates; 

$page->set_title( 'Welcome!' );
$page->get_header();

$page->get_account();

$page->get_footer();
?>