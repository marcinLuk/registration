<?php 
namespace App\classes;
include 'config.php';

session_start();

$page = new PageTemplates; 

$page->set_title( 'Register' );
$page->get_header();

$page->get_registration_form();

$page->get_footer();