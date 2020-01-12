<?php 

include('src/load_classes.php');

session_start();

$form_data = new Sanitize_data ($_POST);
$sanitize_form_data = $form_data->sanitize();

$user_password = $sanitize_form_data['pass1'];
$user_email = $sanitize_form_data['email'];

$user = new User;

if ( $user->check_if_user_exist($user_email) ) {

    if( $user->verify_user($user_email, $user_password) ) {

        $user_details = $user->get_user_details();

        $_SESSION['user_name'] = $user_details['user_name'];
        $_SESSION['email'] = $user_details['email'];
        $_SESSION['login'] = true;
        
        header('Location: ./?page=account', true, 301);
        die;

    } else {

        $_SESSION['title'] = 'Error!';
        $_SESSION['msg'] = 'Password is incorrect';
        header('Location: ./?page=message',true, 301);
        die;

    }

} else {

    $_SESSION['title'] = 'Error!';
    $_SESSION['msg'] = 'User '.$user_email.' do not exist!';
    header('Location: ./?page=message',true, 301);
    die;
}

?>