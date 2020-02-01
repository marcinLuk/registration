<?php 
namespace App\classes;

require_once '../config.php'; 
session_start(); 

$check_input = new CheckInput; 

$value = filter_var ( trim( $_POST['value'] ), FILTER_SANITIZE_EMAIL) ;
$type = $_POST['type'] ;

/**
 * check email
 */
if ( $type == 'email' ) {

    $error = $check_input->check_email( $value ) ;

    if ( $error ) {

        echo  $error ;

    } else {

        $_SESSION['email'] = $value;

    }
}


/**
 * check name
 */
if ( $type == 'name' ) {

    $error = $check_input->check_name( $value ) ;

    if ( $error ) {

        echo  $error ;

    } else {

        $_SESSION['name'] = $value;

    }
}

/**
 * check password
 */
if ( $type == 'pass1' ) {

    $error = $check_input->check_password( $value ) ;

    if ( $error ) {

        echo  $error ;

    } else {

        $_SESSION['pass1'] = $value;

    }
}

/**
 * check if both passwords are the same
 */
if ( $type == 'pass2' ) {

    $error = $check_input->check_both_passwords( $_SESSION['pass1'] , $value  ) ;

    if ( $error ) {

        echo  $error ;

    } 
}