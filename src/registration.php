<?php

require_once '../config.php'; 
session_start();

$user = new App\classes\User;

$email = $_SESSION['email'];
$name = $_SESSION['name'];
$password = $_SESSION['pass1'];

if( $user->check_if_user_exist($email) ) {

    $_SESSION['message'] = 'User '. $email .' alredy exist!';
    header('Location: ../message.php?p=register_form'); 
    die;

} else {

    $user->register( $name, $password , $email );
    $_SESSION['login'] = true;
    header('Location: ../account.php'); 

}
