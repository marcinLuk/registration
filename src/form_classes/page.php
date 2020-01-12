
<?php 

 class Page
 {
    
    private static $page_settings = array(
        'title'=>"",
        'msg'=>"",
        'username' => "",
        'email' => "",
    );

    public function set_title($title) {
        self::$page_settings['title'] = $title;
    }

    public static function get_title() {
        return self::$page_settings['title'];
    }

    public static function set_msg($msg) {
        self::$page_settings['msg'] = $msg;
    }

    public static function get_msg() {
        return self::$page_settings['msg'];
    }

    public static function set_username($username) {
        self::$page_settings['username'] = $username;
    }
    
    public static function get_username() {
        return self::$page_settings['username'];
    }

    public static function set_email($email) {
        self::$page_settings['email'] = $email;
    }
    
    public static function get_email() {
        return self::$page_settings['email'];
    }

    public function page_header() {
        include_once('./html/page_header.php');
    }

    public function footer() {
        include_once('./html/footer.php');
    }

    public function login_form () {
        include_once('./html/login_form.php');
    }

    public function registration_form () {
        include_once('./html/registration_form.php');
    }

    public function msg () {
        include_once('./html/message.php');
    }

    public function account() {
        include_once('./html/account.php');
    }

}
?>