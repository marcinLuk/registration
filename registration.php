<?php 

include_once('src/load_classes.php');

session_start();

$form_data = new Sanitize_data ($_POST);
$sanitize_form_data = $form_data->sanitize();

$user_name = $sanitize_form_data['name'];
$user_password = $sanitize_form_data['pass1'];
$user_email = $sanitize_form_data['email'];

$new_user = new User;

if ( $new_user->check_if_user_exist($user_email) ){

    $_SESSION['title'] = 'Error!';
    $_SESSION['msg'] = 'User '.$user_name.' alredy exist';
    header('Location: ./?page=message', true, 301);
    die;

} else {

    $new_user->register($user_name, $user_password, $user_email);
    
    $_SESSION['user_name'] = $user_name;
    $_SESSION['email'] = $user_email;
    $_SESSION['login'] = true;

    $_SESSION['page'] = 'account';
    header('Location: ./?page=account', true, 301);
    die;

}

?>