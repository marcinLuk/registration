<?php 
spl_autoload_register (function($class_name) {

    $dirs = array(
        'layout',
        'form',
        'database'
    ) ;
    

    foreach( $dirs as $dir ) {
        if (file_exists('src/'.$dir.'_classes/'.$class_name.'.php')) {
            require_once('src/'.$dir.'_classes/'.$class_name.'.php');
            return;
        }
    }
});

?>