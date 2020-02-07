<?php 
require_once '../config.php'; 
session_start();

$email = filter_var ( trim( $_POST['email'] ), FILTER_SANITIZE_EMAIL) ;
$password = filter_var ( trim( $_POST['pass1'] ), FILTER_SANITIZE_STRING) ;

$user = new App\classes\User; 

if ( !$user->check_if_user_exist( $email ) ) {

    $_SESSION['message'] = 'User '. $email ." don't exist!";
    header('Location: ../message.php?p=index'); 
    die;
    
} else {

    $results = $user->select_user( $email  );

    if( $results ['password'] !== $password ) {

        $_SESSION['message'] = 'Incorrect Password';
        header('Location: ../message.php?p=index'); 
        die;

    } else {

        header('Location: ../account.php'); 
        die;

    }

}

